@extends('sitio.layout.principal')
@section('contenido')
    <!-- ═══════════════════════════════════════════════════════════════════════
         HERO SECTION
         ═══════════════════════════════════════════════════════════════════════ -->
    <section class="hero">
      <div class="container">
        <div class="hero__card">
          <span class="hero__eyebrow">Salón de belleza</span>
          <h1 class="hero__title">Agenda tu cita y compra productos<br>en un solo lugar.</h1>
          <p class="hero__lead">
            Una experiencia moderna: servicios, agendamiento y tienda. Accede a tu cuenta para
            administrar citas, historial y pedidos.
          </p>

          <div class="hero__pills" aria-label="Beneficios">
            <span class="pill"><span class="pill__dot" aria-hidden="true"></span> Reservas rápidas</span>
            <span class="pill"><span class="pill__dot" aria-hidden="true"></span> Compra en línea</span>
            <span class="pill"><span class="pill__dot" aria-hidden="true"></span> Estética premium</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════════════
         NOSOTROS SECTION
         ═══════════════════════════════════════════════════════════════════════ -->
    <section class="section" id="nosotros">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title">Nosotros</h2>
          <p class="section__subtitle">Un enfoque profesional: técnica, estética y cuidado. Ideal para una presencia premium sin exceso.</p>
        </header>

        <div class="grid grid--3">
          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Técnica primero</h3>
              <span class="tag">Calidad</span>
            </div>
            <p class="card__text">Procesos claros, ejecución precisa y resultados consistentes en color y acabado.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Estética elegante</h3>
              <span class="tag">Minimal</span>
            </div>
            <p class="card__text">Look limpio, moderno y sofisticado (que se nota, pero no se siente exagerado).</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Cuidado post-servicio</h3>
              <span class="tag">Duración</span>
            </div>
            <p class="card__text">Recomendaciones y mantenimiento para prolongar el resultado y la salud del cabello.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════════════
         PRODUCTOS SECTION
         ═══════════════════════════════════════════════════════════════════════ -->
    <section class="section" id="productos">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title">Productos</h2>
          <p class="section__subtitle">Aparta tus favoritos y recógelos en el salón.</p>
        </header>

        <div class="products__grid">
          <article class="product-card">
            <div class="product-card__media">
              <div class="product-card__placeholder">Imagen</div>
              <!-- <img class="product-card__img" src="ruta/imagen.jpg" alt="Shampoo profesional"> -->
            </div>
            <div class="product-card__body">
              <h3 class="product-card__name">Shampoo profesional</h3>
              <p class="product-card__desc">Placeholder (cargar desde backend)</p>
              <div class="product-card__footer">
                <span class="product-card__price">$0</span>
                <button type="button" class="product-card__btn">Agregar</button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card__media">
              <div class="product-card__placeholder">Imagen</div>
            </div>
            <div class="product-card__body">
              <h3 class="product-card__name">Mascarilla nutritiva</h3>
              <p class="product-card__desc">Placeholder</p>
              <div class="product-card__footer">
                <span class="product-card__price">$0</span>
                <button type="button" class="product-card__btn">Agregar</button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card__media">
              <div class="product-card__placeholder">Imagen</div>
            </div>
            <div class="product-card__body">
              <h3 class="product-card__name">Tratamiento capilar</h3>
              <p class="product-card__desc">Placeholder</p>
              <div class="product-card__footer">
                <span class="product-card__price">$0</span>
                <button type="button" class="product-card__btn">Agregar</button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card__media">
              <div class="product-card__placeholder">Imagen</div>
            </div>
            <div class="product-card__body">
              <h3 class="product-card__name">Protector térmico</h3>
              <p class="product-card__desc">Placeholder</p>
              <div class="product-card__footer">
                <span class="product-card__price">$0</span>
                <button type="button" class="product-card__btn">Agregar</button>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════════════
         SERVICIOS SECTION
         ═══════════════════════════════════════════════════════════════════════ -->
    <section class="services" id="servicios">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title">Servicios</h2>
          <p class="section__subtitle">Selección de servicios para una imagen pulida y sofisticada.</p>
        </header>

        <div class="services__grid" aria-label="Listado de servicios">
          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Colorimetría</h3>
              <span class="tag">Signature</span>
            </div>
            <p class="card__text">Diagnóstico y propuesta de tono pensada para tu piel, estilo y mantenimiento.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Cortes</h3>
              <span class="tag">Cabello</span>
            </div>
            <p class="card__text">Forma limpia, líneas modernas y acabado profesional.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Tinturas</h3>
              <span class="tag">Color</span>
            </div>
            <p class="card__text">Aplicación precisa, tonos elegantes y resultados consistentes.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Masajes capilares</h3>
              <span class="tag">Cuidado</span>
            </div>
            <p class="card__text">Bienestar y tratamiento: textura, brillo y sensación de renovación.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Alisados y queratina</h3>
              <span class="tag">Tratamiento</span>
            </div>
            <p class="card__text">Disciplina y suavidad con una apariencia natural y pulida.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Lifting de pestañas</h3>
              <span class="tag">Estética</span>
            </div>
            <p class="card__text">Mirada definida con un acabado sutil y elegante.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Manicure</h3>
              <span class="tag">Uñas</span>
            </div>
            <p class="card__text">Detalle limpio, estética minimal y acabado prolijo.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Pedicure</h3>
              <span class="tag">Uñas</span>
            </div>
            <p class="card__text">Servicio completo para una presentación impecable.</p>
          </article>

          <article class="card">
            <div class="card__top">
              <h3 class="card__title">Paquetes</h3>
              <span class="tag">Citas</span>
            </div>
            <p class="card__text">Combina servicios para optimizar tiempo y obtener un resultado integral.</p>
          </article>
        </div>

        <!-- ═══════════════════════════════════════════════════════════════════
             GALERÍA SECTION
             ═══════════════════════════════════════════════════════════════════ -->
        <header class="section__header gallery__header" id="galeria">
          <h2 class="section__title">Galería</h2>
          <p class="section__subtitle">Trabajos recientes: color, corte, styling y acabado final.</p>
        </header>

        <div class="gallery__grid" aria-label="Galería de trabajos">
          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de colorimetría"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Colorimetría</figcaption>
          </figure>

          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1526045478516-99145907023c?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de corte"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Corte</figcaption>
          </figure>

          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1520975958225-75c9f1a3f7a7?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de alisado"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Alisado</figcaption>
          </figure>

          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1527799820374-9f61f297199d?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de peinado"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Peinado</figcaption>
          </figure>

          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de manicure"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Manicure</figcaption>
          </figure>

          <figure class="gallery__item">
            <img
              src="https://images.unsplash.com/photo-1526040652367-ac003a0475fe?auto=format&fit=crop&w=1200&q=80"
              alt="Resultado de pestañas"
              loading="lazy"
              width="1200"
              height="900"
            >
            <figcaption class="gallery__caption">Pestañas</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════════════
         CONTACTO SECTION
         ═══════════════════════════════════════════════════════════════════════ -->
    <section class="contact" id="contacto">
      <div class="container">
        <header class="section__header">
          <h2 class="section__title">Contacto</h2>
          <p class="section__subtitle">Agenda por WhatsApp o llamada. También puedes ver la ubicación en el mapa.</p>
        </header>

        <div class="contact__grid">
          <!-- Info Panel -->
          <article class="panel">
            <div class="panel__accent" aria-hidden="true"></div>
            <div class="panel__inner">
              <h3 class="panel__title">Información</h3>

              <div class="info">
                <div class="info__row">
                  <div class="info__label">WhatsApp</div>
                  <div class="info__value">
                    <a href="https://wa.me/522712147539" target="_blank" rel="noopener">+52 271 214 7539</a>
                  </div>
                </div>

                <div class="info__row">
                  <div class="info__label">Teléfono</div>
                  <div class="info__value">
                    <a href="tel:+522712147539">+52 271 214 7539</a>
                  </div>
                </div>

                <div class="info__row">
                  <div class="info__label">Ubicación</div>
                  <div class="info__value">Córdoba, Veracruz</div>
                </div>

                <div class="info__row">
                  <div class="info__label">Dirección</div>
                  <div class="info__value">Calle 3 (Av. 3 y 5), #319 — Córdoba, Ver.</div>
                </div>

                <div class="info__row">
                  <div class="info__label">Horario</div>
                  <div class="info__value">Lun–Sáb: 10:00–19:00</div>
                </div>
              </div>

              <div class="panel__actions">
                <a href="https://wa.me/522712147539" target="_blank" rel="noopener" class="btn btn--accent">
                  Agendar por WhatsApp
                </a>
                <a href="https://instagram.com/" target="_blank" rel="noopener" class="btn btn--ghost">
                  Instagram
                </a>
              </div>
            </div>
          </article>

          <!-- Map Panel -->
          <article class="map-panel" aria-label="Mapa de ubicación">
            <div class="map-panel__header">
              <h3 class="map-panel__title">Ubicación</h3>
              <a href="https://maps.google.com" target="_blank" rel="noopener" class="map-panel__link">Abrir en Maps</a>
            </div>
            <div class="map-panel__frame">
              <iframe
                title="Ubicación en Google Maps"
                src="https://www.google.com/maps/embed?pb=!3m2!1ses-419!2smx!4v1769031322027!5m2!1ses-419!2smx!6m8!1m7!1szbP1h6T6SXDVjOtZINTQ7g!2m2!1d18.89555404713568!2d-96.93779430287314!3f125.43141493082365!4f-10.30767088843217!5f0.7820865974627469"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
              ></iframe>
            </div>
          </article>
        </div>
      </div>
    </section>
@endsection
