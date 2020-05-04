<!-- menu -->
<section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu Listo</h1>
          <p class="header-p">Aprovecha nuestras promociones y vive una experiencia diferente </p>
        </div>
       
        <div class="col-md-12  text-center gallery-trigger">
          <ul>
            <li><a id="mix" class="filter" data-filter="">Todas</a></li>
            <li><a id="Promo" class="filter" data-filter="">Promos</a></li>
            <li><a id="Roll" class="filter" data-filter="">Roll</a></li>
            <li><a id="Yakisoba" class="filter" data-filter="">Yakisoba</a></li>
          </ul>
        </div>
        <div id="menuplatohtml">
        
          {!! csrf_field() !!}
          
          @foreach ($menus as $menu)
          <form method="POST" action="mi_ruta_post">
 
              <div class="mix {{ $menu->clasif }} menu-restaurant" data-myorder="2">
                <span class="clearfix">
                <!-- etiqueta de tipo boton-->  
                  <a type="submit" class="irapromo menu-title" href="#event" data-meal-img="assets/img/restaurant/rib.jpg">{{ $menu->nombre_plato }}</a>
                <!-- etiqueta de tipo boton-->
                  <span style="left: 166px; right: 44px;" class="menu-line"></span>
                  <input id="id" type="hidden" name="id" value={{ $menu->id }}>
                  <span class="menu-price">$. {{ $menu->precio }}</span>
                </span>
                <span class="menu-subtitle">{{ $menu->frasef }}</span>
              </div>
          </form>
          @endforeach

        </div>

      </div>
    </div>
  </section>
  <!-- menu -->