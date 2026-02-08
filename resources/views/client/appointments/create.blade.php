<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Citas',
        'route' => route('client.appointments.index'),
    ],
    [
        'name'=> 'Agendar Cita',
    ],
]">


{{-- PLANTILLA --}}
<div class="max-w-3xl mx-auto py-8 px-4">

    <h1 class="text-2xl font-bold text-gray-800 mb-6">Agendar Cita</h1>

    {{-- Mensaje de error si el servicio no estaba disponible --}}
    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    {{-- ============================= --}}
    {{-- SERVICIO SELECCIONADO         --}}
    {{-- ============================= --}}
    @if($selectedService)
        <div class="bg-white rounded-lg shadow p-6 mb-6 border-l-4 border-indigo-500">
            <p class="text-sm text-indigo-600 font-medium mb-1">Servicio seleccionado</p>
            <h2 class="text-xl font-semibold text-gray-800">{{ $selectedService->name }}</h2>
            <p class="text-gray-600 mt-1">{{ $selectedService->description }}</p>
            <div class="flex items-center gap-4 mt-3 text-sm text-gray-500">
                <span>⏱ {{ $selectedService->duration }} min</span>
                <span>💰 {{ $selectedService->price_formatted }}</span>
                <span>📂 {{ $selectedService->category }}</span>
            </div>
        </div>
    @endif

    {{-- ============================= --}}
    {{-- FORMULARIO DE AGENDAMIENTO    --}}
    {{-- ============================= --}}
    <form action="{{ route('client.appointments.store') }}" method="POST"
          class="bg-white rounded-lg shadow p-6 space-y-6">
        @csrf

        {{-- Servicio --}}
        <div>
            <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">
                Servicio
            </label>
            <select name="service_id" id="service_id" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Selecciona un servicio --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}"
                        {{ ($selectedService && $selectedService->id == $service->id) ? 'selected' : '' }}>
                        {{ $service->name }} — {{ $service->price_formatted }} ({{ $service->duration }} min)
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Estilista --}}
        <div>
            <label for="stylist_id" class="block text-sm font-medium text-gray-700 mb-1">
                Estilista
            </label>
            <select name="stylist_id" id="stylist_id" required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">-- Selecciona un estilista --</option>
                @foreach($stylists as $stylist)
                    <option value="{{ $stylist->id }}">
                        {{ $stylist->user->name ?? 'Estilista #' . $stylist->id }}
                    </option>
                @endforeach
            </select>
            @error('stylist_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Fecha (mañana en adelante, solo L-S) --}}
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">
                Fecha
            </label>
            <input type="date" name="date" id="date" required
                   min="{{ now()->addDay()->format('Y-m-d') }}"
                   class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <p class="text-xs text-gray-400 mt-1">Lunes a Sábado. No se puede agendar para hoy.</p>
            @error('date')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Hora (10:00 - 18:00) --}}
        <div>
            <label for="start_time" class="block text-sm font-medium text-gray-700 mb-1">
                Hora de inicio
            </label>
            <input type="time" name="start_time" id="start_time" required
                   min="10:00" max="18:00"
                   class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <p class="text-xs text-gray-400 mt-1">Horario de atención: 10:00 AM a 6:00 PM</p>
            @error('start_time')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Notas opcionales --}}
        <div>
            <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">
                Notas adicionales (opcional)
            </label>
            <textarea name="notes" id="notes" rows="3"
                      class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                      placeholder="¿Algo que debamos saber?"></textarea>
        </div>

        {{-- Botón --}}
        <div class="flex justify-end">
            <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">
                Confirmar Cita
            </button>
        </div>
    </form>
</div>
{{-- PLANTILLA --}}

</x-admin-layout>
