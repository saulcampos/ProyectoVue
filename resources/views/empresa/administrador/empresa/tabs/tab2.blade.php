<h2>Datos de la empresa</h2>
<br>

	<div class="row">
        <div  class="col-md-3 col-xs-10">
            <p>nombre </p>
            <input  class="form-control" type="text" 
            v-model="nombre" >
        </div>

		<div  class="col-md-3 col-xs-10">
            <p>telefono</p>
            <input  class="form-control" type="text" 
             v-model.number="telefono" >
        </div>
        <div  class="col-md-3 col-xs-10">
            <p>direccion</p>
            <input  class="form-control" type="text" 
             v-model="direccion" >
        </div>

    </div> 
    <br>
    <div class="row">
    	<div  class="col-md-3 col-xs-10">
            <p>instagram</p>
            <input  class="form-control" type="text" 
            v-model="instagram" >
        </div>
        <div  class="col-md-3 col-xs-10">
            <p>facebook</p>
            <input  class="form-control" type="text" 
            v-model="facebook" >
        </div>
        <div  class="col-md-3 col-xs-10">
            <p>e-mail</p>
            <input  class="form-control" type="text"
            v-model="email" >
        </div>
    </div>
    <br> 
    <div class="row">
    	<div class="col-md-3 col-xs-10">
    		<label>Misión</label>
    		<textarea maxlength="150"  rows="5" v-model="mision" 
    			placeholder="la misión de la empresa es:" class="md-textarea form-control">
        	</textarea>
    	</div>
    	<div class="col-md-3 col-xs-10">
    		<label>Visión</label>
    		<textarea maxlength="150"  rows="5" v-model="vision" 
    			placeholder="la visión de la empresa es:" class="md-textarea form-control">
        	</textarea>
    	</div>
    	<div class="col-md-3 col-xs-10">
    		<label>sobre nosotros</label>
    		<textarea maxlength="150"  rows="5" v-model="sobre_nosotros" 
    			placeholder="sobre nosotros :" class="md-textarea form-control">
        	</textarea>
    	</div>
    	
    </div>
    <br>
    <div class="row">
    	<div class="col-md-10">
    		<button class="btn btn-lg btn-primary active btn-block" 
              v-on:click="updateEmpresa(rfc)">actualizar</button>
    	</div>
    </div>              