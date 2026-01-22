<div class="container">
      <div class="header__inner">
        <!-- Brand -->
        <a href="{{ route('sitio.index')}}" class="header__brand">
          <svg class="header__logo" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#121212"/>
            <text x="50%" y="54%" dominant-baseline="middle" text-anchor="middle" fill="#b08d57" font-family="Playfair Display, serif" font-size="14" font-weight="600">GG</text>
            <path d="M8 28 C12 24, 24 24, 28 28" stroke="#b08d57" stroke-width="1.5" fill="none" stroke-linecap="round"/>
          </svg>
          <div>
            <div class="header__title">Guillermo Gutiérrez</div>
            <div class="header__subtitle">Salón</div>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="header__nav" aria-label="Navegación principal">
          <a href="#nosotros">Nosotros</a>
          <a href="#servicios">Servicios</a>
          <a href="#productos">Productos</a>
          <a href="#galeria">Galería</a>
          <a href="#contacto">Contacto</a>
        </nav>

        <!-- Actions -->
        <div class="header__actions">
          <button type="button" id="openCartBtn" class="btn">
            Carrito
            <span class="btn__badge" id="cartBadge">0</span>
          </button>

          <a href="{{ route('login') }}" class="btn is-hidden-mobile">Iniciar sesión</a>
          <button type="button" id="openRegisterBtn" class="btn btn--ghost is-hidden-mobile"><a href="{{ route('register') }}">Registrarse</a></button>

          <button type="button" id="openMobileMenu" class="btn header__menu-toggle" aria-expanded="false" aria-controls="mobileMenu">
            Menú
          </button>

          <button type="button" id="openBookingBtn" class="btn btn--primary is-hidden-mobile">
            Agendar cita
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <nav id="mobileMenu" class="mobile-menu" aria-label="Navegación móvil">
        <div class="mobile-menu__nav">
          <a href="#nosotros">Nosotros</a>
          <a href="#servicios">Servicios</a>
          <a href="#productos">Productos</a>
          <a href="#galeria">Galería</a>
          <a href="#contacto">Contacto</a>
          <a href="{{ route('login') }}">Iniciar sesión</a>
          <button type="button" id="openRegisterBtnMobile" class="btn--ghost"><a href="{{ route('register') }}">Registrarse</a></button>
          <button type="button" id="openBookingBtnMobile" class="btn--primary">Agendar cita</button>
        </div>
      </nav>
    </div>
