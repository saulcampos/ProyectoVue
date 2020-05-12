@extends('layouts.adminlte')


@section('head')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


<meta name="token" id="token" value="{{ csrf_token() }}">

<script src="{{asset('js/vue.min.js')}}"></script>
<script src="{{asset('js/vue-resource.min.js')}}"></script>
@endsection


@include('empresa.administrador.menuLat')




@section('buscar')

@endsection


@section('contenido')

<div class="container">
	<div id="apiEmpleados">

<br>
         <ul class="nav nav-tabs">
           <li class="active"><a data-toggle="tab" href="#home">Activos</a></li>
           <li><a data-toggle="tab" href="#menu2">Desactivados</a></li>   
         </ul>

  <div class="tab-content">
    <template>
        <div id="home" class="tab-pane fade in active">
             <h3>empleados activos</h3>
                <div class="form-row">
                @include('empresa.administrador.empleados.tabs.tab1')
            </div>
        </div>
      </template>

      <template>
        <div id="menu2" class="tab-pane fade">
            <h3>empleados desactivados</h3>
                <div class="form-row">
                @include('empresa.administrador.empleados.tabs.tab2')
                  
            </div>
        </div>
      </template>

  </div>



     </div>
</div>{{-- Fin del VUE --}}


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/Vue/adminitrador/empleados.js')}}"></script>



@endsection
<input type="hidden" name="route" value="{{url('/')}}">
