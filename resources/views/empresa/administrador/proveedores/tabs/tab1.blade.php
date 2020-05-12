<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="buscar"> 

            <span v-on:click="getServicio(idservicio)" 
                  class="input-group-btn" >
                  <button class=" btn btn-primary active" v-on:click="showModal()">Agregar</button>
            </span>
            <span  class="input-group-btn " >
                  <button class="btn btn-danger active" v-on:click="Pdf('ProveedoresActivos')">pdf</button>
            </span>

    </div>
  </div>
</div> 

<br>



		<div class="row">
			 <div class="col-xs-12 col-md-10">
				<table id="tablita" class="table table-responsive table-striped table-bordered table-condensed table-hover">
					<thead class="table">
						<tr class="Azulito">
			 				<th>Nombres</th>
              				<th>direccion</th>
              				<th>tel.</th>
              				<th>email</th>
              				<th>Opciones</th>
						</tr>
					</thead>

					<tbody>
						<tr v-for="proveedor in filtroProveedores">
		  		  			<td>@{{proveedor.nombres}}</td>
              				<td>@{{proveedor.direccion}}</td>
              				<td>@{{proveedor.telefono}}</td>
              				<td>@{{proveedor.email}}</td>
              				
              				       
						<td>
							<span class="btn btn-primary active glyphicon glyphicon-pencil" v-on:click="editProveedor(proveedor.idproveedor)" ></span>
							<span class="btn btn-danger active glyphicon glyphicon-trash" v-on:click="BajaProveedor(proveedor.idproveedor)" ></span>
							<!-- <span class="btn btn-warning active glyphicon glyphicon-trash" v-on:click="eliminarProveedor(proveedor.idproveedor)" ></span> -->

							
						</td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>


	

@include('empresa.administrador.proveedores.modal')