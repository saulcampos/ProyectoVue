<br>
<div class="container">
  <div class="row">
  
      <div v-for="galpon in galponesInactivos">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon">
                     <img v-on:click="showGalpon(galpon.idgalpon)" height="80" src="{{ asset('adminlte/img/gallinero.png') }}">

                </span>
                <div class="info-box-content">
                  <span class="info-box-text"> @{{galpon.gallinero.nombre}}</span>
                  <span class="info-box-number">pollitos: @{{galpon.meta.total}}</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                    100% finaly en 0 dias
                  </span>
                </div>
              </div>
            </div>



        </div>

  </div> 
</div>