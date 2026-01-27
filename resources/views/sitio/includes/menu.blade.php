<div class="container">
      <div class="header__inner">
        <!-- Brand -->
        <a href="{{ route('sitio.index')}}" class="header__brand">
          <div class="header__logo">GG</div>
          <div class="header__brand-text">
            <div class="header__title">Guillermo Gutiérrez</div>
            <div class="header__subtitle">Salón</div>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="header__nav">
          <ul>
            <li><a href="{{ route('sitio.index')}}">Inicio</a></li>
            <li><a href="{{ route('sitio.nosotros')}}">Nosotros</a></li>
            <li><a href="{{ route('sitio.servicios')}}">Servicios</a></li>
            <li><a href="{{ route('sitio.productos')}}">Productos</a></li>
            <li><a href="{{ route('sitio.galeria')}}">Galería</a></li>
          </ul>
        </nav>

        <!-- Actions -->
        <div class="header__actions">
          <!-- Cart Button -->
          <button type="button" id="openCartBtn" class="header__cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            <span class="header__cart-badge" id="cartBadge">0</span>
          </button>

          <!-- User Button -->
          <button type="button" id="openUserBtn" class="header__user">
            <a href="{{ route('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            </a>
          </button>

          <!-- Mobile Toggle -->
          <button type="button" id="mobileToggle" class="header__toggle" aria-label="Menú">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobileMenu" class="mobile-menu">
      <div class="container">
        <div class="mobile-menu__nav">
          <a href="{{ route('sitio.index')}}">Inicio</a>
          <a href="{{ route('sitio.nosotros')}}">Nosotros</a>
          <a href="{{ route('sitio.servicios')}}">Servicios</a>
          <a href="{{ route('sitio.productos')}}">Productos</a>
          <a href="{{ route('sitio.galeria')}}">Galería</a>
        </div>
      </div>
    </nav>
