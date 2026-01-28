<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Agendar Cita',
    ],
]">

{{-- PLANTILLA --}}
<!-- Botón Agendar -->
<div class="mb-6">
  <a
    href="#"
    class="inline-flex items-center px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-semibold rounded-lg transition shadow-lg hover:shadow-xl"
  >
    <i class="fa-solid fa-calendar-plus mr-2"></i>
    Agendar Nueva Cita
  </a>
</div>

<!-- Próximas Citas -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow mb-6">
  <div class="p-6 border-b border-gray-200 dark:border-gray-700">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
      <i class="fa-solid fa-calendar-check text-green-500 mr-3"></i>
      Próximas Citas
    </h2>
  </div>

  <!-- ======= ESTADO: CON CITAS (visual) ======= -->
  <div class="divide-y divide-gray-200 dark:divide-gray-700">
    <!-- Cita 1 -->
    <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="flex items-start gap-4">
          <!-- Fecha destacada -->
          <div class="text-center min-w-[70px] p-3 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg">
            <div class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">05</div>
            <div class="text-xs text-yellow-700 dark:text-yellow-500 uppercase font-medium">FEB</div>
            <div class="text-xs text-gray-500 dark:text-gray-400">2026</div>
          </div>

          <!-- Detalles -->
          <div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Corte de Cabello</h3>

            <div class="mt-1 space-y-1 text-sm text-gray-500 dark:text-gray-400">
              <p class="flex items-center">
                <i class="fa-regular fa-clock w-5"></i>
                10:30 AM - 11:15 AM
              </p>

              <!-- Estilista asignado -->
              <p class="flex items-center">
                <i class="fa-regular fa-user w-5"></i>
                Ana Martínez
              </p>

              <!-- Estilista por asignar (alternativa) -->
              <!--
              <p class="flex items-center text-blue-500">
                <i class="fa-solid fa-shuffle w-5"></i>
                Estilista por asignar
              </p>
              -->
            </div>

            <!-- Estado -->
            <div class="mt-2">
              <!-- Pendiente -->
              <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200"
              >
                <i class="fa-solid fa-clock mr-1"></i> Pendiente de confirmar
              </span>

              <!-- Confirmada (alternativa) -->
              <!--
              <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200"
              >
                <i class="fa-solid fa-check mr-1"></i> Confirmada
              </span>
              -->
            </div>
          </div>
        </div>

        <!-- Acciones -->
        <div class="flex items-center gap-2">
          <a
            href="#"
            class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 dark:text-blue-400 dark:hover:bg-blue-900/20 rounded-lg transition"
          >
            Ver detalle
          </a>

          <!-- Botón cancelar (solo visual). Para mostrar el modal, quita "hidden" del #cancelModal -->
          <button
            type="button"
            class="px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20 rounded-lg transition"
          >
            Cancelar
          </button>
        </div>
      </div>
    </div>

    <!-- Cita 2 -->
    <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div class="flex items-start gap-4">
          <div class="text-center min-w-[70px] p-3 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg">
            <div class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">12</div>
            <div class="text-xs text-yellow-700 dark:text-yellow-500 uppercase font-medium">FEB</div>
            <div class="text-xs text-gray-500 dark:text-gray-400">2026</div>
          </div>

          <div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Manicure</h3>

            <div class="mt-1 space-y-1 text-sm text-gray-500 dark:text-gray-400">
              <p class="flex items-center">
                <i class="fa-regular fa-clock w-5"></i>
                04:00 PM - 05:00 PM
              </p>

              <p class="flex items-center text-blue-500">
                <i class="fa-solid fa-shuffle w-5"></i>
                Estilista por asignar
              </p>
            </div>

            <div class="mt-2">
              <span
                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200"
              >
                <i class="fa-solid fa-check mr-1"></i> Confirmada
              </span>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <a
            href="#"
            class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 dark:text-blue-400 dark:hover:bg-blue-900/20 rounded-lg transition"
          >
            Ver detalle
          </a>
          <button
            type="button"
            class="px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20 rounded-lg transition"
          >
            Cancelar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= ESTADO: SIN CITAS (visual) ======= -->
  <!--
  <div class="p-12 text-center">
    <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
      <i class="fa-regular fa-calendar text-3xl text-gray-400"></i>
    </div>
    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No tienes citas próximas</h3>
    <p class="text-gray-500 dark:text-gray-400 mb-4">¿Qué esperas? Agenda tu próxima visita.</p>
    <a
      href="#"
      class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium rounded-lg transition"
    >
      <i class="fa-solid fa-plus mr-2"></i>
      Agendar Cita
    </a>
  </div>
  -->
</div>

<!-- Historial de Citas -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow">
  <div class="p-6 border-b border-gray-200 dark:border-gray-700">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
      <i class="fa-solid fa-history text-gray-500 mr-3"></i>
      Historial de Citas
    </h2>
  </div>

  <!-- ======= ESTADO: CON HISTORIAL (visual) ======= -->
  <div class="overflow-x-auto">
    <table class="w-full text-sm text-left">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th class="px-6 py-3">Fecha</th>
          <th class="px-6 py-3">Servicio</th>
          <th class="px-6 py-3">Estilista</th>
          <th class="px-6 py-3">Estado</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
            20/01/2026
            <span class="block text-xs text-gray-500 font-normal">12:00 PM</span>
          </td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">Tinte</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">No asignado</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 rounded"
            >
              Completada
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
            10/01/2026
            <span class="block text-xs text-gray-500 font-normal">03:30 PM</span>
          </td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">Peinado</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">Carlos López</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 rounded"
            >
              Cancelada
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
            02/01/2026
            <span class="block text-xs text-gray-500 font-normal">09:00 AM</span>
          </td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">Manicure</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">Ana Martínez</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-gray-100 text-gray-800 dark:bg-gray-600 dark:text-gray-200 rounded"
            >
              No asistí
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Paginación (solo visual) -->
  <div class="p-6 border-t border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between gap-3">
      <button
        type="button"
        class="px-3 py-2 text-sm rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition"
      >
        Anterior
      </button>

      <div class="text-sm text-gray-500 dark:text-gray-400">Página 1 de 3</div>

      <button
        type="button"
        class="px-3 py-2 text-sm rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition"
      >
        Siguiente
      </button>
    </div>
  </div>

  <!-- ======= ESTADO: SIN HISTORIAL (visual) ======= -->
  <!--
  <div class="p-12 text-center text-gray-500 dark:text-gray-400">
    <i class="fa-solid fa-inbox text-4xl mb-4"></i>
    <p>No tienes citas anteriores.</p>
  </div>
  -->
</div>

<!-- Modal de Cancelación (por defecto oculto: "hidden") -->
<div id="cancelModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="fixed inset-0 bg-black opacity-50"></div>

    <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full p-6">
      <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Cancelar Cita</h3>

      <p class="text-gray-500 dark:text-gray-400 mb-4">
        ¿Estás seguro de que deseas cancelar esta cita? Esta acción no se puede deshacer.
      </p>

      <form action="#" method="POST">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            Motivo de cancelación (opcional)
          </label>
          <textarea
            name="reason"
            rows="3"
            class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 dark:bg-gray-700 dark:text-white"
            placeholder="Cuéntanos por qué cancelas..."
          ></textarea>
        </div>

        <div class="flex justify-end gap-3">
          <button
            type="button"
            class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition"
          >
            No, mantener cita
          </button>

          <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition">
            Sí, cancelar cita
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- PLANTILLA --}}

</x-admin-layout>
