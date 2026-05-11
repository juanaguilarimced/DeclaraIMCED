<?php
/*
 * Archivo: declaraimcedResumen.php
 * Descripción: Genera un PDF con el resumen de ingresos, deducciones y bonos para el DeclaraIMCED.
 * Autor: Juan Manuel Aguilar Díaz
 * Fecha de creación: 11 de mayo de 2026
 * Última modificación: 11 de mayo de 2026
 * Licencia: MIT License
 * Notas:
 *  - Este archivo utiliza la biblioteca FPDF para generar el PDF. Asegúrate de tenerla instalada y configurada correctamente.
 * - Los valores de bonos y prestaciones se importan desde el archivo valores.php, que debe estar un directorio abajo que este archivo.
 * - El PDF generado incluye una tabla detallada de salarios, bonos, otros ingresos y deducciones, así como un resumen final de los ingresos netos y el total a declarar.
 * - Para personalizar los valores de bonos y prestaciones, edita el archivo valores.php y actualiza las variables $bonos y $prestaciones según sea necesario.
 * - Este archivo es parte de un sistema más amplio para la gestión de nóminas y declaraciones fiscales, y debe ser utilizado en conjunto con otros archivos del sistema para su correcto funcionamiento.
 * - Para cualquier duda o sugerencia, no dudes en contactar al autor a través de su correo electrónico: juan.aguilar@imced.edu.mx
 * 
 */



require('fpdf.php');
include "../valores.php";


$pdf = new FPDF('L','mm','Letter');
$pdf->AddPage();
$pdf->SetMargins(10,10,10);

//Encabezado
$pdf->SetFont('Arial','B',16);
$pdf->Cell(260,10,'DeclaraIMCED Resumen',0,1,'C');

//Contenido
$pdf->SetFont('Arial','',8);   

$pdf->SetFillColor(77,146,250);
$pdf->Cell(168,4,'Salarios',1,1,'C',true);

$pdf->SetFillColor(159,194,252);
$pdf->Cell(23,4,'Periodo',1,0,'C', true);
$pdf->Cell(25,4,'Salario',1,0,'C', true); 
$pdf->Cell(20,4,'Despensa',1,0,'C', true);
$pdf->Cell(20,4,'Fondo Soc.',1,0,'C', true);
$pdf->Cell(20,4,'Quinquenio',1,0,'C', true);
$pdf->Cell(20,4,'Bono Sindical',1,0,'C', true);
$pdf->Cell(20,4,'Compensacion',1,0,'C', true);
$pdf->Cell(20,4,'ISR',1,1,'C', true);

//Enero
$pdf->Cell(23,4,'Ene 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s1'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c1'],1,0,'C');
$pdf->Cell(20,4,$_POST['is1'],1,1,'C');

$pdf->Cell(23,4,'Ene 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s2'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q2'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c2'],1,0,'C');
$pdf->Cell(20,4,$_POST['is2'],1,1,'C');

//Febrero
$pdf->Cell(23,4,'Feb 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s3'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q3'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c3'],1,0,'C');
$pdf->Cell(20,4,$_POST['is3'],1,1,'C');

$pdf->Cell(23,4,'Feb 16-28',1,0,'C');
$pdf->Cell(25,4,$_POST['s4'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q4'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c4'],1,0,'C');
$pdf->Cell(20,4,$_POST['is4'],1,1,'C');


//Marzo
$pdf->Cell(23,4,'Mar 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s5'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q5'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c5'],1,0,'C');
$pdf->Cell(20,4,$_POST['is5'],1,1,'C');

$pdf->Cell(23,4,'Mar 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s6'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q6'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c6'],1,0,'C');
$pdf->Cell(20,4,$_POST['is6'],1,1,'C');


//Abril
$pdf->Cell(23,4,'Abr 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s7'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q7'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c7'],1,0,'C');
$pdf->Cell(20,4,$_POST['is7'],1,1,'C');

$pdf->Cell(23,4,'Abr 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s8'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q8'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c8'],1,0,'C');
$pdf->Cell(20,4,$_POST['is8'],1,1,'C');


//Mayo
$pdf->Cell(23,4,'May 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s9'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q9'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c9'],1,0,'C');
$pdf->Cell(20,4,$_POST['is9'],1,1,'C');

$pdf->Cell(23,4,'May 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s10'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q10'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c10'],1,0,'C');
$pdf->Cell(20,4,$_POST['is10'],1,1,'C');


//Junio
$pdf->Cell(23,4,'Jun 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s11'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q11'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c11'],1,0,'C');
$pdf->Cell(20,4,$_POST['is11'],1,1,'C');

$pdf->Cell(23,4,'Jun 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s12'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q12'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c12'],1,0,'C');
$pdf->Cell(20,4,$_POST['is12'],1,1,'C');


