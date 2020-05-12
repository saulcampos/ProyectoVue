@extends('layouts.adminlte')
@section('titulo','Produccion de galpones')

@section('head')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/vue/aplicaciones/aplicaciones.css')}}">


<meta name="token" id="token" value="{{ csrf_token() }}">

<script src="{{asset('js/vue.min.js')}}"></script>
<script src="{{asset('js/vue-resource.min.js')}}"></script>
@endsection



@include('empresa.usuario.menuLat')




@section('buscar')

@endsection


@section('contenido')
 

<div class="container">
  <div id="apiAplicasiones">

  
<br>

        <ul class="nav nav-tabs">
           <li class="active"><a data-toggle="tab" href="#home">Galpones en produccion</a></li>
           <li><a data-toggle="tab" href="#menuB">Finalizados</a></li>   
         </ul>

  <div class="tab-content">
    <template>
        <div id="home" class="tab-pane fade in active">
             <h3>Galpones en produccion</h3>
                <div class="form-row">
                @include('empresa.usuario.aplicaciones.tabs.tabA')
            </div>
        </div>
      </template>

      <template>
        <div id="menuB" class="tab-pane fade">
            <h3>Galpones listos para vender</h3>
                <div class="form-row">
                @include('empresa.usuario.aplicaciones.tabs.tabB')
                  
            </div>
        </div>
      </template>

  </div>






















<br>


  
@include('empresa.usuario.aplicaciones.modal')


     </div>
</div>  {{-- Fin del VUE --}}


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/Vue/moment-with-locales.min.js')}}"></script>
<script src="{{asset('js/Vue/usuario/aplicaciones.js')}}"></script>

@endsection
<input type="hidden" name="route" value="{{url('/')}}">

