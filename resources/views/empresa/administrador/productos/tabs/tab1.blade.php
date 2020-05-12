<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="buscar"> 

            <span class="input-group-btn" >
                  <button class=" btn btn-primary active" v-on:click="showModal()">Agregar</button>
            </span>
             <div v-on:click="Pdf('Productos')"  class="input-group-btn ">
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
			 <div class="col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
			 				        <th>Nombre</th>
              				<th>precio compra</th>
              				<th>Cantidad</th>
              				<th>imagen</th>
              				<th>categoria</th>
              				<th>operaciones</th>
						</tr>
					</thead>

					<tbody>
						<tr v-for="producto in filtroProductos">
		  		  			    <td width="150px"><h6>@{{producto.nombre}}</h6></td>
              				<td><span class="glyphicon glyphicon-usd">
                          @{{producto.precio_compra}}
                      </td>

              				<td>@{{producto.cantidad_unidad_peso}} 
              					  <sup style="color:blue;">@{{producto.tipo}}</sup>
                      </td> 

              				<td><img v-bind:src="`productos/${producto.foto}`" width="80" height="80" 
                          class="img-rounded img-thumbnail" class="img-circle" >
                      </td>

                      <td>@{{producto.categoria.nombre}}</td>
              				
              				
              				       
                      <td>
                          <span class="btn btn-primary active glyphicon glyphicon-pencil" 
                                v-on:click="editProducto(producto.idproducto)" >
                          </span>
                          <span class="btn btn-danger active glyphicon glyphicon-trash"
                                v-on:click="BajaProducto(producto.idproducto)" >
                          </span>
                          <!--<span class="btn btn-warning active glyphicon glyphicon-trash"
                                v-on:click="eliminarProducto(producto.idproducto)" >
                          </span> -->
                      </td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>


	

@include('empresa.administrador.productos.modal')