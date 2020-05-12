<div class="row">
  <div class="col-md-12">
    <select  class="form-control" v-model="idproveedor">
      <option disabled value="">Elige un proveedor</option>

      <option v-for="proveedor in proveedores" 
              v-bind:value="proveedor.idproveedor">@{{proveedor.nombres}}
      </option>
    </select>     
  </div>
</div> 
<br>

<div class="row">
  <div class="col-md-12">
    <label>Slecciona un producto</label>
             <select  class="form-control" v-model="idproducto"
                    @change="getProducto(idproducto)">
                        <option disabled selected>Elige un producto</option>

                        <option v-for="producto in productos" 
                        v-bind:value="producto.idproducto">@{{producto.nombre}}
                        </option>
            </select>     
  </div>
</div> 

<br>
   <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <textarea class="form-control" placeholder="Escribe una descripcion (OPCIONAL)"   v-model="descripcion" rows="2"></textarea>
          </div>
      </div>
   </div>
<br>


<div class="row">
  <div class="col-md-12">
    <table class="table table-responsive table-bordered table-hover">
      <thead class="table">
        <tr class="azulito"> 
          <th width="50px">Nombre</th>
          <th width="75px">Precio</th>
          <th width="40px">Peso</th>
         
          <th width="70px">Sub. t. cantidades</th>
          <th>Sub. t. Costos</th>
          <th>Sub. t. Peso</th>
          <th width="50px">Opciones</th>
        </tr>
      </thead>


      <tbody>
          <tr v-for="(producto,index) in matris">
            
              <td ><h5>@{{producto.nombre}}</h5></td>
              <td ><span class="glyphicon glyphicon-usd">@{{producto.precio_compra}} </td>
              
              <td>@{{producto.cantidad_unidad_peso}}<p ><h6 style="color:blue;"> @{{producto.tipo}} </h6></p></td>
              <td >
                <input class="form-control input-sm" type="number" min="1"  
                  v-model.number="sub_total_unidades[index]">
              </td>
              <td><span class="glyphicon glyphicon-usd">@{{SubTotalCostos(index)}}</td>
              <td>@{{SubTotalUnidadesPeso(index)}}<p ><h6 style="color:blue;"> @{{producto.tipo}} </h6></p></td>





              <td><span class="glyphicon glyphicon-remove btn btn-sm btn-danger" v-on:click="eliminarProducto(index)"></span></td>
          </tr>
      </tbody>
    </table>
  </div>
</div>





<div class="row">
  <div class="col-md-5">
    <table class="table table-responsive table-bordered table-hover">
      <tbody>
         
          <tr>
             <th width="148px" style="background: #6681cc"><h5>total de costos </h5></th>
             <td style="background: #d0d0d0">
                <span class="glyphicon glyphicon-usd">
                @{{granTotalCotos}}
             </td>
          </tr>
      </tbody>
    </table>
  </div>
</div>




