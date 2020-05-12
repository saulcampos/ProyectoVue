<br>
<div class="row">
  <div class="col-md-4">
    <div class="input-group">
            <span class="input-group-btn ">
                  <input  disabled  class="form-control" type="text" placeholder="Total :$" >
            </span>
            <span class="input-group-btn ">
                <input  disabled  class="form-control" type="text"  v-model="total" >
            </span>

            <div v-on:click="Pdf('ComprasAlmacen')"  class="input-group-btn ">
              <img src="{{ asset('productos/pdf.png') }}" height="35"  >
            </div>
           
    </div>
  </div>
</div> 

<br>
		<div class="row">
			 <div class="col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
                      <th>nombre</th>
              				<th width="100">foto </th>
                      <th>Total</th>
                      <th>Minimo</th>
                      <th>maximo</th>	
                      <th>paquetes a <p>comprar</p></th>
                      <th>Precio</th>
                      <th>sub totales</th>
                  	
              				
						</tr>
					</thead>

					<tbody>
						<tr v-for="(producto,index) in filtroProductos">
                      <td width="100px"><h6>@{{producto.nombre}}</h6></td>
              				<td><img v-bind:src="`productos/${producto.foto}`" width="80" height="80" 
                          class="img-rounded img-thumbnail" class="img-circle" >
                      </td>
                      <td>@{{calcularPacks[index]}}
                          <h6><p style="color:blue;">paquetes</p></h6>
                      </td>
                      <td>@{{producto.stockmin}}
                          <h6><p style="color:blue;">paquetes</p></h6>
                      </td>      
                      <td>@{{producto.stockmax}}
                          <h6><p style="color:blue;">paquetes</p></h6>
                      </td>
                      <td>@{{faltantes[index]}}
                          <h6><p style="color:blue;">paquetes</p></h6>                        
                      </td>
                      <td><span class="glyphicon glyphicon-usd"></span>
                          @{{producto.precio_compra}} <b>c/u</b>
                      </td>
                      <td><span style="color:blue" class="glyphicon glyphicon-usd"></span>
                          @{{subTotales[index]}} <b>c/u</b>
                      </td>
                      
						</tr>
					</tbody>
				</table>
			</div>
		 </div>


	

