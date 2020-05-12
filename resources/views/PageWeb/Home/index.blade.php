@extends('PageWeb.PageWeb')



@section('contenido')

<div id="apiEmpresa">

    <!--SOBRE NOSOTROS -->
    <section class="site-section">
      @include('PageWeb.Home.seccion1');
    </section>
    <!-- END section -->
    @{{sobre_nosotros}} 
    <section class="site-section bg-light">
      @include('PageWeb.Home.seccion2');
    </section>


   
    <!--Seccion video-->
    @include('PageWeb.Home.seccion3');
    <!--End Seccion-->
    
    <section class="site-section bg-light">
     @include('PageWeb.Home.seccion4');
    </section>

</div><!-- Fin del VUE -->

<script src="{{asset('js/Vue/adminitrador/empresa.js')}}"></script>
@endsection
<input type="hidden" name="route" value="{{url('/')}}">

