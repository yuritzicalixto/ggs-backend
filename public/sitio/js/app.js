    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('openMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn?.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('is-open');
      mobileMenuBtn.setAttribute('aria-expanded', isOpen);
    });

    // Close mobile menu when clicking a link
    mobileMenu?.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('is-open');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
      });
    });

    // Cart Drawer
    const cartBtn = document.getElementById('openCartBtn');
    const cartDrawer = document.getElementById('cartDrawer');
    const cartOverlay = document.getElementById('cartOverlay');
    const closeCartBtn = document.getElementById('closeCartBtn');

    function openCart() {
      cartDrawer.classList.add('is-open');
      cartOverlay.classList.add('is-open');
      cartOverlay.setAttribute('aria-hidden', 'false');
    }

    function closeCart() {
      cartDrawer.classList.remove('is-open');
      cartOverlay.classList.remove('is-open');
      cartOverlay.setAttribute('aria-hidden', 'true');
    }

    cartBtn?.addEventListener('click', openCart);
    closeCartBtn?.addEventListener('click', closeCart);
    cartOverlay?.addEventListener('click', closeCart);

    // Booking Modal
    const bookingBtns = document.querySelectorAll('#openBookingBtn, #openBookingBtnMobile');
    const bookingOverlay = document.getElementById('bookingOverlay');
    const closeBookingBtn = document.getElementById('closeBookingBtn');
    const cancelBookingBtn = document.getElementById('cancelBookingBtn');

    function openBooking() {
      bookingOverlay.classList.add('is-open');
      bookingOverlay.setAttribute('aria-hidden', 'false');
      // Close mobile menu if open
      mobileMenu?.classList.remove('is-open');
      mobileMenuBtn?.setAttribute('aria-expanded', 'false');
    }

    function closeBooking() {
      bookingOverlay.classList.remove('is-open');
      bookingOverlay.setAttribute('aria-hidden', 'true');
    }

    bookingBtns.forEach(btn => btn?.addEventListener('click', openBooking));
    closeBookingBtn?.addEventListener('click', closeBooking);
    cancelBookingBtn?.addEventListener('click', closeBooking);
    bookingOverlay?.addEventListener('click', (e) => {
      if (e.target === bookingOverlay) closeBooking();
    });

    // Register Modal
    const registerBtns = document.querySelectorAll('#openRegisterBtn, #openRegisterBtnMobile');
    const registerOverlay = document.getElementById('registerOverlay');
    const closeRegisterBtn = document.getElementById('closeRegisterBtn');
    const cancelRegisterBtn = document.getElementById('cancelRegisterBtn');

    function openRegister() {
      registerOverlay.classList.add('is-open');
      registerOverlay.setAttribute('aria-hidden', 'false');
      mobileMenu?.classList.remove('is-open');
      mobileMenuBtn?.setAttribute('aria-expanded', 'false');
    }

    function closeRegister() {
      registerOverlay.classList.remove('is-open');
      registerOverlay.setAttribute('aria-hidden', 'true');
    }

    registerBtns.forEach(btn => btn?.addEventListener('click', openRegister));
    closeRegisterBtn?.addEventListener('click', closeRegister);
    cancelRegisterBtn?.addEventListener('click', closeRegister);
    registerOverlay?.addEventListener('click', (e) => {
      if (e.target === registerOverlay) closeRegister();
    });

    // Close modals with Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeCart();
        closeBooking();
        closeRegister();
      }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#' || targetId === '#auth') return;

        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          const headerOffset = 80;
          const elementPosition = target.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
