<br>

<div class="row">
  <div class="col-md-12">
    <label>Slecciona un producto</label>
             <select  class="form-control" v-model="idproducto"
                    @change="getProducto2(idproducto)">
                        <option disabled selected>Elige un producto</option>

                        <option v-for="vacuna in vacunas" 
                        v-bind:value="vacuna.idproducto">@{{vacuna.nombre}}
                        </option>
            </select>     
  </div>
</div> 

<br>
   <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <textarea class="form-control" placeholder="Escribe una descripcion (OPCIONAL)"   v-model="observacion2" rows="2"></textarea>
          </div>
      </div>
   </div>
<br>


<div class="row">
  <div class="col-md-12">
    <table class="table table-responsive table-bordered table-hover">
      <thead class="table">
          <tr class="azulito"> 
              <th width="100px">Nombre</th>
              <th>Precio</th>
              <th>Cantidad <p><h5 style="color:blue;">(por saco)</h5></p></th>
              <th>stock</th>
              <th width="150px"><p align="center">cuanto quieres</p ><p align="center">utilizar</p></th>
              <th>Sub. t. Costos</th>
              <th width="50px">Opciones</th> 
          </tr>
      </thead>


      <tbody>
          <tr v-for="(producto,index) in matris2">
              <td ><h6>@{{producto.nombre}}</h6></td>

              <td >
                <span class="glyphicon glyphicon-usd">@{{producto.precio_compra}} 
              </td>
              
              <td>@{{producto.cantidad}}<p ><h6 style="color:blue;"> @{{producto.tipo}} </h6></p></td>

              <td>@{{producto.stock}}<p ><h6 style="color:blue;"> @{{producto.tipo}} </h6></p></td>

              <td >
                <input class="form-control input-sm" type="number" min="1"  
                  v-model.number="sub_total_unidad_peso2[index]">
              </td>
              
              <td><span class="glyphicon glyphicon-usd">@{{SubTotalCostos2(index)}}</td>

              <td><span class="glyphicon glyphicon-remove btn btn-sm btn-danger" v-on:click="eliminarProducto2(index)"></span></td>
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
               @{{granTotalCotos2}}
             </td>
          </tr>
      </tbody>
    </table>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
     <button  class="btn btn-warning active glyphicon glyphicon-refresh" v-on:click="getRefresh()" ></button>

     <button class="btn btn-primary active" v-on:click="AddVacunacion()" >Agregar vacunacion</button>

      <button  type="button" class="btn btn-danger active" v-on:click="Canselar()">Salir</button>
  </div>
</div>