//Julio
$pdf->Cell(23,4,'Jul 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s13'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q13'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c13'],1,0,'C');
$pdf->Cell(20,4,$_POST['is13'],1,1,'C');

$pdf->Cell(23,4,'Jul 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s14'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q14'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c14'],1,0,'C');
$pdf->Cell(20,4,$_POST['is14'],1,1,'C');


//Agosto
$pdf->Cell(23,4,'Ago 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s15'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q15'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c15'],1,0,'C');
$pdf->Cell(20,4,$_POST['is15'],1,1,'C');

$pdf->Cell(23,4,'Ago 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s16'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q16'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c16'],1,0,'C');
$pdf->Cell(20,4,$_POST['is16'],1,1,'C');

//Septiembre
$pdf->Cell(23,4,'Sep 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s17'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q17'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c17'],1,0,'C');
$pdf->Cell(20,4,$_POST['is17'],1,1,'C');

$pdf->Cell(23,4,'Sep 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s18'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q18'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c18'],1,0,'C');
$pdf->Cell(20,4,$_POST['is18'],1,1,'C');

//Octubre
$pdf->Cell(23,4,'Oct 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s19'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q19'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c19'],1,0,'C');
$pdf->Cell(20,4,$_POST['is19'],1,1,'C');

$pdf->Cell(23,4,'Oct 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s20'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q20'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c20'],1,0,'C');
$pdf->Cell(20,4,$_POST['is20'],1,1,'C');

//Noviembre
$pdf->Cell(23,4,'Nov 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s21'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q21'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c21'],1,0,'C');
$pdf->Cell(20,4,$_POST['is21'],1,1,'C');

$pdf->Cell(23,4,'Nov 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s22'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q22'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c22'],1,0,'C');
$pdf->Cell(20,4,$_POST['is22'],1,1,'C');


//Diciembre
$pdf->Cell(23,4,'Dic 1-15',1,0,'C');
$pdf->Cell(25,4,$_POST['s23'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q23'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c23'],1,0,'C');
$pdf->Cell(20,4,$_POST['is23'],1,1,'C');

$pdf->Cell(23,4,'Dic 16-30',1,0,'C');
$pdf->Cell(25,4,$_POST['s24'],1,0,'C'); 
$pdf->Cell(20,4,$_POST['p1'],1,0,'C');
$pdf->Cell(20,4,$_POST['p2'],1,0,'C');
$pdf->Cell(20,4,$_POST['q24'],1,0,'C');
$pdf->Cell(20,4,$_POST['p3'],1,0,'C');
$pdf->Cell(20,4,$_POST['c24'],1,0,'C');
$pdf->Cell(20,4,$_POST['is24'],1,1,'C');

//Sumatoria campos
$preSalario = 0;
$PreDespensa = 0;
$preFondo = 0;
$preQuinquenio = 0;
$preBonoSindical = 0;
$preCompensacion = 0;
$preISR = 0;

for($i=1; $i<=24; $i++){
    $preSalario += $_POST['s'.$i];
    $PreDespensa += $_POST['p1'];
    $preFondo += $_POST['p2'];
    $preQuinquenio += $_POST['q'.$i];
    $preBonoSindical += $_POST['p3'];
    $preCompensacion += $_POST['c'.$i];
    $preISR += $_POST['is'.$i];
}

