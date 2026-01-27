@extends('sitio.layout.principal')
@section('contenido')

    <!-- Page Header -->
    <section class="page-header">
      <div class="container">
        <div class="page-header__content">
          <span class="page-header__badge">Tienda</span>
          <h1 class="page-header__title">Nuestros <span>Productos</span></h1>
          <p class="page-header__text">Productos profesionales que usamos en el salón, ahora disponibles para ti.</p>
        </div>
      </div>
    </section>

    <!-- Productos -->
    <section class="section-padding" style="background: var(--bg-section);">
      <div class="container">
        <!-- Shampoos -->
        <div class="product-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v2"/><path d="M14 2v2"/><path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4.5 4.5 0 1 1 0 9H17"/><path d="M6 8V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg></span>
            Shampoos
          </h2>

          <div class="products__grid">
            <article class="product-card" data-id="1" data-name="Shampoo Profesional" data-price="350" data-image="https://images.unsplash.com/photo-1526947425960-945c6e72858f?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?auto=format&fit=crop&w=400&q=80" alt="Shampoo Profesional">
                <span class="product-card__badge">Nuevo</span>
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Shampoo Profesional</h3>
                <p class="product-card__desc">Limpieza profunda con ingredientes naturales. 500ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$350</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="5" data-name="Shampoo Anti-Caspa" data-price="380" data-image="https://images.unsplash.com/photo-1556227703-81a8fbfdd5a6?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1556227703-81a8fbfdd5a6?auto=format&fit=crop&w=400&q=80" alt="Shampoo Anti-Caspa">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Shampoo Anti-Caspa</h3>
                <p class="product-card__desc">Control efectivo de caspa y cuero cabelludo. 500ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$380</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="6" data-name="Shampoo Color Protect" data-price="420" data-image="https://images.unsplash.com/photo-1585232004423-244e0e6904e3?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1585232004423-244e0e6904e3?auto=format&fit=crop&w=400&q=80" alt="Shampoo Color Protect">
                <span class="product-card__badge">Popular</span>
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Shampoo Color Protect</h3>
                <p class="product-card__desc">Protege y prolonga el color de tu tinte. 500ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$420</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="7" data-name="Shampoo Volumen" data-price="360" data-image="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?auto=format&fit=crop&w=400&q=80" alt="Shampoo Volumen">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Shampoo Volumen</h3>
                <p class="product-card__desc">Aporta cuerpo y volumen al cabello fino. 500ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$360</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Tratamientos -->
        <div class="product-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/></svg></span>
            Tratamientos
          </h2>

          <div class="products__grid">
            <article class="product-card" data-id="2" data-name="Mascarilla Nutritiva" data-price="420" data-image="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?auto=format&fit=crop&w=400&q=80" alt="Mascarilla Nutritiva">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Mascarilla Nutritiva</h3>
                <p class="product-card__desc">Hidratación intensiva para cabello dañado. 250ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$420</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="3" data-name="Tratamiento Capilar" data-price="580" data-image="https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1599305090598-fe179d501227?auto=format&fit=crop&w=400&q=80" alt="Tratamiento Capilar">
                <span class="product-card__badge">Top</span>
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Tratamiento Capilar</h3>
                <p class="product-card__desc">Reparación profunda y brillo intenso. 200ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$580</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="8" data-name="Aceite de Argán" data-price="450" data-image="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=400&q=80" alt="Aceite de Argán">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Aceite de Argán</h3>
                <p class="product-card__desc">Nutrición y brillo sin residuos. 100ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$450</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="9" data-name="Sérum Reparador" data-price="520" data-image="https://images.unsplash.com/photo-1570194065650-d99fb4b38b15?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1570194065650-d99fb4b38b15?auto=format&fit=crop&w=400&q=80" alt="Sérum Reparador">
                <span class="product-card__badge">Premium</span>
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Sérum Reparador</h3>
                <p class="product-card__desc">Sella puntas abiertas y aporta brillo. 50ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$520</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Styling -->
        <div class="product-category">
          <h2 class="category-title">
            <span class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path d="m16 16-1.5-1.5"/></svg></span>
            Styling
          </h2>

          <div class="products__grid">
            <article class="product-card" data-id="4" data-name="Protector Térmico" data-price="290" data-image="https://images.unsplash.com/photo-1522338242042-2d1c917f7137?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1522338242042-2d1c917f7137?auto=format&fit=crop&w=400&q=80" alt="Protector Térmico">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Protector Térmico</h3>
                <p class="product-card__desc">Protege tu cabello del calor hasta 230°C. 200ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$290</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="10" data-name="Mousse Volumen" data-price="320" data-image="https://images.unsplash.com/photo-1597354984706-fac992d9306f?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1597354984706-fac992d9306f?auto=format&fit=crop&w=400&q=80" alt="Mousse Volumen">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Mousse Volumen</h3>
                <p class="product-card__desc">Crea volumen y textura sin rigidez. 300ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$320</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="11" data-name="Spray Fijador" data-price="280" data-image="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?auto=format&fit=crop&w=400&q=80" alt="Spray Fijador">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Spray Fijador</h3>
                <p class="product-card__desc">Fijación flexible de larga duración. 400ml</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$280</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>

            <article class="product-card" data-id="12" data-name="Cera Mate" data-price="260" data-image="https://images.unsplash.com/photo-1556760544-74068565f05c?auto=format&fit=crop&w=400&q=80">
              <div class="product-card__image">
                <img src="https://images.unsplash.com/photo-1556760544-74068565f05c?auto=format&fit=crop&w=400&q=80" alt="Cera Mate">
              </div>
              <div class="product-card__body">
                <h3 class="product-card__name">Cera Mate</h3>
                <p class="product-card__desc">Definición y textura con acabado mate. 75g</p>
                <div class="product-card__footer">
                  <span class="product-card__price">$260</span>
                  <button type="button" class="product-card__btn add-to-cart-btn" aria-label="Agregar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>
                  </button>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

@endsection
