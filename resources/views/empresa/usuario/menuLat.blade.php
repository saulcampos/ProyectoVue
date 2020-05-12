<!--      Nadvar y Shideshow-->
@section('HEADER')
PANEL DE USUARIO
@endsection



<!-- Exiten 4-->
@section('LinkTom1')
<a href="{{url('HomeB')}}"><i ><span class="glyphicon glyphicon-home"> Home</span></i> </a>
@endsection
<!--Peoo no petenecen a minguna capa -->




<!----------------Primera capa-------------->
@section('Titulo1')Costos
@endsection

@section('Link1')
<a href="{{url('Costos')}}"><i><span class="glyphicon glyphicon-usd"> Costos</span></i></a>
@endsection





<!----------------Primera capa-------------->
<!-- ******* -->
<!-- ******* -->



<!----------------Segunda capa-------------->
@section('Titulo2')Gallineros
@endsection

@section('Tomyy1')
<a href="{{url('Galpones')}}"><i><span class="glyphicon glyphicon-th"> Crear Galpones</span></i></a>
@endsection





<!----------------Segunda capa-------------->
<!-- ******* -->
<!-- ******* -->





<!----------------Tercera capa-------------->
@section('Titulo3')Almacen
@endsection



@section('Sumer1')
<a href="{{url('Almacen')}}"><i><span class="glyphicon glyphicon-folder-open"> Almacen</span></i></a>
@endsection


@section('Sumer2')
<a href="{{url('Aplicaciones')}}"><i><span class="glyphicon glyphicon-wrench"> Aplicaciones</span></i></a>
@endsection
<!----------------Tercera capa-------------->
<!-- ******* -->
<!-- ******* -->







<!--route('son para utilizar el index') 
	"url('son para utilizar funciones del controlador')"
	{{url('Ingresos')}}
-->