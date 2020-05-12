<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="buscar"> 

            <span v-on:click="getServicio(idservicio)" 
                  class="input-group-btn" >
                  <button class=" btn btn-primary active" v-on:click="showModal()">Agregar</button>
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
              				<th>Telefono</th>
              				<th>Dirección</th>
              				<th>Operaciones</th>
						</tr>
					</thead>

					<tbody>
						<tr v-for="cliente in filtroClientes">
		  		  			<td>@{{cliente.nombres}}</td>
              				<td>@{{cliente.telefono}}</td>
              				<td>@{{cliente.direccion}}</td>
              				       
						<td>
							<span class="btn btn-primary active glyphicon glyphicon-pencil" v-on:click="editCliente(cliente.idcliente)" ></span>

							<span class="btn btn-danger active glyphicon glyphicon-trash" v-on:click="BajaCliente(cliente.idcliente)" ></span>

							<!-- <span class="btn btn-warning active glyphicon glyphicon-trash" v-on:click="eliminarCliente(cliente.idcliente)" ></span>  -->
							
						</td>
						</tr>
					</tbody>
				</table>
			</div>
		 </div>


	

@include('empresa.administrador.clientes.modal')