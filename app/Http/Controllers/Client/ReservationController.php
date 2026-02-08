<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\ReservationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Listado de apartados del cliente.
     */
    public function index()
    {
        $reservations = Reservation::where('client_id', Auth::id())
            ->with('items.product')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('client.reservations.index', compact('reservations'));
    }

    /**
     * Vista para confirmar el apartado.
     * Los productos vienen desde localStorage (el JS los lee y los muestra).
     */
    public function create()
    {
        return view('client.reservations.create');
    }

    /**
     * Guardar el apartado en la base de datos.
     * Recibe los productos del carrito desde el formulario.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'items'              => 'required|array|min:1|max:5',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity'   => 'required|integer|min:1',
        ], [
            'items.required' => 'Debes agregar al menos un producto.',
            'items.max'      => 'Máximo 5 productos por apartado.',
        ]);

        // Usamos una transacción para que todo se guarde o nada
        $reservation = DB::transaction(function () use ($validated) {

            // Crear el apartado (el número y fechas se generan automáticamente en el modelo)
            $reservation = Reservation::create([
                'client_id' => Auth::id(),
                'total'     => 0, // Se recalcula abajo
                'status'    => 'active',
            ]);

            $total = 0;

            foreach ($validated['items'] as $itemData) {
                // Obtener el producto y verificar stock
                $product = Product::findOrFail($itemData['product_id']);

                if ($product->stock < $itemData['quantity']) {
                    throw new \Exception("Stock insuficiente para: {$product->name}");
                }

                $subtotal = $product->price * $itemData['quantity'];

                // Crear el item del apartado
                ReservationItem::create([
                    'reservation_id' => $reservation->id,
                    'product_id'     => $product->id,
                    'quantity'       => $itemData['quantity'],
                    'unit_price'     => $product->price,
                    'subtotal'       => $subtotal,
                ]);

                // Descontar stock del producto
                $product->decrement('stock', $itemData['quantity']);

                $total += $subtotal;
            }

            // Actualizar el total del apartado
            $reservation->update(['total' => $total]);

            return $reservation;
        });

        return redirect()
            ->route('client.reservations.index')
            ->with('success', "¡Apartado #{$reservation->reservation_number} creado exitosamente! Tienes 7 días para recogerlo.");
    }

    /**
     * Ver detalle de un apartado.
     */
    public function show(Reservation $reservation)
    {
        if ($reservation->client_id !== Auth::id()) {
            abort(403);
        }

        $reservation->load('items.product');

        return view('client.reservations.show', compact('reservation'));
    }
}
