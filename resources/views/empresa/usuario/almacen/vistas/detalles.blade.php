<div class="row">
      <div class="col-md-4">
        <label>fecha</label>
        <input disabled  class="form-control" type="text" v-model="fecha_logica" >
      </div>
      <div class="col-md-4">
       <label> total costos</label>
       <input disabled  class="form-control" type="text" v-model="total_costos" >
      </div> 
                 
</div>
                      

<br>

<div class="row">
  <div class="col-md-12">
    <table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
        <thead class="table">
          <tr class="azulito"> 
              <th width="220px">Producto</th>
              <th>precio</th>
              <th>peso</th>
              <th>cantidad</th>
              <th>costos</th>
              <th>cantidad</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="dalmacen in DAlmacen">
              <td><h5>@{{dalmacen.producto.nombre}}</h5></td>
              <td> <span class="glyphicon glyphicon-usd"></span>@{{dalmacen.producto.precio_compra}}</td>
              <td>@{{dalmacen.producto.cantidad_unidad_peso}} <sup style="color:blue"> @{{dalmacen.producto.tipo}}</sup></td>
              <td>@{{dalmacen.sub_total_unidades}}<sup style="color:blue">Piezas</sup></td>
              <td><span class="glyphicon glyphicon-usd">@{{dalmacen.sub_total_costos}}</td>
              <td>@{{dalmacen.sub_total_unidad_peso}} <sup style="color:blue"> @{{dalmacen.producto.tipo}}</sup>
              </td>
              
            </tr>
        </tbody>
    </table>
  </div>
</div> 

<br>

<div class="row">
     <div class="col-md-12">
      <div class="form-group">
        <label>descripcion</label>
        <textarea disabled placeholder="Escribe una descripcion (OPCIONAL)" class="form-control" v-model="descripcion"></textarea>
      </div>
    </div>
</div>