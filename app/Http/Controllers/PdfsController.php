<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Empleado;
use App\Producto;
use Codedge\Fpdf\Fpdf\Fpdf;
use DB;

class PdfsController extends Controller
{
    


    public function PdfGeneral($Palabrita){

        $pdf=new Fpdf('P','mm','A4'); 
        $pdf->AddPage();

        $pdf->SetFont('Arial','B', 15);
        $pdf->SetTextColor(0,0,0);


//  Encabezado
        $pdf->Cell(190,10,'RANCHO GUADALUPE',0,0,'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B', 8);
        $pdf->Cell(190,8,utf8_decode('____________________________'),0,0,'C');
        $pdf->Ln(); 
        $pdf->Cell(190,8,utf8_decode('AVICULTURA'),0,0, 'C');
        $pdf->Ln(3);
        $pdf->Cell(190,8,'RFC: STM06915419',0,0,'C');
        
//                                                 x   y   w    h
            $pdf->Image('adminlte/img/Logo.png' , 15 ,5, 20 , 20,'PNG', ' ');
            /*$pdf->Image('adminlte/img/Logo.png' , 160 ,5, 20 , 20,'PNG', ' ');*/
           //Tabla de analisis 
         $pdf->Ln(6); 


	 
        
switch ($Palabrita) {

	case 'ProveedoresActivos':
		$Proveedores=DB::select("SELECT * FROM proveedores WHERE status=1");


		    $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(70,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(45,8,utf8_decode("Direccion"),1,"","L",true);
            $pdf->cell(50,8,utf8_decode("Email"),1,"","L",true);
            $pdf->cell(25,8,utf8_decode("Teléfono"),1,"","L",true);
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Proveedores as $prov)
                {
                    $pdf->cell(70,6,utf8_decode($prov->nombres),1,"","L",true);
                    $pdf->cell(45,6,utf8_decode($prov->direccion),1,"","L",true);
                    $pdf->cell(50,6,utf8_decode($prov->email),1,"","L",true);
                    $pdf->cell(25,6,utf8_decode($prov->telefono),1,"","L",true);
                    $pdf->Ln(); 
                }




		break;    


		case 'ProveedoresInactivos':
		$Proveedores=DB::select("SELECT * FROM proveedores WHERE status=0");


		    $pdf->SetTextColor(0,0,0);  // Establece el color del texto 
            $pdf->SetFillColor(206, 246, 245); // establece el color del fondo de la celda 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(70,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(45,8,utf8_decode("Direccion"),1,"","L",true);
            $pdf->cell(50,8,utf8_decode("Email"),1,"","L",true);
            $pdf->cell(25,8,utf8_decode("Teléfono"),1,"","L",true);
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0);  // Establece el color del texto 
            $pdf->SetFillColor(255, 255, 255); // establece el color del fondo de la celda
            $pdf->SetFont("Arial","",9);
         
            foreach ($Proveedores as $prov)
            {
                $pdf->cell(70,6,utf8_decode($prov->nombres),1,"","L",true);
                $pdf->cell(45,6,utf8_decode($prov->direccion),1,"","L",true);
                $pdf->cell(50,6,utf8_decode($prov->email),1,"","L",true);
                $pdf->cell(25,6,utf8_decode($prov->telefono),1,"","L",true);
                $pdf->Ln(); 
            }




		break;

        case 'UsuariosActivos':
         $Usuarios = Usuario::where('status','=',1) ->get();


            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(80,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(40,8,utf8_decode("Rol"),1,"","L",true);
            $pdf->cell(25,8,utf8_decode("Puesto"),1,"","L",true);
            $pdf->cell(45,8,utf8_decode("Foto"),1,"","L",true);

            
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Usuarios as $usua)
                {
                    $pdf->cell(80,15,utf8_decode($usua->empleado->nombres),1,"","L",true);
                    $pdf->cell(40,15,utf8_decode($usua->rol->rol),1,"","L",true);
                    $pdf->cell(25,15,utf8_decode($usua->empleado->puesto->nombre),1,"","L",true);
                    $pdf->cell(45,15,utf8_decode($usua->foto),1,"","L",true);
                    /*$pdf->Cell(20,15,$pdf->Image('user/'+$usua->foto, $pdf->GetX( )+40, $pdf->GetY( )+3,15),15);*/
                    $pdf->Ln(); 
                }




        break;

        case 'UsuariosInactivos':
         $Usuarios = Usuario::where('status','=',0) ->get();


            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(80,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(40,8,utf8_decode("Rol"),1,"","L",true);
            $pdf->cell(25,8,utf8_decode("Puesto"),1,"","L",true);
            $pdf->cell(45,8,utf8_decode("Foto"),1,"","L",true);
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Usuarios as $usua)
                {
                    $pdf->cell(80,15,utf8_decode($usua->empleado->nombres),1,"","L",true);
                    $pdf->cell(40,15,utf8_decode($usua->rol->rol),1,"","L",true);
                    $pdf->cell(25,15,utf8_decode($usua->empleado->puesto->nombre),1,"","L",true);
                    $pdf->cell(45,15,utf8_decode($usua->foto),1,"","L",true);
                    $pdf->Ln(); 
                }




        break; 

        case 'EmpleadosActivos':
         $Empleados = Empleado::where('status','=',1) ->get();


            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(100,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(90,8,utf8_decode("Puesto"),1,"","L",true);
           
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Empleados as $empleado)
                {
                    $pdf->cell(100,6,utf8_decode($empleado->nombres),1,"","L",true);
                    $pdf->cell(90,6,utf8_decode($empleado->puesto->nombre),1,"","L",true);
    
                    $pdf->Ln(); 
                }

        break;

        case 'EmpleadosInactivos':
         $Empleados = Empleado::where('status','=',0) ->get();


            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(100,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(90,8,utf8_decode("Puesto"),1,"","L",true);
           
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Empleados as $empleado)
                {
                    $pdf->cell(100,6,utf8_decode($empleado->nombres),1,"","L",true);
                    $pdf->cell(90,6,utf8_decode($empleado->puesto->nombre),1,"","L",true);
    
                    $pdf->Ln(); 
                }

        break;

        case 'Productos':
            $Productos = DB::select(" SELECT productos.nombre, 
                                            categorias.nombre as categoria 
                                    FROM 
                                    productos INNER JOIN categorias 
                                    ON productos.idcategoria =categorias.idcategoria
                                    ");

            $Cantidades = DB::select(" SELECT
                                        COUNT(productos.idproducto) as cantidad,
                                        categorias.nombre as nombre
                                        FROM 
                                        productos INNER JOIN categorias 
                                        on productos.idcategoria =categorias.idcategoria
                                        
                                        GROUP BY categorias.idcategoria");

            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(40,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(30,8,utf8_decode("Cantidades"),1,"","L",true);
           
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Cantidades as $cantidad)
                {
                    $pdf->cell(40,6,utf8_decode($cantidad->nombre),1,"","L",true);
                    $pdf->cell(30,6,utf8_decode($cantidad->cantidad),1,"","L",true);
    
                    $pdf->Ln(); 
                }

            $pdf->Ln(3);


            $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(206, 246, 245); 
            $pdf->SetFont('Arial','B',10); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(100,8,utf8_decode("Nombre"),1,"","L",true);
            $pdf->cell(90,8,utf8_decode("Categoria"),1,"","L",true);
           
            
            $pdf->Ln();
            $pdf->SetTextColor(0,0,0); 
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont("Arial","",9);
         
                foreach ($Productos as $producto)
                {
                    $pdf->cell(100,6,utf8_decode($producto->nombre),1,"","L",true);
                    $pdf->cell(90,6,utf8_decode($producto->categoria),1,"","L",true);
    
                    $pdf->Ln(); 
                }

        break;


	
	
	default:
            $pdf->Ln(5); 
		    $pdf->SetTextColor(0,0,0);  
            $pdf->SetFillColor(255, 255, 255); 
            $pdf->SetFont('Arial','B',15); 
            //El ancho de las columnas debe de sumar promedio 190        
            $pdf->cell(190,8,utf8_decode("  Lo sentimos, pero la accion que deseas hacer temporalmente"),0,0, 'C');
            $pdf->Ln();
            $pdf->cell(190,8,utf8_decode("  no esta disponible. "),0,0, 'C');
		break;
}








        

//Footer
        $pdf->SetFont('Arial','B', 6);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetY(260);
        $pdf->MultiCell(190,5,utf8_decode('Mérida, Yuc: Calle 8 No. 205 x 35 y 37 Col. Leandro valle C.P. 97143  Tel. 01 (999) 9869570/71; Cd. del Carmen, Camp: Av. Páez Urquidi No. 164 x 50 y 50-A Col. Tecolutla C.P. 24178 Tel.  01 (938) 3820567 / 3840025; Xochimilco, México DF: Calle Roselina No. 10 B Col. Potrero de San Bernardino C.P. 16030 Tel. (55) 41730732; Villahermosa, Tab: Calle Isla Sicilia No. 9 Fracc. Islas  del Mundo C.P. 86126 Tel. (993) 1410019 www.sistindacematmx.com, contacto@sistindacematmx.com'),0,'C', 0);



        

        
        
        
        

        //return Response::make($pdf->Output('I','filename.pdf'),200,$headers);
        $pdf->Output();
        exit;
    }




}