$pdf->SetFillColor(255,194,194);
$pdf->Cell(23,5,'TOTAL',1,0,'C', true);
$pdf->Cell(25,5,number_format($preSalario, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($PreDespensa, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($preFondo, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($preQuinquenio, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($preBonoSindical, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($preCompensacion, 2, '.', ','),1,0,'C', true);
$pdf->Cell(20,5,number_format($preISR, 2, '.', ','),1,1,'C', true);


//Mostrar bonos
$pdf->SetMargins(185,20,10);
$pdf->SetXY(185,20);

$pdf->SetFillColor(77,146,250);
$pdf->Cell(80,4,'Lista de bonos',1,1,'C',true);

$preBonos = 0;

for($i=1; $i<=13; $i++){
    if($_POST['q'.$i] > 0){
        $pdf->Cell(50,4,$nombreBonos[$i-1],1,0,'C');
        $pdf->Cell(30,4,number_format($_POST['b'.$i], 2, '.', ','),1,1,'C'); 
        $preBonos += $_POST['b'.$i];
    }
}

//Agregar bono de capacitación
$bonoCapacitacion = ($_POST['p4']*6);

$pdf->Cell(50,4,'Bono de Cap. o Bimestral',1,0,'C');
$pdf->Cell(30,4,number_format($bonoCapacitacion, 2, '.', ','),1,1,'C');

$preBonos += $bonoCapacitacion;
$pdf->SetFillColor(255,194,194);
//Suma de bonos
 $pdf->Cell(50,4,'Total BONOS',1,0,'C',true);
 $pdf->Cell(30,4,number_format($preBonos, 2, '.', ','),1,1,'C',true);

//espacio
  $pdf->Cell(80,7,'',0,1,'C');






$preOtrosIngresos = 0;

//Otros ingresos
  $pdf->SetFillColor(77,146,250);
$pdf->Cell(80,4,'Otros ingresos',1,1,'C',true);

 $pdf->Cell(50,4,'Quinquenio Especial',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['qb'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['qb'];

 $pdf->Cell(50,4,'Dias de ajuste fiscal',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['af'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['af'];

 $pdf->Cell(50,4,'Aguinaldo parte 1',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['ag'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['ag'];

  $pdf->Cell(50,4,'Aguinaldo parte 2',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['ag2'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['ag2'];

 $pdf->Cell(50,4,'Prima vacacional',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['pv'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['pv'];

  $pdf->Cell(50,4,'Prima vacacional 2',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['pv2'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['pv2'];

$pdf->Cell(50,4,'Empleado del mes',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['em'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['em'];

  $pdf->Cell(50,4,'Dias economicos no disfrutados',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['de'], 2, '.', ','),1,1,'C');
 $preOtrosIngresos += $_POST['de'];



$pdf->SetFillColor(255,194,194);

//Suma total de ingresos
 $pdf->Cell(50,4,'Total otros ing.',1,0,'C',true);
 $pdf->Cell(30,4,number_format($preOtrosIngresos, 2, '.', ','),1,1,'C',true);




//espacio
  $pdf->Cell(80,7,'',0,1,'C');






// Deducciones adicionales

$preDeduccionesExtras = 0;

  $pdf->SetFillColor(77,146,250);
$pdf->Cell(80,4,'Deducciones adicionales',1,1,'C',true);

 $pdf->Cell(50,4,'Prima vacional marzo',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['is25'], 2, '.', ','),1,1,'C');
 $preDeduccionesExtras += $_POST['is25'];

 $pdf->Cell(50,4,'Prima vacional diciembre',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['is26'], 2, '.', ','),1,1,'C');
 $preDeduccionesExtras += $_POST['is26'];


  $pdf->Cell(50,4,'ISR aguinaldo parte 1',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['is27'], 2, '.', ','),1,1,'C');
 $preDeduccionesExtras += $_POST['is27'];



  $pdf->Cell(50,4,'ISR aguinaldo parte 2',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['is28'], 2, '.', ','),1,1,'C');
 $preDeduccionesExtras += $_POST['is28'];


  $pdf->Cell(50,4,'Dias de ajuste fiscal',1,0,'C');
 $pdf->Cell(30,4,number_format($_POST['is29'], 2, '.', ','),1,1,'C');
 $preDeduccionesExtras += $_POST['is29'];

$pdf->SetFillColor(255,194,194);
  $pdf->Cell(50,4,'Deducciones totales',1,0,'C',true);
 $pdf->Cell(30,4,number_format($preDeduccionesExtras, 2, '.', ','),1,1,'C',true);



//Resumen final

$ingresosNetos = $preSalario + $PreDespensa + $preFondo + $preQuinquenio + $preBonoSindical + $preCompensacion + $preOtrosIngresos;

$deducciones = $preISR + $preDeduccionesExtras;

$preingresAnuales = $ingresosNetos - $deducciones;

$totalADeclarar = $preingresAnuales + $preBonos;


$pdf->SetMargins(10,140,10);
$pdf->SetXY(10,140);

$pdf->SetFont('Arial','',10);   

$pdf->SetFillColor(77,146,250);
$pdf->Cell(120,6,'Resumen final',1,1,'C',true);

  $pdf->Cell(70,6,'Ingresos Netos',1,0,'C');
 $pdf->Cell(50,6,number_format($ingresosNetos, 2, '.', ','),1,1,'C');

 $pdf->Cell(70,6,'Deducciones',1,0,'C');
 $pdf->Cell(50,6,number_format($deducciones, 2, '.', ','),1,1,'C');


  $pdf->Cell(70,6,'Ingresos Anuales',1,0,'C');
 $pdf->Cell(50,6,number_format($preingresAnuales, 2, '.', ','),1,1,'C');

  $pdf->Cell(70,6,'Bonos sindicales',1,0,'C');
 $pdf->Cell(50,6,number_format($preBonos, 2, '.', ','),1,1,'C');

 $pdf->SetFont('Arial','B',12); 

 $pdf->SetFillColor(171,245,184);
  $pdf->Cell(70,6,'Total a declarar',1,0,'C',true);
 $pdf->Cell(50,6,number_format($totalADeclarar, 2, '.', ','),1,1,'C',true);





$pdf->Output();
?>