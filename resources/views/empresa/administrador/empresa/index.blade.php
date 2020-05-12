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
	<div id="apiEmpresa">

		<div v-if="!editando">
			@include('empresa.administrador.empresa.tabs.tab1');
		</div>

		<div v-if="editando">
			@include('empresa.administrador.empresa.tabs.tab2');
		</div><br>

     </div>
     <br>
</div><!-- Fin del VUE -->

<script src="{{asset('js/Vue/adminitrador/empresa.js')}}"></script>
@endsection
<input type="hidden" name="route" value="{{url('/')}}">
