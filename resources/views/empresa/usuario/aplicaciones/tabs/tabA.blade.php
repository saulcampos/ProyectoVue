<br>
<div class="container">
  <div class="row">
  
      <div v-for="galpon in galpones">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-aqua">
                <span class="info-box-icon">
                     <img v-on:click="showGalpon(galpon.idgalpon)" height="80" src="{{ asset('adminlte/img/gallinero.png') }}">

                </span>
                <div class="info-box-content">
                  <span class="info-box-text"> @{{galpon.gallinero.nombre}}</span>
                  <span class="info-box-number">pollitos: @{{galpon.meta.total}}</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                    40% finaly en 30 dias
                  </span>
                </div>
              </div>
            </div>



        </div>

  </div> 
</div>