<br>
	<div class="row">
		<div class="col-md-10">
			<input type="text" placeholder="Escriba nombre" class="form-control" v-model="search">
		</div>
	</div>
<br>	


<div class="row">
			 <div class="col-xs-12 col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
			 				<th>Nombre</th>
              				<th>Cantidad</th>
              				<th>Operaciones</th>
						</tr>
					</thead>

					<tbody>
						<tr v-for="galline in filtroGallineros2">
		  		  			<td>@{{galline.nombre}}</td>
              				<td>@{{galline.cantidad}}</td>	       
						<td>
						<span disabled class="btn btn-danger active glyphicon glyphicon-heart-empty"></span>							
						</td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>

