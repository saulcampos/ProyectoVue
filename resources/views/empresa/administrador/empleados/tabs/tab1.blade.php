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
                  <button class="btn btn-danger active" v-on:click="Pdf('EmpleadosActivos')">pdf</button>
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
              <th>Clave</th>
              <th>Nombre Completo</th>    
              <th>Puesto</th>
              <th>Operaciones</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="empleado in filtroEmpleados">
              <td>@{{empleado.idempleado}}</td>
              <td>@{{empleado.nombres}}</td>
              <td>@{{empleado.puesto.nombre}}</td>          

            <td>
              <span class="btn btn-primary active glyphicon glyphicon-pencil" v-on:click="editEmpleado(empleado.idempleado)" ></span>

              <span class="btn btn-danger active glyphicon glyphicon-trash" v-on:click="BajaEmpleado(empleado.idempleado)" ></span>

             <!-- <span class="btn btn-warning active glyphicon glyphicon-trash" v-on:click="eliminarEmpleado(empleado.idempleado)" ></span> -->
            </td>
            </tr>
          </tbody>
        </table>
      </div>
     </div>

@include('empresa.administrador.empleados.modal')