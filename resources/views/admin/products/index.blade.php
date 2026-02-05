<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Productos',
    ],
]">

{{-- PLANTILLA --}}
<!-- HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
  <div>
    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Productos</h1>
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Gestiona los productos de la tienda</p>
  </div>

  <a
    href="#"
    class="inline-flex items-center justify-center px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white font-medium rounded-lg transition-colors duration-200 shadow-sm"
  >
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
    </svg>
    Nuevo Producto
  </a>
</div>

<!-- ALERTA (EJEMPLO) -->
<!-- Muestra/oculta este bloque según tu lógica -->
<div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
  <div class="flex items-center">
    <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    <p class="text-green-700 dark:text-green-400">Producto creado correctamente.</p>
  </div>
</div>

<!-- TARJETAS DE ESTADÍSTICAS -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <!-- Total -->
  <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
    <div class="flex items-center">
      <div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
          />
        </svg>
      </div>
      <div class="ml-4">
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total</p>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">128</p>
      </div>
    </div>
  </div>

  <!-- Activos -->
  <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
    <div class="flex items-center">
      <div class="p-2 bg-green-100 dark:bg-green-900/30 rounded-lg">
        <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>
      <div class="ml-4">
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Activos</p>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">102</p>
      </div>
    </div>
  </div>

  <!-- Agotados -->
  <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
    <div class="flex items-center">
      <div class="p-2 bg-red-100 dark:bg-red-900/30 rounded-lg">
        <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
        </svg>
      </div>
      <div class="ml-4">
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Agotados</p>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">7</p>
      </div>
    </div>
  </div>

  <!-- Stock Bajo -->
  <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
    <div class="flex items-center">
      <div class="p-2 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg">
        <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
          />
        </svg>
      </div>
      <div class="ml-4">
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Stock Bajo</p>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">12</p>
      </div>
    </div>
  </div>
</div>

<!-- FILTROS -->
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-4 mb-6">
  <form action="#" method="GET" class="flex flex-col sm:flex-row gap-4">
    <!-- Search -->
    <div class="flex-1">
      <label for="search" class="sr-only">Buscar</label>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        <input
          type="text"
          name="search"
          id="search"
          value=""
          class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 focus:ring-amber-500 focus:border-amber-500"
          placeholder="Buscar por nombre, marca o descripción..."
        />
      </div>
    </div>

    <!-- Category -->
    <div class="sm:w-48">
      <label for="category" class="sr-only">Categoría</label>
      <select
        name="category"
        id="category"
        class="block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-amber-500 focus:border-amber-500"
      >
        <option value="">Todas las categorías</option>
        <option value="1">Cuidado del cabello</option>
        <option value="2">Uñas</option>
        <option value="3">Skincare</option>
      </select>
    </div>

    <!-- Status -->
    <div class="sm:w-36">
      <label for="status" class="sr-only">Estado</label>
      <select
        name="status"
        id="status"
        class="block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-amber-500 focus:border-amber-500"
      >
        <option value="">Todos</option>
        <option value="active">Activos</option>
        <option value="inactive">Inactivos</option>
      </select>
    </div>

    <!-- Actions -->
    <div class="flex gap-2">
      <button
        type="submit"
        class="px-4 py-2 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 font-medium rounded-lg transition-colors"
      >
        Filtrar
      </button>
      <a
        href="#"
        class="px-4 py-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 font-medium"
      >
        Limpiar
      </a>
    </div>
  </form>
</div>

