<br>
<div class="row">
    <div class="col-md-4 col-xs-10">
      <p>fecha de inicio</p>
      <input class="form-control" type="date"  v-model="fecha_inicio" >
    </div>

    <div class="col-md-4 col-xs-10">
      <p>fecha de fin</p>
      <input class="form-control" type="date"  v-model="fecha_fin" >
    </div>

 
  <div class="col-md-3 col-xs-10">
      <p>total de animales producir</p>
      <input class="form-control" type="number" min="0" v-on:keyup="Disponibilida()"  v-model.number="total">
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 col-xs-10">
        <i class="glyphicon glyphicon-pencil"></i>
        <label for="form24">escribe una observacion(opcional)</label>
      <div class="md-form amber-textarea active-amber-textarea-2">
         <textarea maxlength="50"  rows="5" id="form24" 
          v-model="observacion" placeholder="hasta 50 caracteres/ sobre la meta de  produccion" class="md-textarea form-control">
         
        </textarea>
      </div>
  </div>  
</div>
