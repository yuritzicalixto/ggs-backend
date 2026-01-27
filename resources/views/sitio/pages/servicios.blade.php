@extends('sitio.layout.principal')
@section('contenido')

    <!-- Page Header -->
    <section class="page-header">
      <div class="container">
        <div class="page-header__content">
          <span class="page-header__badge">Catálogo Completo</span>
          <h1 class="page-header__title">Nuestros <span>Servicios</span></h1>
          <p class="page-header__text">Descubre todos los servicios profesionales que ofrecemos para realzar tu belleza.</p>
        </div>
      </div>
    </section>

    <!-- Categorías -->
    <section class="section-padding" style="background: var(--bg-section);">
      <div class="container">
        <!-- Cabello -->
        <div class="service-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg></span>
            Cabello
          </h2>

          <div class="services-full-grid">
            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80" alt="Colorimetría">
                <span class="service-full-card__tag">Signature</span>
              </div>
              <div class="service-full-card__content">
                <h3>Colorimetría</h3>
                <p>Diagnóstico completo de tu tono de piel para crear una propuesta de color personalizada. Incluye análisis de subtonos, recomendación de paleta y plan de mantenimiento.</p>
                <ul class="service-full-card__features">
                  <li>Análisis profesional de tono</li>
                  <li>Propuesta personalizada</li>
                  <li>Plan de mantenimiento</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$800</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=80" alt="Cortes">
              </div>
              <div class="service-full-card__content">
                <h3>Cortes</h3>
                <p>Líneas limpias y modernas adaptadas a tu estilo, tipo de rostro y textura de cabello. Incluye lavado, corte técnico y peinado final.</p>
                <ul class="service-full-card__features">
                  <li>Consulta de estilo</li>
                  <li>Corte técnico profesional</li>
                  <li>Peinado y acabado</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$350</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=800&q=80" alt="Tinturas">
              </div>
              <div class="service-full-card__content">
                <h3>Tinturas</h3>
                <p>Aplicación precisa con productos premium para tonos elegantes y duraderos. Desde cobertura de canas hasta transformaciones completas.</p>
                <ul class="service-full-card__features">
                  <li>Productos de alta calidad</li>
                  <li>Cobertura perfecta</li>
                  <li>Brillo y duración</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$650</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?auto=format&fit=crop&w=800&q=80" alt="Balayage">
                <span class="service-full-card__tag">Popular</span>
              </div>
              <div class="service-full-card__content">
                <h3>Balayage & Mechas</h3>
                <p>Técnicas de iluminación que aportan dimensión y movimiento natural. Efecto degradado suave que requiere poco mantenimiento.</p>
                <ul class="service-full-card__features">
                  <li>Efecto natural</li>
                  <li>Bajo mantenimiento</li>
                  <li>Personalizado</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$1,200</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Tratamientos -->
        <div class="service-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/></svg></span>
            Tratamientos
          </h2>

          <div class="services-full-grid">
            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?auto=format&fit=crop&w=800&q=80" alt="Masajes Capilares">
              </div>
              <div class="service-full-card__content">
                <h3>Masajes Capilares</h3>
                <p>Experiencia relajante que estimula la circulación sanguínea y promueve el crecimiento saludable. Incluye productos nutritivos.</p>
                <ul class="service-full-card__features">
                  <li>Relajación profunda</li>
                  <li>Estimula el crecimiento</li>
                  <li>Tratamiento nutritivo</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$400</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1520975958225-75c9f1a3f7a7?auto=format&fit=crop&w=800&q=80" alt="Alisados y Queratina">
                <span class="service-full-card__tag">Premium</span>
              </div>
              <div class="service-full-card__content">
                <h3>Alisados y Queratina</h3>
                <p>Tratamientos profesionales que eliminan el frizz y aportan suavidad extrema. Resultados que duran de 3 a 6 meses.</p>
                <ul class="service-full-card__features">
                  <li>Elimina frizz</li>
                  <li>Duración prolongada</li>
                  <li>Cabello manejable</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$1,500</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=800&q=80" alt="Hidratación Profunda">
              </div>
              <div class="service-full-card__content">
                <h3>Hidratación Profunda</h3>
                <p>Tratamiento intensivo para cabello seco o dañado. Restaura la hidratación, brillo y elasticidad natural del cabello.</p>
                <ul class="service-full-card__features">
                  <li>Restaura hidratación</li>
                  <li>Brillo intenso</li>
                  <li>Reparación profunda</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$500</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1527799820374-9f61f297199d?auto=format&fit=crop&w=800&q=80" alt="Botox Capilar">
              </div>
              <div class="service-full-card__content">
                <h3>Botox Capilar</h3>
                <p>Tratamiento rejuvenecedor que rellena la fibra capilar, aportando volumen, brillo y reduciendo puntas abiertas.</p>
                <ul class="service-full-card__features">
                  <li>Efecto rejuvenecedor</li>
                  <li>Rellena la fibra</li>
                  <li>Puntas selladas</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$800</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Estética -->
        <div class="service-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg></span>
            Estética & Uñas
          </h2>

          <div class="services-full-grid">
            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1526040652367-ac003a0475fe?auto=format&fit=crop&w=800&q=80" alt="Lifting de Pestañas">
              </div>
              <div class="service-full-card__content">
                <h3>Lifting de Pestañas</h3>
                <p>Realza tu mirada con una curvatura natural y duradera. Incluye tinte de pestañas para un efecto más dramático.</p>
                <ul class="service-full-card__features">
                  <li>Efecto natural</li>
                  <li>Dura 6-8 semanas</li>
                  <li>Incluye tinte</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$550</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=800&q=80" alt="Manicure">
              </div>
              <div class="service-full-card__content">
                <h3>Manicure</h3>
                <p>Cuidado completo de manos con atención al detalle. Disponible en tradicional, semipermanente, gel o acrílico.</p>
                <ul class="service-full-card__features">
                  <li>Varios tipos disponibles</li>
                  <li>Diseños personalizados</li>
                  <li>Productos premium</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$280</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1519014816548-bf5fe059798b?auto=format&fit=crop&w=800&q=80" alt="Pedicure">
              </div>
              <div class="service-full-card__content">
                <h3>Pedicure Spa</h3>
                <p>Servicio completo para pies con baño relajante, exfoliación, tratamiento de callosidades, masaje y esmaltado.</p>
                <ul class="service-full-card__features">
                  <li>Experiencia spa</li>
                  <li>Masaje incluido</li>
                  <li>Pies perfectos</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$350</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" alt="Diseño de Cejas">
              </div>
              <div class="service-full-card__content">
                <h3>Diseño de Cejas</h3>
                <p>Perfilado profesional que enmarca tu rostro. Incluye depilación con hilo o cera y tinte opcional.</p>
                <ul class="service-full-card__features">
                  <li>Diseño personalizado</li>
                  <li>Técnica depilación a elegir</li>
                  <li>Tinte opcional</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$180</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Paquetes -->
        <div class="service-category">
          <h2 class="category-title">
            Paquetes Especiales
          </h2>

          <div class="services-full-grid">
            <article class="service-full-card service-full-card--highlight">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=800&q=80" alt="Paquete Novia">
                <span class="service-full-card__tag">Especial</span>
              </div>
              <div class="service-full-card__content">
                <h3>Paquete Novia</h3>
                <p>El día más especial merece una preparación perfecta. Incluye prueba previa, tratamiento capilar, peinado, maquillaje y retoque.</p>
                <ul class="service-full-card__features">
                  <li>Prueba incluida</li>
                  <li>Tratamiento + Peinado</li>
                  <li>Maquillaje profesional</li>
                  <li>Retoque el día</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$3,500</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card service-full-card--highlight">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=800&q=80" alt="Paquete Quinceañera">
                <span class="service-full-card__tag">Especial</span>
              </div>
              <div class="service-full-card__content">
                <h3>Paquete Quinceañera</h3>
                <p>Celebra tu día como una princesa. Incluye tratamiento, peinado elaborado, maquillaje y sesión de manicure.</p>
                <ul class="service-full-card__features">
                  <li>Tratamiento capilar</li>
                  <li>Peinado de fiesta</li>
                  <li>Maquillaje</li>
                  <li>Manicure</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$2,500</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=800&q=80" alt="Día de Spa">
              </div>
              <div class="service-full-card__content">
                <h3>Día de Spa</h3>
                <p>Un día completo de relajación y belleza. Incluye tratamiento capilar, masaje, manicure, pedicure y refrigerio.</p>
                <ul class="service-full-card__features">
                  <li>4 servicios incluidos</li>
                  <li>Refrigerio incluido</li>
                  <li>Experiencia VIP</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$1,800</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>

            <article class="service-full-card">
              <div class="service-full-card__image">
                <img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=800&q=80" alt="Cambio de Look">
              </div>
              <div class="service-full-card__content">
                <h3>Cambio de Look</h3>
                <p>Transformación completa con asesoría personalizada. Incluye consulta, corte, color y tratamiento de acabado.</p>
                <ul class="service-full-card__features">
                  <li>Asesoría de imagen</li>
                  <li>Corte + Color</li>
                  <li>Tratamiento final</li>
                </ul>
                <div class="service-full-card__footer">
                  <span class="price">Desde <strong>$1,500</strong></span>
                  <button type="button" class="btn btn--primary btn--sm" onclick="openLogin()">Reservar</button>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
      <div class="container">
        <div class="cta-card">
          <h2>¿Necesitas asesoría personalizada?</h2>
          <p>Contáctanos y te ayudamos a elegir el servicio perfecto para ti.</p>
          <a href="https://wa.me/522712147539" target="_blank" class="btn btn--primary">WhatsApp</a>
        </div>
      </div>
    </section>

@endsection
