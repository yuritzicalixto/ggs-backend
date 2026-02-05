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
<div class="max-w-4xl mx-auto">
  <!-- Indicador de Pasos (estático) -->
  <div class="mb-8">
    <div class="flex items-center justify-center">
      <div class="flex items-center">
        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors bg-yellow-500 text-gray-900">
          <span>1</span>
        </div>
        <div class="w-16 md:w-24 h-1 mx-2 transition-colors bg-gray-200 dark:bg-gray-700"></div>
      </div>

      <div class="flex items-center">
        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
          <span>2</span>
        </div>
        <div class="w-16 md:w-24 h-1 mx-2 transition-colors bg-gray-200 dark:bg-gray-700"></div>
      </div>

      <div class="flex items-center">
        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
          <span>3</span>
        </div>
        <div class="w-16 md:w-24 h-1 mx-2 transition-colors bg-gray-200 dark:bg-gray-700"></div>
      </div>

      <div class="flex items-center">
        <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold transition-colors bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
          <span>4</span>
        </div>
      </div>
    </div>

    <div class="flex justify-center mt-2">
      <p class="text-sm text-gray-500 dark:text-gray-400">Servicio</p>
    </div>
  </div>

  <!-- Contenedor del formulario (solo visual) -->
  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">

    <!-- PASO 1: Seleccionar Servicio (VISIBLE) -->
    <div class="p-6">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
        <i class="fa-solid fa-scissors text-yellow-500 mr-2"></i>
        ¿Qué servicio deseas?
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Servicio (card) -->
        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Corte de Cabello</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                <i class="fa-regular fa-clock mr-1"></i>
                45 min
              </p>
            </div>
            <span class="text-lg font-bold text-yellow-600 dark:text-yellow-400">$250.00</span>
          </div>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Incluye lavado y peinado básico.</p>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Manicure</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                <i class="fa-regular fa-clock mr-1"></i>
                60 min
              </p>
            </div>
            <span class="text-lg font-bold text-yellow-600 dark:text-yellow-400">$320.00</span>
          </div>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Esmaltado tradicional o gel (según disponibilidad).</p>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Tinte</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                <i class="fa-regular fa-clock mr-1"></i>
                120 min
              </p>
            </div>
            <span class="text-lg font-bold text-yellow-600 dark:text-yellow-400">$850.00</span>
          </div>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">El precio puede variar según largo y técnica.</p>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Peinado</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                <i class="fa-regular fa-clock mr-1"></i>
                50 min
              </p>
            </div>
            <span class="text-lg font-bold text-yellow-600 dark:text-yellow-400">$400.00</span>
          </div>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Ondas, planchado o recogido sencillo.</p>
        </div>
      </div>
    </div>

    <!-- PASO 2: Seleccionar Estilista (OCULTO POR DEFECTO - visual) -->
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 hidden">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
        <i class="fa-solid fa-user text-yellow-500 mr-2"></i>
        ¿Con quién te gustaría atenderte?
      </h2>

      <!-- Opción: Sin preferencia -->
      <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700 mb-4">
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
            <i class="fa-solid fa-shuffle text-white text-xl"></i>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 dark:text-white">Sin preferencia</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Te asignaremos al estilista disponible</p>
          </div>
        </div>
      </div>

      <!-- Lista de Estilistas -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
              <span class="text-xl font-bold text-gray-500">A</span>
            </div>
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Ana López</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400">Cortes / Peinados</p>
            </div>
          </div>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
              <span class="text-xl font-bold text-gray-500">M</span>
            </div>
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">María Pérez</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400">Colorimetría</p>
            </div>
          </div>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
              <span class="text-xl font-bold text-gray-500">C</span>
            </div>
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Carla Díaz</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400">Uñas</p>
            </div>
          </div>
        </div>

        <div class="p-4 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer transition hover:bg-gray-50 dark:hover:bg-gray-700">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
              <span class="text-xl font-bold text-gray-500">J</span>
            </div>
            <div>
              <h3 class="font-semibold text-gray-900 dark:text-white">Jorge Ruiz</h3>
              <p class="text-sm text-gray-500 dark:text-gray-400">Barbería</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Loader (placeholder visual) -->
      <div class="text-center py-8 hidden">
        <i class="fa-solid fa-spinner fa-spin text-2xl text-gray-400"></i>
        <p class="text-gray-500 mt-2">Cargando estilistas...</p>
      </div>
    </div>

    <!-- PASO 3: Seleccionar Fecha y Hora (OCULTO POR DEFECTO - visual) -->
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 hidden">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
        <i class="fa-solid fa-calendar text-yellow-500 mr-2"></i>
        ¿Cuándo te gustaría venir?
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Selector de Fecha -->
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Fecha</label>
          <input
            type="date"
            class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 dark:bg-gray-700 dark:text-white"
          />
        </div>

        <!-- Horarios Disponibles -->
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Horario</label>

          <!-- Loader (placeholder) -->
          <div class="text-center py-8 hidden">
            <i class="fa-solid fa-spinner fa-spin text-xl text-gray-400"></i>
          </div>

          <!-- Slots (ejemplo) -->
          <div class="grid grid-cols-3 gap-2 max-h-64 overflow-y-auto">
            <button type="button" class="p-2 rounded-lg text-sm transition bg-yellow-500 text-gray-900 font-semibold">10:00</button>
            <button type="button" class="p-2 rounded-lg text-sm transition bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-white">10:30</button>
            <button type="button" class="p-2 rounded-lg text-sm transition bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-white">11:00</button>

            <button type="button" class="p-2 rounded-lg text-sm transition bg-gray-50 dark:bg-gray-800 text-gray-400 cursor-not-allowed line-through" disabled>11:30</button>
            <button type="button" class="p-2 rounded-lg text-sm transition bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-white">12:00</button>
            <button type="button" class="p-2 rounded-lg text-sm transition bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-white">12:30</button>
          </div>

          <!-- Sin slots (placeholder) -->
          <div class="text-center py-8 text-gray-500 hidden">
            <i class="fa-solid fa-calendar-xmark text-2xl mb-2"></i>
            <p>No hay horarios disponibles para esta fecha.</p>
          </div>

          <!-- Selecciona fecha (placeholder) -->
          <div class="text-center py-8 text-gray-500 hidden">
            <i class="fa-regular fa-calendar text-2xl mb-2"></i>
            <p>Selecciona una fecha primero</p>
          </div>
        </div>
      </div>
    </div>

    <!-- PASO 4: Confirmar (OCULTO POR DEFECTO - visual) -->
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 hidden">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">
        <i class="fa-solid fa-check-circle text-yellow-500 mr-2"></i>
        Confirma tu cita
      </h2>

      <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mb-6">
        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Servicio</p>
            <p class="font-semibold text-gray-900 dark:text-white">Corte de Cabello</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Precio</p>
            <p class="font-semibold text-yellow-600 dark:text-yellow-400">$250.00</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Estilista</p>
            <p class="font-semibold text-gray-900 dark:text-white">Por asignar</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Duración</p>
            <p class="font-semibold text-gray-900 dark:text-white">45 min</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Fecha</p>
            <p class="font-semibold text-gray-900 dark:text-white">lunes, 3 de febrero de 2026</p>
          </div>
          <div>
            <p class="text-sm text-gray-500 dark:text-gray-400">Hora</p>
            <p class="font-semibold text-gray-900 dark:text-white">10:00</p>
          </div>
        </div>
      </div>

      <!-- Notas adicionales -->
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Notas para tu estilista (opcional)
        </label>
        <textarea
          rows="3"
          class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 dark:bg-gray-700 dark:text-white"
          placeholder="Ej: Quiero el corte como en la foto que te mostraré, soy alérgica a ciertos productos..."
        ></textarea>
      </div>

      <!-- Recordatorio -->
      <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
        <div class="flex items-start gap-3">
          <i class="fa-solid fa-info-circle text-blue-500 mt-0.5"></i>
          <div class="text-sm text-blue-700 dark:text-blue-300">
            <p class="font-medium">Recuerda:</p>
            <ul class="list-disc list-inside mt-1 space-y-1">
              <li>Puedes cancelar hasta 4 horas antes de tu cita</li>
              <li>Llega 5 minutos antes de tu hora</li>
              <li>El pago se realiza presencialmente</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Botones de Navegación (estáticos) -->
    <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 flex justify-between">
      <button
        type="button"
        class="px-6 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition"
        disabled
      >
        <i class="fa-solid fa-arrow-left mr-2"></i>
        Anterior
      </button>

      <button
        type="button"
        class="px-6 py-2 font-semibold rounded-lg transition bg-yellow-500 hover:bg-yellow-600 text-gray-900"
      >
        Siguiente
        <i class="fa-solid fa-arrow-right ml-2"></i>
      </button>

      <!-- Botón final (placeholder) -->
      <form method="POST" action="#" class="hidden">
        <input type="hidden" name="service_id" value="">
        <input type="hidden" name="stylist_id" value="">
        <input type="hidden" name="date" value="">
        <input type="hidden" name="start_time" value="">
        <input type="hidden" name="notes" value="">

        <button
          type="submit"
          class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition"
        >
          <i class="fa-solid fa-check mr-2"></i>
          Confirmar Cita
        </button>
      </form>
    </div>
  </div>
</div>


{{-- PLANTILLA --}}

</x-admin-layout>
