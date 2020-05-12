<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="buscar">
            <div v-on:click="Pdf('Stocks')"  class="input-group-btn ">
              <img src="{{ asset('productos/pdf.png') }}" height="35"  >
            </div>
            <span  class="input-group-btn " >
                  <button class="btn btn-warning active glyphicon glyphicon-refresh" v-on:click="getRefresh()" ></button>
            </span>
    </div>
  </div>
</div> 

<br>

<div class="row">
    <div v-for="producto in filtroProductos">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="border:1px #000">
                <span class="info-box-icon ">
                          <img v-bind:src="`productos/${producto.foto}`" class="img-rounded img-thumbnail" >
                </span>
                <div class="info-box-content"><!-- Aqui es donde va todo el texto -->
                  <span class="info-box-text"><h6>@{{producto.nombre}}</h6></span>

                  <label>sockt actual: </label>
                  <div class="input-group">
                      <span class="info-box-number input-group-btn">@{{producto.stock}} 
                          <sup style="color:#0090ff;">@{{producto.tipo}}</sup>
                      </span>
                      <div class="input-group-btn">
                        <span class=" btn btn-primary active glyphicon glyphicon-ok"></span>  
                      </div>
                        
                  </div>
                </div>
          </div>
        </div>
    </div>
</div>







