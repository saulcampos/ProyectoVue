<br>

<div class="row">
  <div class="col-md-4 col-xs-4">
        <i class="glyphicon glyphicon-pencil"></i>
        <label for="form24">escribe una observacion (opcional)</label>
      <div class="md-form amber-textarea active-amber-textarea-2">
         <textarea maxlength="50"  rows="5" id="form24" 
          v-model="descripcion" placeholder="hasta 50 caracteres// Sobre el Galpon" class="md-textarea form-control">
         
        </textarea>
      </div>
    </div>

    <div class="col-md4 col-xs-4">
      <label>Slecciona un gallinero</label>
         <select  class="form-control" v-model="idgallinero"
                   @change="ShowGallinero(idgallinero)" >
                   <option disabled selected>Selecciona uno</option>

                   <option v-for="gallinero in gallineros" 
                        v-bind:value="gallinero.idgallinero">@{{gallinero.nombre}}
                   </option>
        </select> 

<br>

 
    <table id="detalles" class="table table-responsive table-striped table-bordered table-condensed table-hover">
      <thead class="table">
        <tr class="Azulito">
            <th>Clave</th>
            <th>nombre</th>
            <th>capacidad</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active" >
                  <td>@{{idgallinero}}</td>
                  <td>@{{Mnombre}}</td>
                  <td>@{{Mcantidad}}</td>
            </tr>
      </tbody>
    </table>  
      
    </div>

    
</div>
<br>

<hr class="hrcolor">

