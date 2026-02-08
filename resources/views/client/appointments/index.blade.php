<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Citas',
    ],
]">

{{-- PLANTILLA --}}
<!-- Botón Agendar -->
<div class="max-w-4xl mx-auto py-8 px-4">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Mis Citas</h1>
        <a href="{{ route('client.appointments.create') }}"
           class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition text-sm">
            + Nueva Cita
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @forelse($appointments as $appointment)
        <div class="bg-white rounded-lg shadow p-4 mb-4 flex items-center justify-between">
            <div>
                <h3 class="font-semibold text-gray-800">{{ $appointment->service->name }}</h3>
                <p class="text-sm text-gray-500">
                    {{ $appointment->date->format('d/m/Y') }} · {{ $appointment->time_range }}
                </p>
                <p class="text-sm text-gray-400">
                    Estilista: {{ $appointment->stylist->user->name ?? 'Por asignar' }}
                </p>
            </div>
            <span class="px-3 py-1 rounded-full text-xs font-medium"
                  style="background: {{ $appointment->status_color }}20; color: {{ $appointment->status_color }};">
                {{ ucfirst($appointment->status) }}
            </span>
        </div>
    @empty
        <div class="text-center py-12 text-gray-400">
            <p class="text-lg">Aún no tienes citas agendadas.</p>
            <a href="{{ route('client.appointments.create') }}" class="text-indigo-600 underline mt-2 inline-block">
                Agendar mi primera cita
            </a>
        </div>
    @endforelse
</div>
{{-- PLANTILLA --}}

</x-admin-layout>
