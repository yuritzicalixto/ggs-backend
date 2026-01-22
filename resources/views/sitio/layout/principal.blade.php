<!DOCTYPE html>
<html lang="es">
<head>
  @include('sitio.includes.head')
</head>
<body>

  <!-- ═══════════════════════════════════════════════════════════════════════
       HEADER
       ═══════════════════════════════════════════════════════════════════════ -->
  <header class="header glass">
    @include('sitio.includes.menu')
  </header>

  <main id="inicio">
    @yield('contenido')
  </main>

  <footer class="footer">
  @include('sitio.includes.footer')
  </footer>
  @include('sitio.includes.scripts')
</body>
</html>
