<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Mis Citas',
    ],
]">

<!-- Contenedor principal (solo visual, sin Blade, sin condiciones) -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow">
  <!-- Header -->
  <div class="p-6 border-b border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
        Mis Citas
      </h2>

      <a href="#"
         class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        <i class="fa-solid fa-calendar-day mr-2"></i>
        Ver Hoy
      </a>
    </div>
  </div>

  <!-- Tabla de Citas -->
  <div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">Fecha</th>
          <th scope="col" class="px-6 py-3">Hora</th>
          <th scope="col" class="px-6 py-3">Cliente</th>
          <th scope="col" class="px-6 py-3">Servicio</th>
          <th scope="col" class="px-6 py-3">Estado</th>
          <th scope="col" class="px-6 py-3">Acciones</th>
        </tr>
      </thead>

      <tbody>
        <!-- Row 1 -->
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">28/01/2026</td>
          <td class="px-6 py-4">10:00 - 11:00</td>
          <td class="px-6 py-4">
            <div>
              <p class="font-medium text-gray-900 dark:text-white">Ana López</p>
              <p class="text-xs text-gray-500">+52 271 000 0000</p>
            </div>
          </td>
          <td class="px-6 py-4">Corte de cabello</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs font-semibold bg-yellow-100 text-yellow-800 rounded">
              Pendiente
            </span>
          </td>
          <td class="px-6 py-4">
            <div class="flex items-center gap-2">
              <a href="#" class="text-blue-600 hover:text-blue-800" title="Ver detalle">
                <i class="fa-solid fa-eye"></i>
              </a>
              <button type="button" class="text-green-600 hover:text-green-800" title="Marcar completada">
                <i class="fa-solid fa-check"></i>
              </button>
            </div>
          </td>
        </tr>

        <!-- Row 2 -->
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">29/01/2026</td>
          <td class="px-6 py-4">12:00 - 13:00</td>
          <td class="px-6 py-4">
            <div>
              <p class="font-medium text-gray-900 dark:text-white">Karla Méndez</p>
              <p class="text-xs text-gray-500">+52 271 111 1111</p>
            </div>
          </td>
          <td class="px-6 py-4">Tinte</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded">
              Confirmada
            </span>
          </td>
          <td class="px-6 py-4">
            <div class="flex items-center gap-2">
              <a href="#" class="text-blue-600 hover:text-blue-800" title="Ver detalle">
                <i class="fa-solid fa-eye"></i>
              </a>
              <button type="button" class="text-green-600 hover:text-green-800" title="Marcar completada">
                <i class="fa-solid fa-check"></i>
              </button>
            </div>
          </td>
        </tr>

        <!-- Row 3 -->
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">30/01/2026</td>
          <td class="px-6 py-4">16:00 - 17:00</td>
          <td class="px-6 py-4">
            <div>
              <p class="font-medium text-gray-900 dark:text-white">María Hernández</p>
              <p class="text-xs text-gray-500">+52 271 222 2222</p>
            </div>
          </td>
          <td class="px-6 py-4">Uñas</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded">
              Completada
            </span>
          </td>
          <td class="px-6 py-4">
            <div class="flex items-center gap-2">
              <a href="#" class="text-blue-600 hover:text-blue-800" title="Ver detalle">
                <i class="fa-solid fa-eye"></i>
              </a>
            </div>
          </td>
        </tr>

        <!-- Row 4 -->
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">31/01/2026</td>
          <td class="px-6 py-4">09:00 - 10:00</td>
          <td class="px-6 py-4">
            <div>
              <p class="font-medium text-gray-900 dark:text-white">Sofía Ruiz</p>
              <p class="text-xs text-gray-500">+52 271 333 3333</p>
            </div>
          </td>
          <td class="px-6 py-4">Peinado</td>
          <td class="px-6 py-4">
            <span class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded">
              Cancelada
            </span>
          </td>
          <td class="px-6 py-4">
            <div class="flex items-center gap-2">
              <a href="#" class="text-blue-600 hover:text-blue-800" title="Ver detalle">
                <i class="fa-solid fa-eye"></i>
              </a>
            </div>
          </td>
        </tr>

        <!-- Empty state (si quieres mostrar "sin citas", usa SOLO este bloque y quita las filas) -->
        <!--
        <tr>
          <td colspan="6" class="px-6 py-12 text-center text-gray-500">
            <i class="fa-solid fa-calendar-xmark text-4xl mb-4 block"></i>
            No tienes citas registradas.
          </td>
        </tr>
        -->
      </tbody>
    </table>
  </div>

  <!-- Paginación (solo visual) -->
  <div class="p-6 border-t border-gray-200 dark:border-gray-700">
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
      <p class="text-sm text-gray-500 dark:text-gray-400">
        Mostrando <span class="font-medium text-gray-900 dark:text-white">1</span> a
        <span class="font-medium text-gray-900 dark:text-white">4</span> de
        <span class="font-medium text-gray-900 dark:text-white">12</span> resultados
      </p>

      <nav class="inline-flex -space-x-px rounded-md shadow-sm" aria-label="Paginación">
        <a href="#"
           class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-200 rounded-l-md hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">
          Anterior
        </a>

        <a href="#"
           class="px-3 py-2 text-sm text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700">
          1
        </a>

        <a href="#"
           class="px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-blue-600 hover:bg-blue-700">
          2
        </a>

        <a href="#"
           class="px-3 py-2 text-sm text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700">
          3
        </a>

        <a href="#"
           class="px-3 py-2 text-sm text-gray-500 bg-white border border-gray-200 rounded-r-md hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">
          Siguiente
        </a>
      </nav>
    </div>
  </div>
</div>


</x-admin-layout>
