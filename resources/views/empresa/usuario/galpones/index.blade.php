@extends('layouts.adminlte')


@section('head')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/vue/galpones/galpones.css')}}">

<meta name="token" id="token" value="{{ csrf_token() }}">

<script src="{{asset('js/vue.min.js')}}"></script>
<script src="{{asset('js/vue-resource.min.js')}}"></script>
@endsection


@include('empresa.usuario.menuLat')




@section('buscar')

@endsection


@section('contenido')

<div class="container">
	<div id="crearGalpones">



<div class="row">
  <div class="col-md-11 col-xs-12">
   
  
  <h3>Creacion del galpones</h3>
  <br>
         <ul class="nav nav-tabs">
           <li class="active"><a data-toggle="tab" href="#home">Meta de produccion</a></li>
           <li><a data-toggle="tab" href="#menu2">Selecion Gallinero</a></li>   
         </ul>

  <div class="tab-content">
    <template>
        <div id="home" class="tab-pane fade in active tabs">
          <!-- Meta de produccion -->
          
              <div class="form-row ">
                @include('empresa.usuario.galpones.tabs.tab1')
            </div>
            <br>
        </div>
      </template>


       <!-- Selccionar gallinero -->
      <template>
        <div id="menu2" class="tab-pane fade tabs">
         
            <div class="form-row ">
                @include('empresa.usuario.galpones.tabs.tab2')
                  
            </div>
        </div>
      </template> 
      <br>
      <div class="footer">
          <button type="button" class="btn btn-danger active" data-dismiss="modal" v-on:click="Vacio()">Canselar</button>

          <button  class="btn btn-primary active" v-on:click="AddGalponOk()" >Guardar</button>

          <button  class="btn btn-warning active glyphicon glyphicon-refresh" v-on:click="getRefresh()" ></button>

        </div>
      <br>

  </div>

 </div>
</div>


@include('empresa.usuario.galpones.modal')



     </div>
</div>  {{-- Fin del VUE --}}


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/Vue/moment-with-locales.min.js')}}"></script>

<script src="{{asset('js/Vue/usuario/Galpones.js')}}"></script> 





@endsection
<input type="hidden" name="route" value="{{url('/')}}">
