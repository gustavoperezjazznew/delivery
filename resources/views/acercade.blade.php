<!--about-->
 <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">{{ $plato->frase }}</h1>
          <p class="header-p">{{ $plato->descrip_corta }}<br>{{ $plato->frasef }}</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">{{ $plato->nombre_plato }}</h2> 
              <p>{{ $plato->descrip_histo }}</p>
              <div class="details-list">
                <ul>
                  @foreach ($plato->ingredientes as $ingre)
                    <li><i class="fa fa-check"></i>{{ $ingre->nombre }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-md-6 col-sm-6">
            <img src={{ $plato->rutaimag }} alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->