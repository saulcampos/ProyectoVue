<br>
<div class="row">
  <div class="col-md-10">
    <div class="input-group">
           <input type="text" placeholder="Escriba nombre" class="form-control" v-model="search"> 
            <span  class="input-group-btn " >
                  <button class="btn btn-danger active" v-on:click="Pdf('UsuariosInactivos')">pdf</button>
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
              <th >Nick name</th>
              <th>Nombre</th>
      
             
              <th>Contraseña</th>
              <th>Rol</th> 
     
              <th>Foto</th>
             
              <th>Operaciones</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="usuario in filtroUsuarios2">
              <td>@{{usuario.nickname}}</td>
              <td>@{{usuario.empleado.nombres}}</td>
              <td>@{{usuario.password}}</td>
              <td>@{{usuario.rol.rol}}</td>
            

              <td><img v-bind:src="`user/${usuario.foto}`" class="img-rounded img-thumbnail" width="100" height="100"></td>
           

            <td>
              <span class="btn btn-warning active glyphicon glyphicon-heart-empty" v-on:click="BajaUsuario(usuario.nickname)" ></span>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
     </div>