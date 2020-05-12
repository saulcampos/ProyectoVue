<!-- Alimentacion -->
<br>
	<div class="row">
			 <div class="col-xs-12 col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
			 				<th>fecha</th>
              				<th>costos</th>
              				<th>opción <p style="color:red">darle clic jorge</p></th>
              			
						</tr>
					</thead>

					<tbody>
						<tr v-for="ha in HistorialA">
		  		  			<td>@{{ha.fecha_logica}}</td>
              				<td>@{{ha.total_costos}}</td>
              				<td>
              				   <span class="btn btn-primary active glyphicon glyphicon-search" v-on:click="getDHA(ha.idalimentacion)" ></span>
              				</td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>


<br>
	<div class="row">
			 <div class="col-xs-12 col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
			 				<th>producto</th>
              				<th>cantidad <p>proporcionada</p></th>
              				<th>costo</th>
              			
						</tr>
					</thead>

					<tbody>
						<tr v-for="detalle in DHA">
		  		  			<td>@{{detalle.producto.nombre}}</td>
              				<td>@{{detalle.sub_total_unidad_peso}} <sup>@{{detalle.producto.tipo}}</sup></td>
              				<td>@{{detalle.sub_total_costos}}</td>       			
						</tr>
					</tbody>
				</table>
			</div>
		 </div>