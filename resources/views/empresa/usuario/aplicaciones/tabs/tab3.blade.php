<br>
<div class="row">
	
	<div class="col-md-3">
		<label>Escriba la cantidad total de bajas en el gallinero</label>
		<input  v-on:keyup="Validacion()" class="form-control" type="number" min="0" v-model.number="cantidad" >
	</div>
</div>
<br>
<div class="row">
	
	<button  type="button" class="btn btn-primary active" v-on:click="agregarMortalidad()">guardar</button>
</div>