<!-- TABLA -->
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
  <!-- ====== ESTADO CON DATOS (TABLE) ====== -->
  <div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
      <thead class="bg-gray-50 dark:bg-gray-700/50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Producto
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Categoría
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Precio
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Stock
          </th>
          <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Estado
          </th>
          <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
            Acciones
          </th>
        </tr>
      </thead>

      <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
        <!-- ROW 1 -->
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="flex-shrink-0 h-12 w-12">
                <img
                  class="h-12 w-12 rounded-lg object-cover border border-gray-200 dark:border-gray-600"
                  src="https://placehold.co/100x100/f3f4f6/9ca3af?text=IMG"
                  alt="Producto"
                />
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900 dark:text-white">Shampoo Reparador</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Marca X</div>
              </div>
            </div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200"
            >
              Cuidado del cabello
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-semibold text-gray-900 dark:text-white">$ 249.00</div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <!-- Stock OK -->
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400"
            >
              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
              25 unid.
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400"
            >
              Activo
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <div class="flex items-center justify-end gap-2">
              <a
                href="#"
                class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                title="Ver detalles"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                  />
                </svg>
              </a>

              <a
                href="#"
                class="p-2 text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-colors"
                title="Editar"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                  />
                </svg>
              </a>

              <form action="#" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                <button
                  type="submit"
                  class="p-2 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                  title="Eliminar"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                    />
                  </svg>
                </button>
              </form>
            </div>
          </td>
        </tr>

        <!-- ROW 2 (STOCK BAJO) -->
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="flex-shrink-0 h-12 w-12">
                <img
                  class="h-12 w-12 rounded-lg object-cover border border-gray-200 dark:border-gray-600"
                  src="https://placehold.co/100x100/f3f4f6/9ca3af?text=IMG"
                  alt="Producto"
                />
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900 dark:text-white">Aceite Capilar</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Marca Y</div>
              </div>
            </div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200"
            >
              Cuidado del cabello
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-semibold text-gray-900 dark:text-white">$ 199.00</div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-400"
            >
              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                  clip-rule="evenodd"
                />
              </svg>
              3 unid.
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-400"
            >
              Activo
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <div class="flex items-center justify-end gap-2">
              <a
                href="#"
                class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                title="Ver detalles"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                  />
                </svg>
              </a>

              <a
                href="#"
                class="p-2 text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-colors"
                title="Editar"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                  />
                </svg>
              </a>

              <form action="#" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                <button
                  type="submit"
                  class="p-2 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                  title="Eliminar"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                    />
                  </svg>
                </button>
              </form>
            </div>
          </td>
        </tr>

        <!-- ROW 3 (AGOTADO + INACTIVO) -->
        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
              <div class="flex-shrink-0 h-12 w-12">
                <img
                  class="h-12 w-12 rounded-lg object-cover border border-gray-200 dark:border-gray-600"
                  src="https://placehold.co/100x100/f3f4f6/9ca3af?text=IMG"
                  alt="Producto"
                />
              </div>
              <div class="ml-4">
                <div class="text-sm font-medium text-gray-900 dark:text-white">Crema Facial</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Marca Z</div>
              </div>
            </div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200"
            >
              Skincare
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-semibold text-gray-900 dark:text-white">$ 320.00</div>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-400"
            >
              <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
              Agotado
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-400"
            >
              Inactivo
            </span>
          </td>

          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <div class="flex items-center justify-end gap-2">
              <a
                href="#"
                class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors"
                title="Ver detalles"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                  />
                </svg>
              </a>

              <a
                href="#"
                class="p-2 text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-colors"
                title="Editar"
              >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                  />
                </svg>
              </a>

              <form action="#" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
                <button
                  type="submit"
                  class="p-2 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                  title="Eliminar"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                    />
                  </svg>
                </button>
              </form>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- PAGINACIÓN (EJEMPLO) -->
  <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <p class="text-sm text-gray-500 dark:text-gray-400">Mostrando 1 a 10 de 128 resultados</p>

      <nav class="inline-flex rounded-lg shadow-sm overflow-hidden border border-gray-200 dark:border-gray-700">
        <a
          href="#"
          class="px-3 py-2 text-sm bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 border-r border-gray-200 dark:border-gray-700"
        >
          Anterior
        </a>
        <a
          href="#"
          class="px-3 py-2 text-sm bg-amber-600 text-white border-r border-gray-200 dark:border-gray-700"
        >
          1
        </a>
        <a
          href="#"
          class="px-3 py-2 text-sm bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 border-r border-gray-200 dark:border-gray-700"
        >
          2
        </a>
        <a
          href="#"
          class="px-3 py-2 text-sm bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 border-r border-gray-200 dark:border-gray-700"
        >
          3
        </a>
        <a
          href="#"
          class="px-3 py-2 text-sm bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700"
        >
          Siguiente
        </a>
      </nav>
    </div>
  </div>

  <!-- ====== ESTADO VACÍO (OPCIONAL) ======
  <div class="px-6 py-16 text-center">
    <svg class="mx-auto h-16 w-16 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
    </svg>
    <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">No hay productos</h3>
    <p class="mt-2 text-gray-500 dark:text-gray-400">
      No se encontraron productos con los filtros aplicados.
    </p>

    <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-3">
      <a href="#" class="inline-flex items-center px-4 py-2 text-amber-600 hover:text-amber-700 font-medium">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        Limpiar filtros
      </a>

      <a href="#" class="inline-flex items-center px-4 py-2 bg-amber-600 hover:bg-amber-700 text-white font-medium rounded-lg transition-colors">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
        </svg>
        Agregar producto
      </a>
    </div>
  </div>
  ====== /ESTADO VACÍO ====== -->
</div>

{{-- PLANTILLA --}}

</x-admin-layout>
