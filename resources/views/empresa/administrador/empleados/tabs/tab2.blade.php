<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="search"> 
            <span  class="input-group-btn " >
                  <button class="btn btn-danger active" v-on:click="Pdf('EmpleadosInactivos')">pdf</button>
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
            <tr v-for="empleado in filtroEmpleados2">
              <td>@{{empleado.idempleado}}</td>
              <td>@{{empleado.nombres}}</td>
              <td>@{{empleado.puesto.nombre}}</td>          

            <td>
              <span class="btn btn-warning active glyphicon glyphicon-heart-empty" v-on:click="BajaEmpleado(empleado.idempleado)" ></span>

            </td>
            </tr>
          </tbody>
        </table>
      </div>
     </div>