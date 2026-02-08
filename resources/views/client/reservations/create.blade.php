<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=> 'Apartados',
        'route' => route('client.reservations.index'),
    ],
    [
        'name'=> 'Productos Apartados',
    ],
]">

{{-- PLANTILLA --}}
<div class="max-w-3xl mx-auto py-8 px-4">

    <h1 class="text-2xl font-bold text-gray-800 mb-6">Confirmar Apartado</h1>

    {{-- Contenedor donde JS renderiza los productos del carrito --}}
    <div id="reservationItems" class="space-y-4 mb-6">
        {{-- JS insertará los productos aquí --}}
    </div>

    {{-- Mensaje si el carrito está vacío --}}
    <div id="emptyCartMessage" style="display: none;" class="text-center py-12 text-gray-400">
        <p class="text-lg">Tu carrito está vacío.</p>
        <a href="{{ route('sitio.productos') }}" class="text-indigo-600 underline mt-2 inline-block">
            Ir a productos
        </a>
    </div>

    {{-- Total --}}
    <div id="reservationTotal" class="bg-gray-50 rounded-lg p-4 mb-6 flex justify-between items-center" style="display: none;">
        <span class="text-lg font-medium text-gray-700">Total del apartado:</span>
        <span id="totalAmount" class="text-2xl font-bold text-gray-900">$0.00</span>
    </div>

    {{-- Información del apartado --}}
    <div id="reservationInfo" class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6" style="display: none;">
        <p class="text-sm text-blue-800">
            <strong>Importante:</strong> Al confirmar el apartado, los productos se reservarán por
            <strong>7 días</strong>. Deberás pasar al salón a recogerlos y pagarlos antes de la fecha de vencimiento.
        </p>
    </div>

    {{-- Formulario oculto que JS llena con los datos del carrito --}}
    <form id="reservationForm" action="{{ route('client.reservations.store') }}" method="POST">
        @csrf
        {{-- Los inputs hidden de los items se insertan por JS --}}
        <div id="formInputs"></div>

        <div id="confirmBtnContainer" class="flex gap-3 justify-end" style="display: none;">
            <a href="{{ route('sitio.productos') }}" class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition">
                Seguir comprando
            </a>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 transition">
                Confirmar Apartado
            </button>
        </div>
    </form>

    {{-- Errores de validación --}}
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

{{-- ============================================================ --}}
{{-- JavaScript: Lee localStorage y renderiza los productos       --}}
{{-- ============================================================ --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Leer el carrito de localStorage
    const savedCart = localStorage.getItem('salonCart');
    const cart = savedCart ? JSON.parse(savedCart) : [];

    const itemsContainer = document.getElementById('reservationItems');
    const emptyMessage = document.getElementById('emptyCartMessage');
    const totalContainer = document.getElementById('reservationTotal');
    const totalAmount = document.getElementById('totalAmount');
    const infoBox = document.getElementById('reservationInfo');
    const formInputs = document.getElementById('formInputs');
    const confirmBtn = document.getElementById('confirmBtnContainer');

    if (cart.length === 0) {
        // Carrito vacío
        emptyMessage.style.display = 'block';
        return;
    }

    // Mostrar elementos
    totalContainer.style.display = 'flex';
    infoBox.style.display = 'block';
    confirmBtn.style.display = 'flex';

    let total = 0;

    cart.forEach((item, index) => {
        // Calcular subtotal
        const subtotal = item.price * item.quantity;
        total += subtotal;

        // Renderizar tarjeta del producto
        const itemEl = document.createElement('div');
        itemEl.className = 'bg-white rounded-lg shadow p-4 flex items-center gap-4';
        itemEl.innerHTML = `
            <img src="${item.image}" alt="${item.name}"
                 class="w-16 h-16 object-cover rounded-lg"
                 onerror="this.src='/sitio/images/placeholder.png'">
            <div class="flex-1">
                <h3 class="font-semibold text-gray-800">${item.name}</h3>
                <p class="text-sm text-gray-500">Cantidad: ${item.quantity}</p>
                <p class="text-sm text-gray-500">Precio unitario: $${item.price.toLocaleString('es-MX', {minimumFractionDigits: 2})}</p>
            </div>
            <div class="text-right">
                <p class="font-bold text-gray-800">$${subtotal.toLocaleString('es-MX', {minimumFractionDigits: 2})}</p>
            </div>
        `;
        itemsContainer.appendChild(itemEl);

        // Crear inputs hidden para el formulario
        const inputProductId = document.createElement('input');
        inputProductId.type = 'hidden';
        inputProductId.name = `items[${index}][product_id]`;
        inputProductId.value = item.id;
        formInputs.appendChild(inputProductId);

        const inputQuantity = document.createElement('input');
        inputQuantity.type = 'hidden';
        inputQuantity.name = `items[${index}][quantity]`;
        inputQuantity.value = item.quantity;
        formInputs.appendChild(inputQuantity);
    });

    // Mostrar total
    totalAmount.textContent = `$${total.toLocaleString('es-MX', {minimumFractionDigits: 2})}`;

    // Al enviar el formulario, limpiar el carrito de localStorage
    document.getElementById('reservationForm').addEventListener('submit', function () {
        localStorage.removeItem('salonCart');
    });
});
</script>
{{-- PLANTILLA --}}

</x-admin-layout>
