<!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">¡¡¡ Gran Promo !!!!</h1>
            <p class="header-p">*** Solo por hoy aprovecha esta oferta ***</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img id="imagenplato" src={{ $promo->rutaimag }} class="img-responsive">
              </div>

              <div class="col-md-6 col-sm-6 details-text">
                <div id="muestradelmenu" class="content-holder">
                  <h2 id="platover">{{ $promo->nombre_plato }}</h2>

                   @foreach ($promo->ingredientes as $ingre)
                    <p class="ingre">{{ $ingre->nombre }}</p>
                   @endforeach

                 
                </div>

                  <a class="btn btn-imfo btn-read-more" href="#menu-list">Ir Al Menú</a>
                 <address>
                              <strong>Precio: </strong>
                              {{ $promo->precio }}
                              <br>
                              <strong>Tiempo: </strong>
                              30min Aprox.
                            </address>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
