<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Stylist;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Listado de citas del cliente autenticado.
     */
    public function index()
    {
        // Obtener las citas del cliente logueado, con sus relaciones
        $appointments = Appointment::where('client_id', Auth::id())
            ->with(['service', 'stylist.user']) // Cargar servicio y estilista
            ->orderBy('date', 'desc')
            ->orderBy('start_time', 'desc')
            ->get();

        return view('client.appointments.index', compact('appointments'));
    }

    /**
     * Formulario para agendar una nueva cita.
     *
     * Recibe opcionalmente ?service_id=X desde el frontend de servicios.
     */
    public function create(Request $request)
    {
        // Si viene un service_id desde el frontend, precargamos ese servicio
        $selectedService = null;
        if ($request->has('service_id')) {
            $selectedService = Service::active()
                ->find($request->service_id);

            // Si el servicio no existe o no está activo, ignoramos
            if (!$selectedService) {
                return redirect()
                    ->route('client.appointments.create')
                    ->with('error', 'El servicio seleccionado no está disponible.');
            }
        }

        // Cargar todos los servicios activos (por si quiere cambiar)
        $services = Service::active()
            ->orderBy('category')
            ->orderBy('name')
            ->get();

        // Cargar estilistas activos (para que el cliente elija o vea el asignado)
        $stylists = Stylist::where('status', 'active')
            ->with('user') // Relación con la tabla users para obtener el nombre
            ->get();

        return view('client.appointments.create', compact(
            'services',
            'selectedService',
            'stylists'
        ));
    }

    /**
     * Guardar la cita (la lógica completa la implementaremos después).
     */
    public function store(Request $request)
    {
        // Por ahora solo la estructura base — la lógica de horarios,
        // disponibilidad del estilista y validaciones las haremos después.

        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'stylist_id' => 'required|exists:stylists,id',
            'date'       => 'required|date|after:today', // No puede ser hoy, sino mañana en adelante
            'start_time' => 'required|date_format:H:i',
        ]);

        // Obtener el servicio para calcular la hora de fin
        $service = Service::findOrFail($validated['service_id']);

        // Calcular end_time sumando la duración del servicio
        $startTime = \Carbon\Carbon::createFromFormat('H:i', $validated['start_time']);
        $endTime = $startTime->copy()->addMinutes($service->duration);

        // Crear la cita
        $appointment = Appointment::create([
            'client_id'  => Auth::id(),
            'service_id' => $validated['service_id'],
            'stylist_id' => $validated['stylist_id'],
            'date'       => $validated['date'],
            'start_time' => $validated['start_time'],
            'end_time'   => $endTime->format('H:i'),
            'status'     => 'pending', // Pendiente hasta que se confirme
        ]);

        return redirect()
            ->route('client.appointments.index')
            ->with('success', '¡Cita agendada exitosamente! Te confirmaremos pronto.');
    }

    /**
     * Ver detalle de una cita.
     */
    public function show(Appointment $appointment)
    {
        // Verificar que la cita pertenece al cliente logueado
        if ($appointment->client_id !== Auth::id()) {
            abort(403);
        }

        return view('client.appointments.show', compact('appointment'));
    }
}
