Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.



<template v-if="status == 0">

<br>
<div class="row">
  <div class="col-md-12">
    <label>Slecciona a un cliente</label>
             <select  class="form-control" v-model="idcliente">
                            <option v-for="cliente in clientes" 
                        v-bind:value="cliente.idcliente">@{{cliente.nombres}}
                        </option>
            </select>     
  </div>
</div>
  <br>


<div class="row">
  <div class="col-md-2">
    
            <label>cantidad</label>
		    <input v-on:keyup="granTotal()" 		
		    	   class="form-control btn-sm" type="number" min="0"
		    	    v-model.number="cantidadVenta" >    
  </div>
  <div class="col-md-2">
    
            <label>precio venta</label>
		    <span class="btn-sm form-control">@{{precio_venta}}</span>
  </div>

  <div class="col-md-2">
    
            <label>precio venta</label>
		    <span class="btn-sm form-control">@{{granTotal()}}</span>
  </div>
</div>

<br>

<div class="row">
	<button  type="button" class="btn btn-danger active" v-on:click="Canselar()">Salir</button>
	<button  type="button" class="btn btn-primary active" v-on:click="agregarVenta()">vender</button>
</div>


</template>