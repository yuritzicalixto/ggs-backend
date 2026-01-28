<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Mis Apartados',
    ],
]">

{{-- PLANTILLA --}}
<!-- Apartados Activos -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow mb-6">
  <div class="p-6 border-b border-gray-200 dark:border-gray-700">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
      <i class="fa-solid fa-box-archive text-yellow-500 mr-3"></i>
      Apartados Activos
    </h2>
  </div>

  <!-- ======= ESTADO: CON APARTADOS (visual) ======= -->
  <div class="divide-y divide-gray-200 dark:divide-gray-700">
    <!-- Apartado 1 -->
    <div class="p-6">
      <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="flex-1">
          <!-- Header del apartado -->
          <div class="flex items-center gap-3 mb-3">
            <span
              class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-400 font-mono font-semibold rounded"
            >
              RES-000128
            </span>

            <!-- Vence pronto (alternativa) -->
            <span
              class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs font-semibold rounded animate-pulse"
            >
              <i class="fa-solid fa-exclamation-triangle mr-1"></i>
              ¡Vence pronto!
            </span>
          </div>

          <!-- Info -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
            <div>
              <p class="text-gray-500 dark:text-gray-400">Fecha de apartado</p>
              <p class="font-medium text-gray-900 dark:text-white">22/01/2026</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Fecha límite</p>
              <p class="font-medium text-gray-900 dark:text-white">29/01/2026</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Productos</p>
              <p class="font-medium text-gray-900 dark:text-white">4 items</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Total</p>
              <p class="font-bold text-yellow-600 dark:text-yellow-400 text-lg">$1,245.00</p>
            </div>
          </div>

          <!-- Lista de productos (preview) -->
          <div class="mt-4 flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
              Shampoo Reparador (x2)
            </span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
              Mascarilla Hidratante (x1)
            </span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
              Cera Mate (x1)
            </span>

            <!-- + más (alternativa) -->
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-500 text-xs rounded">+2 más</span>
          </div>
        </div>

        <!-- Días restantes y acciones -->
        <div class="flex flex-col items-end gap-3">
          <div class="text-center">
            <!-- Verde / Rojo (solo visual) -->
            <div class="text-3xl font-bold text-red-500">1</div>
            <!-- <div class="text-3xl font-bold text-green-500">6</div> -->
            <div class="text-xs text-gray-500 dark:text-gray-400">días restantes</div>
          </div>

          <div class="flex gap-2">
            <a
              href="#"
              class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 dark:text-blue-400 dark:hover:bg-blue-900/20 rounded-lg transition"
            >
              Ver detalle
            </a>

            <form action="#" method="POST">
              <button
                type="button"
                class="px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20 rounded-lg transition"
              >
                Cancelar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Apartado 2 -->
    <div class="p-6">
      <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
        <div class="flex-1">
          <div class="flex items-center gap-3 mb-3">
            <span
              class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-400 font-mono font-semibold rounded"
            >
              RES-000129
            </span>
            <!-- Sin "vence pronto" -->
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
            <div>
              <p class="text-gray-500 dark:text-gray-400">Fecha de apartado</p>
              <p class="font-medium text-gray-900 dark:text-white">24/01/2026</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Fecha límite</p>
              <p class="font-medium text-gray-900 dark:text-white">31/01/2026</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Productos</p>
              <p class="font-medium text-gray-900 dark:text-white">2 items</p>
            </div>
            <div>
              <p class="text-gray-500 dark:text-gray-400">Total</p>
              <p class="font-bold text-yellow-600 dark:text-yellow-400 text-lg">$430.00</p>
            </div>
          </div>

          <div class="mt-4 flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
              Aceite Capilar (x1)
            </span>
            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-xs rounded">
              Serum Brillo (x1)
            </span>
          </div>
        </div>

        <div class="flex flex-col items-end gap-3">
          <div class="text-center">
            <div class="text-3xl font-bold text-green-500">6</div>
            <div class="text-xs text-gray-500 dark:text-gray-400">días restantes</div>
          </div>

          <div class="flex gap-2">
            <a
              href="#"
              class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 dark:text-blue-400 dark:hover:bg-blue-900/20 rounded-lg transition"
            >
              Ver detalle
            </a>
            <form action="#" method="POST">
              <button
                type="button"
                class="px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20 rounded-lg transition"
              >
                Cancelar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======= ESTADO: SIN APARTADOS (visual) ======= -->
  <!--
  <div class="p-12 text-center">
    <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
      <i class="fa-solid fa-box-open text-3xl text-gray-400"></i>
    </div>
    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">No tienes apartados activos</h3>
    <p class="text-gray-500 dark:text-gray-400 mb-4">Explora nuestros productos y crea tu primer apartado</p>
    <a
      href="#"
      class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium rounded-lg transition"
    >
      <i class="fa-solid fa-box mr-2"></i>
      Ver Productos
    </a>
  </div>
  -->
</div>

<!-- Historial de Apartados -->
<div class="bg-white dark:bg-gray-800 rounded-lg shadow">
  <div class="p-6 border-b border-gray-200 dark:border-gray-700">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
      <i class="fa-solid fa-history text-gray-500 mr-3"></i>
      Historial de Apartados
    </h2>
  </div>

  <!-- ======= ESTADO: CON HISTORIAL (visual) ======= -->
  <div class="overflow-x-auto">
    <table class="w-full text-sm text-left">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th class="px-6 py-3">No. Apartado</th>
          <th class="px-6 py-3">Fecha</th>
          <th class="px-6 py-3">Productos</th>
          <th class="px-6 py-3">Total</th>
          <th class="px-6 py-3">Estado</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">RES-000120</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">15/01/2026</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">3 productos</td>
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">$890.00</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 rounded"
            >
              Completado
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">RES-000118</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">10/01/2026</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">5 productos</td>
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">$1,430.00</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 rounded"
            >
              Cancelado
            </span>
          </td>
        </tr>

        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
          <td class="px-6 py-4 font-mono font-medium text-gray-900 dark:text-white">RES-000110</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">02/01/2026</td>
          <td class="px-6 py-4 text-gray-700 dark:text-gray-300">2 productos</td>
          <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">$420.00</td>
          <td class="px-6 py-4">
            <span
              class="px-2 py-1 text-xs font-semibold bg-gray-100 text-gray-800 dark:bg-gray-600 dark:text-gray-200 rounded"
            >
              Expirado
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

      <div class="text-sm text-gray-500 dark:text-gray-400">Página 1 de 2</div>

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
    <p>No tienes apartados anteriores.</p>
  </div>
  -->
</div>

{{-- PLANTILLA --}}

</x-admin-layout>
