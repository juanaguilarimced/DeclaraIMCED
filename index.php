<?php
/*
  * Sistema de declaración de impuestos del IMCED
  * Desarrollado por el SUTAIMCED
  * Versión 1.0 - mayo 2026
  * 
  * Este sistema permite a los empleados del IMCED ingresar sus ingresos, bonos, prestaciones y retenciones para generar un resumen de su declaración de impuestos.
  * 
  * Características principales:
  * - Interfaz amigable y fácil de usar.
  * - Carga automática de salarios, quinquenios, ISR y compensaciones.
  * - Generación de un resumen detallado de ingresos y retenciones.
  * - Exportación a PDF para facilitar la impresión y presentación de la declaración.
  * 
  * Instrucciones de uso:
  * 1. Completa los campos correspondientes a tus ingresos, bonos, prestaciones y retenciones.
  * 2. Utiliza los botones para cargar información adicional como salarios, quinquenios e ISR.
  * 3. Revisa el resumen generado en la sección "Resumen".
  * 4. Haz clic en "Imprimir" para generar un PDF con tu declaración de impuestos.
  * 
  * Nota: Asegúrate de ingresar información precisa y completa para evitar errores en tu declaración.
  */


include "valores.php";

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DeclaraIMCED 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
  <style>
.custom-popover {
  --bs-popover-max-width: 200px;
  --bs-popover-border-color: var(--bs-info);
  --bs-popover-header-bg: var(--bs-info);
  --bs-popover-header-color: var(--bs-white);
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: .5rem;
}
</style>
  </head>
  <body>


<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="declaraIMCEDLOGO.png" width="40" height="40" class="d-inline-block align-text-top" alt="Logo declaraimced"> DeclaraIMCED 2026</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modalAcercaDe">Acerca de</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://sutaimced.org/">Regresar al portal</a>
        </li>
      </ul>
	  <form class="d-flex" role="search">
        <a href="https://sutaimced.org"><button class="btn btn-success" type="submit">Salir</button></a>
      </form>
    </div>
  </div>
</nav>

<h4 class="text-center mt-2">Bienvenido al sistema de declaración de impuestos del IMCED</h4>

<form id="formularioFull" method="POST" target="_blank" action="pdf/declaraimcedResumen.php" class="row">
  <div class="col-lg-4 px-2 border border-3 border-primary">
	<div class="alert alert-primary text-center mt-2" role="alert">
  Bonos y prestaciones fijas 
</div>




<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Despensa</span>
  <input type="number" id="p1" name="p1" class="form-control" value="0.00">
  <input type="text" class="form-control" value="x 24 Quincenas" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga cada Quincena.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
		<span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="p1.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Fondo Social</span>
  <input type="number" id="p2" name="p2" class="form-control" value="0.00">
  <input type="text" class="form-control" value="x 24 Quincenas" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga cada Quincena.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
		<span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="p2.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Bono Sindical</span>
  <input type="number" id="p3" name="p3" class="form-control" value="0.00">
  <input type="text" class="form-control" value="x 24 Quincenas" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga cada Quincena y aparece como ayuda sindical.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
		<span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="p3.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Bono Capacitación</span>
  <input type="number" id="p4" name="p4" class="form-control" value="0.00">
  <input type="text" class="form-control" value="x 6 meses" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga de manera bimestral, los meses Febrero, Abril, Junio, Agosto, Octubre y Diciembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
		<!--span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="p4.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span-->
</div>






<div class="input-group input-group-sm mb-2 has-validation">
  <span class="input-group-text">Apoyo por eventos</span>
  <input type="number" id="b1" name="b1" class="form-control is-invalid" value="0.00" onChange="revisarEventosBonos();">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Corresponde a el ISR de las dos partes del aguinaldo.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Ayuda reyes</span>
  <input type="number" id="b2" name="b2" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado antes del día 5 de enero.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Bono cuesta</span>
  <input type="number" id="b3" name="b3" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga antes de la primer quincena de enero.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Ayuda transporte</span>
  <input type="number" id="b4" name="b4" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagada en la primer quincena de febrero.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Apoyo familiar</span>
  <input type="number" id="b5" name="b5" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Bono pagado en marzo'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Dia madre/padre</span>
  <input type="number" id="b6" name="b6" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se recibe en mayo y/o junio.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Bono sindical</span>
  <input type="number" id="b7" name="b7" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en la primer quincena de mayo.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Ayuda utiles</span>
  <input type="number" id="b8" name="b8" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga en la primer quincena de julio.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Apoyo familiar</span>
  <input type="number" id="b9" name="b9" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Se paga en Septiembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Complemento utiles</span>
  <input type="number" id="b10" name="b10" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en la segunda quincena de agosto.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Plan prev. soc.</span>
  <input type="number" id="b11" name="b11" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en el mes de noviembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>

<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Bono productividad</span>
  <input type="number" id="b12" name="b12" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en diciembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>


<div class="input-group input-group-sm mb-2">
  <span class="input-group-text">Vales despensa</span>
  <input type="number" id="b13" name="b13" class="form-control" value="0.00">
  <input type="text" class="form-control" value="único" disabled>
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en diciembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>






  </div>



















  <div class="col-lg-4 px-2 border border-3 border-danger">
	<div class="alert alert-danger text-center mt-2" role="alert">
  Salarios y varios 
</div>



<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Sueldo Quincenal</span>
  <input type="number" id="ss" name="ss" class="form-control" value="0.00" readonly>
<button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#modalSalarios">Cargar salarios</button>
<span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Ingresa el valor del primer concepto y duplica el resto, ya que el sistema calculará el total anual automáticamente.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>
<small class="form-text">Carga los campos señalados para completar este campo</small>
</div>

<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Quinquenio</span>
  <input type="number" id="qq" name="qq" class="form-control" value="0.00" readonly>
<button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#modalQuinquenios">Cargar quinquenios</button>
<span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Ingresa el valor del primer concepto y duplica el resto, ya que el sistema calculará el total anual automáticamente.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>
<small class="form-text">Recuerda que si cumpliste más de 5 años de servicio, ya debes cargar tu quinquenio.</small>
</div>


<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Días de ajuste fiscal</span>
  <input type="number" class="form-control" id="af" name="af" value="0.00">
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en el mes de febrero, corresponde a los meses con 31 dias, así como el ajuste por año bisiesto.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
    <!--span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="af.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span-->
</div>
<small class="form-text">Consulta tu recibo de nómina, lo recibiste en Febrero.</small>
</div>


<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Compensación</span>
  <input type="number" id="co" name="co" class="form-control" value="0.00" readonly>
<button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#modalCompensacion">Agregar compensacion</button>
<span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Ingresa el valor del primer concepto y duplica el resto, ya que el sistema calculará el total anual automáticamente.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>
<small class="form-text">En esta sección agregaras el "Medio Tiempo" y cualquier compensación adicional.</small>
</div>


<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Aguinaldo</span>
  <input type="number" class="form-control" id="ag" name="ag" value="0.00">
  <span class="input-group-text">Parte 2:</span>
  <input type="number" class="form-control" id="ag2" name="ag2" value="0.00">
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Pagado en 2 partes durante el mes de noviembre y diciembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
    <span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="ag.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>
<small class="form-text">Los recibos son del 19 de diciembre y 25 de noviembre.</small>
</div>

<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Prima Vac.(Marzo:)</span>
  <input type="number" class="form-control" id="pv" name="pv" value="0.00">
  <span class="input-group-text">Diciembre:</span>
  <input type="number" class="form-control" id="pv2" name="pv2" value="0.00">
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Corresponde a la prima vacacional que se paga en marzo (Semana santa) y diciembre.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
    <span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="pv.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>
<small class="form-text">Consulta tu recibo de nómina.</small>
</div>

<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Emp. del mes</span>
  <input type="number" class="form-control" id="p5" name="p5" value="0.00" readonly>
  <span class="input-group-text">Veces recibido:</span>
  <input type="number" class="form-control" id="em" name="em" value="0">
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Número de veces que has recibido el reconocimiento de empleado del mes, el sistema calculará el total anual automáticamente.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
    <span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="em.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span>
</div>
<small class="form-text">Ingresa el número de veces que has recibido el reconocimiento de empleado del mes.</small>
</div>

<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Días económicos</span>
  <input type="number" class="form-control" id="de" name="de" value="0.00">
  <span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Ingresa el total recibido de los dias economicos que no utilizaste.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
    <!--span class="input-group-text text-dark"
		data-bs-toggle="modal" data-bs-target="#modalImagenes" data-bs-detalle="de.jpg" 
		 title="Mostrar ubicación en el recibo de nómina"><i class="bi bi-eye-fill"></i></span-->
</div>
<small class="form-text">Ingresa la cantidad recibida por los días económicos que no utilizaste.</small>
</div>



<div class="alert alert-warning text-center mt-2" role="alert">
  Retenciones 
</div>




<div class="mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">ISR</span>
  <input type="number" id="isr" name="isr" class="form-control" value="0.00" readonly>
<button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#modalISR">Cargar ISR</button>
<span class="input-group-text text-danger" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover" data-bs-title="Nota importante"
        data-bs-content='Es el impuesto que te se te ha retenido durante el año, es importante que ingreses el monto de cada quincena, así como el monto retenido en aguinaldo, prima vacacional y otros pagos adicionales.'
		data-bs-html="true" title="Mostrar información detallada"><i class="bi bi-question-octagon-fill"></i></span>
</div>
<small class="form-text">Carga los campos señalados para completar este campo</small>
</div>






  </div>




    <div class="col-lg-4 px-2 border border-3 border-success">
	<div class="alert alert-success text-center mt-2" role="alert">
  Resumen
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Sueldo</span>
  <input type="number" name="sueldo" id="sueldo" class="form-control" value="0.00">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Bonos</span>
  <input type="number" name="bonos" id="bonos" class="form-control" value="0.00">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Total Ingresos</span>
  <input type="number" name="totalIngresos" id="totalIngresos" class="form-control" value="0.00">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Descuentos</span>
  <input type="number" name="descuentos" id="descuentos" class="form-control" value="0.00">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Total a declarar</span>
  <input type="number" name="totalADeclarar" id="totalADeclarar" class="form-control" value="0.00">
</div>


<div class="d-grid gap-2">
  <button class="btn btn-success" type="button" onclick="calcular()">Calcular</button>
  <button class="btn btn-primary" type="button" onclick="imprimir()">Imprimir</button>
  <button class="btn btn-danger mt-5" type="button" onclick="cancelar()">Cancelar</button>
</div>



  </div>






<!-- Modal ISR -->
<div class="modal fade" id="modalISR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Carga el ISR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">

	  <div class="alert alert-info" role="alert">
  El ISR son retenciones que se realizan cada quincena, así como en el aguinaldo, prima vacacional y cualquier otro pago adicional. Para cargar el ISR, es necesario que ingreses el monto de cada quincena, así como el monto retenido en aguinaldo, prima vacacional y otros pagos adicionales.
  </div>

        <div class="col-lg-6">
			
		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Enero 1-15</span>
  <input type="number" id="is1" name="is1" class="form-control" value="0.00">
    <span class="input-group-text">Enero 16-30</span>
  <input type="number" id="is2" name="is2" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Febrero 1-15</span>
  <input type="number" id="is3" name="is3" class="form-control" value="0.00">
    <span class="input-group-text">Febrero 16-28</span>
  <input type="number" id="is4" name="is4" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Marzo 1-15</span>
  <input type="number" id="is5" name="is5" class="form-control" value="0.00">
    <span class="input-group-text">Marzo 16-30</span>
  <input type="number" id="is6" name="is6" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Abril 1-15</span>
  <input type="number" id="is7" name="is7" class="form-control" value="0.00">
    <span class="input-group-text">Abril 16-30</span>
  <input type="number" id="is8" name="is8" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Mayo 1-15</span>
  <input type="number" id="is9" name="is9" class="form-control" value="0.00">
    <span class="input-group-text">Mayo 16-30</span>
  <input type="number" id="is10" name="is10" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Junio 1-15</span>
  <input type="number" id="is11" name="is11" class="form-control" value="0.00">
    <span class="input-group-text">Junio 16-30</span>
  <input type="number" id="is12" name="is12" class="form-control" value="0.00">
</div>

</div>
		<div class="col-lg-6">	

		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Julio 1-15</span>
  <input type="number" id="is13" name="is13" class="form-control" value="0.00">
    <span class="input-group-text">Julio 16-30</span>
  <input type="number" id="is14" name="is14" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Agosto 1-15</span>
  <input type="number" id="is15" name="is15" class="form-control" value="0.00">
    <span class="input-group-text">Agosto 16-30</span>
  <input type="number" id="is16" name="is16" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Septiembre 1-15</span>
  <input type="number" id="is17" name="is17" class="form-control" value="0.00">
    <span class="input-group-text">Septiembre 16-30</span>
  <input type="number" id="is18" name="is18" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Octubre 1-15</span>
  <input type="number" id="is19" name="is19" class="form-control" value="0.00">
    <span class="input-group-text">Octubre 16-30</span>
  <input type="number" id="is20" name="is20" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Noviembre 1-15</span>
  <input type="number" id="is21" name="is21" class="form-control" value="0.00">
    <span class="input-group-text">Noviembre 16-30</span>
  <input type="number" id="is22" name="is22" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Diciembre 1-15</span>
  <input type="number" id="is23" name="is23" class="form-control" value="0.00">
    <span class="input-group-text">Diciembre 16-30</span>
  <input type="number" id="is24" name="is24" class="form-control" value="0.00">
</div>


			</div>
	  
<div class="col-lg-12">

<div class="input-group input-group-sm mb-3 collapse">
  <span class="input-group-text">Prima vacacional Semana santa</span>
  <input type="number" id="is25" name="is25" class="form-control" value="0.00">
  <span class="input-group-text">Prima vacacional Diciembre</span>
  <input type="number" id="is26" name="is26" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Aguinaldo pte 1</span>
  <input type="number" id="is27" name="is27" class="form-control" value="0.00">
    <span class="input-group-text">Aguinaldo pte 2</span>
  <input type="number" id="is28" name="is28" class="form-control" value="0.00">
</div>



<div class="input-group input-group-sm mb-3 collapse">
  <span class="input-group-text">Dias de ajuste fiscal</span>
  <input type="number" id="is29" name="is29" class="form-control" value="0.00">
</div>


</div>




	  



      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-dark" onClick="duplicarPrimerValorISR()">Duplicar primer valor</button>
		<button type="button" class="btn btn-success" onclick="agregarISR()" data-bs-dismiss="modal">Agregar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal compensacion -->
<div class="modal fade" id="modalCompensacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Carga las compensaciones recibidas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">

	  <div class="alert alert-info" role="alert">
  Las compensaciones se refieren a pagos adicionales que recibes además de tu salario base, Medio tiempo o incentivos.</div>

        <div class="col-lg-6">
			
		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Enero 1-15</span>
  <input type="number" id="c1" name="c1" class="form-control" value="0.00">
    <span class="input-group-text">Enero 16-30</span>
  <input type="number" id="c2" name="c2" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Febrero 1-15</span>
  <input type="number" id="c3" name="c3" class="form-control" value="0.00">
    <span class="input-group-text">Febrero 16-28</span>
  <input type="number" id="c4" name="c4" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Marzo 1-15</span>
  <input type="number" id="c5" name="c5" class="form-control" value="0.00">
    <span class="input-group-text">Marzo 16-30</span>
  <input type="number" id="c6" name="c6" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Abril 1-15</span>
  <input type="number" id="c7" name="c7" class="form-control" value="0.00">
    <span class="input-group-text">Abril 16-30</span>
  <input type="number" id="c8" name="c8" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Mayo 1-15</span>
  <input type="number" id="c9" name="c9" class="form-control" value="0.00">
    <span class="input-group-text">Mayo 16-30</span>
  <input type="number" id="c10" name="c10" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Junio 1-15</span>
  <input type="number" id="c11" name="c11" class="form-control" value="0.00">
    <span class="input-group-text">Junio 16-30</span>
  <input type="number" id="c12" name="c12" class="form-control" value="0.00">
</div>

</div>
		<div class="col-lg-6">	

		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Julio 1-15</span>
  <input type="number" id="c13" name="c13" class="form-control" value="0.00">
    <span class="input-group-text">Julio 16-30</span>
  <input type="number" id="c14" name="c14" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Agosto 1-15</span>
  <input type="number" id="c15" name="c15" class="form-control" value="0.00">
    <span class="input-group-text">Agosto 16-30</span>
  <input type="number" id="c16" name="c16" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Septiembre 1-15</span>
  <input type="number" id="c17" name="c17" class="form-control" value="0.00">
    <span class="input-group-text">Septiembre 16-30</span>
  <input type="number" id="c18" name="c18" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Octubre 1-15</span>
  <input type="number" id="c19" name="c19" class="form-control" value="0.00">
    <span class="input-group-text">Octubre 16-30</span>
  <input type="number" id="c20" name="c20" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Noviembre 1-15</span>
  <input type="number" id="c21" name="c21" class="form-control" value="0.00">
    <span class="input-group-text">Noviembre 16-30</span>
  <input type="number" id="c22" name="c22" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Diciembre 1-15</span>
  <input type="number" id="c23" name="c23" class="form-control" value="0.00">
    <span class="input-group-text">Diciembre 16-30</span>
  <input type="number" id="c24" name="c24" class="form-control" value="0.00">
</div>


			</div>
	  
	  



      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-dark" onClick="duplicarPrimerValorComp()">Duplicar primer valor</button>
		<button type="button" class="btn btn-success" onclick="agregarCompensacion()" data-bs-dismiss="modal">Agregar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Salarios -->
<div class="modal fade" id="modalSalarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Carga los salarios recibidos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">

	  <div class="alert alert-info" role="alert">
  Ingresa el salario recibido despues del ajuste fiscal, viene en los ultimos recibos de nómina.<br>
  El primer valor a duplicar es el del 1 al 15 de enero, si tu salario se mantuvo igual durante el año, puedes usar el botón para duplicar este valor en los demás campos.
</div>

        <div class="col-lg-6">
			
		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Enero 1-15</span>
  <input type="number" id="s1" name="s1" class="form-control" value="0.00">
    <span class="input-group-text">Enero 16-30</span>
  <input type="number" id="s2" name="s2" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Febrero 1-15</span>
  <input type="number" id="s3" name="s3" class="form-control" value="0.00">
    <span class="input-group-text">Febrero 16-28</span>
  <input type="number" id="s4" name="s4" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Marzo 1-15</span>
  <input type="number" id="s5" name="s5" class="form-control" value="0.00">
    <span class="input-group-text">Marzo 16-30</span>
  <input type="number" id="s6" name="s6" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Abril 1-15</span>
  <input type="number" id="s7" name="s7" class="form-control" value="0.00">
    <span class="input-group-text">Abril 16-30</span>
  <input type="number" id="s8" name="s8" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Mayo 1-15</span>
  <input type="number" id="s9" name="s9" class="form-control" value="0.00">
    <span class="input-group-text">Mayo 16-30</span>
  <input type="number" id="s10" name="s10" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Junio 1-15</span>
  <input type="number" id="s11" name="s11" class="form-control" value="0.00">
    <span class="input-group-text">Junio 16-30</span>
  <input type="number" id="s12" name="s12" class="form-control" value="0.00">
</div>

</div>
		<div class="col-lg-6">	

		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Julio 1-15</span>
  <input type="number" id="s13" name="s13" class="form-control" value="0.00">
    <span class="input-group-text">Julio 16-30</span>
  <input type="number" id="s14" name="s14" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Agosto 1-15</span>
  <input type="number" id="s15" name="s15" class="form-control" value="0.00">
    <span class="input-group-text">Agosto 16-30</span>
  <input type="number" id="s16" name="s16" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Septiembre 1-15</span>
  <input type="number" id="s17" name="s17" class="form-control" value="0.00">
    <span class="input-group-text">Septiembre 16-30</span>
  <input type="number" id="s18" name="s18" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Octubre 1-15</span>
  <input type="number" id="s19" name="s19" class="form-control" value="0.00">
    <span class="input-group-text">Octubre 16-30</span>
  <input type="number" id="s20" name="s20" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Noviembre 1-15</span>
  <input type="number" id="s21" name="s21" class="form-control" value="0.00">
    <span class="input-group-text">Noviembre 16-30</span>
  <input type="number" id="s22" name="s22" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Diciembre 1-15</span>
  <input type="number" id="s23" name="s23" class="form-control" value="0.00">
    <span class="input-group-text">Diciembre 16-30</span>
  <input type="number" id="s24" name="s24" class="form-control" value="0.00">
</div>


			</div>
	  
	  



      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-dark" onClick="duplicarPrimerValor()">Duplicar primer valor</button>
		<button type="button" class="btn btn-success" onclick="agregarSalarios()" data-bs-dismiss="modal">Agregar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="modalQuinquenios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Carga los Quinquenios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">

	  <div class="alert alert-info" role="alert">
  Ingresa el salario recibido despues del ajuste fiscal, viene en los ultimos recibos de nómina.<br>
  El primer valor a duplicar es el del 1 al 15 de enero, si tu salario se mantuvo igual durante el año, puedes usar el botón para duplicar este valor en los demás campos.
</div>

<div class="col-lg-12 mb-3">
<div class="input-group input-group-sm">
  <span class="input-group-text">Bono de QUINQUENIO :</span>
  <input type="number" id="qb" name="qb" class="form-control" value="0.00">
</div>
<span>Este bono lo recibes cada 5 años y esta estipulado en clas Condiciones Generales de Trabajo Articulo XXX</span>
</div>


        <div class="col-lg-6">
			
		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Enero 1-15</span>
  <input type="number" id="q1" name="q1" class="form-control" value="0.00">
    <span class="input-group-text">Enero 16-30</span>
  <input type="number" id="q2" name="q2" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Febrero 1-15</span>
  <input type="number" id="q3" name="q3" class="form-control" value="0.00">
    <span class="input-group-text">Febrero 16-28</span>
  <input type="number" id="q4" name="q4" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Marzo 1-15</span>
  <input type="number" id="q5" name="q5" class="form-control" value="0.00">
    <span class="input-group-text">Marzo 16-30</span>
  <input type="number" id="q6" name="q6" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Abril 1-15</span>
  <input type="number" id="q7" name="q7" class="form-control" value="0.00">
    <span class="input-group-text">Abril 16-30</span>
  <input type="number" id="q8" name="q8" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Mayo 1-15</span>
  <input type="number" id="q9" name="q9" class="form-control" value="0.00">
    <span class="input-group-text">Mayo 16-30</span>
  <input type="number" id="q10" name="q10" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Junio 1-15</span>
  <input type="number" id="q11" name="q11" class="form-control" value="0.00">
    <span class="input-group-text">Junio 16-30</span>
  <input type="number" id="q12" name="q12" class="form-control" value="0.00">
</div>

</div>
		<div class="col-lg-6">	

		<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Julio 1-15</span>
  <input type="number" id="q13" name="q13" class="form-control" value="0.00">
    <span class="input-group-text">Julio 16-30</span>
  <input type="number" id="q14" name="q14" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Agosto 1-15</span>
  <input type="number" id="q15" name="q15" class="form-control" value="0.00">
    <span class="input-group-text">Agosto 16-30</span>
  <input type="number" id="q16" name="q16" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Septiembre 1-15</span>
  <input type="number" id="q17" name="q17" class="form-control" value="0.00">
    <span class="input-group-text">Septiembre 16-30</span>
  <input type="number" id="q18" name="q18" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Octubre 1-15</span>
  <input type="number" id="q19" name="q19" class="form-control" value="0.00">
    <span class="input-group-text">Octubre 16-30</span>
  <input type="number" id="q20" name="q20" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Noviembre 1-15</span>
  <input type="number" id="q21" name="q21" class="form-control" value="0.00">
    <span class="input-group-text">Noviembre 16-30</span>
  <input type="number" id="q22" name="q22" class="form-control" value="0.00">
</div>

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text">Diciembre 1-15</span>
  <input type="number" id="q23" name="q23" class="form-control" value="0.00">
    <span class="input-group-text">Diciembre 16-30</span>
  <input type="number" id="q24" name="q24" class="form-control" value="0.00">
</div>


			</div>
	  
	  



      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-dark" onClick="duplicarPrimerValorQuinquenio()">Duplicar primer valor</button>
		<button type="button" class="btn btn-success" onclick="agregarQuinquenio()" data-bs-dismiss="modal">Agregar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal acerca de -->
<div class="modal fade" id="modalAcercaDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Acerca de</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="declaraIMCEDLOGO.png" class="img-fluid rounded-start" alt="Logo declaraimced">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Declara IMCED 2026</h5>
        <p class="card-text">El programa para ayudar en la declaración 2026 fue diseñado para orientar y ayudar a calcular los ingresos a declarar, es importante verificar que todos los datos estén correctamente ingresados, el sistema no almacena ningun dato, información
 o resultado, todo se procesa en tu navegador y se borra al cerrar la pestaña, el programa es completamente gratuito y de código abierto, puedes revisar el código en el repositorio de <a href="https://github.com/juanaguilarimced/DeclaraIMCED" target="_blank">GitHub</a>

        </nav>.</p>
        <p class="card-text"><small class="text-body-secondary">Diseñado por juan.aguilar@imced.edu.mx</small></p>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal imagenes -->
<div class="modal fade" id="modalImagenes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Imagen de Referencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<img src="#" id="imagenModalJPG" class="img-fluid" alt="Imagen de referencia">
        <span>En donde localizar el concepto que buscamos.</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</form>


<script>
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
const modalImagenes = document.getElementById('modalImagenes')
if (modalImagenes) {
  modalImagenes.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget;
    const recipient = button.getAttribute('data-bs-detalle');
	const campoImagen = document.getElementById('imagenModalJPG');
   campoImagen.src = recipient;
  })
};
	</script>
<script>

const <?php echo $prestaciones; ?>;
const <?php echo $bonos; ?>;

function cargarBonos(){
let b = 1;
bonos.forEach((bono) => {
	document.getElementById('b' + b).value = bono;	
  b++;
});
}


function agregarISR(){
	let total = 0;
	for(let i=1; i<=29; i++){
		total += parseFloat(document.getElementById('is' + i).value);
	}
	document.getElementById('isr').value = total.toFixed(2);
}

function duplicarPrimerValorISR(){
	let c1 = document.getElementById('is1').value;
	for(let i=2; i<=24; i++){
		document.getElementById('is' + i).value = c1;
	}
}

function cargarPrestaciones(){
let p = 1;
//console.log("Cargando prestaciones");
prestaciones.forEach((prestacion) => {
	//console.log("prestacion: " + prestacion);
	document.getElementById('p' + p).value = prestacion;
	//console.log("Fin prestacion: " + p);
  p++;
});
}

function duplicarPrimerValorComp(){
	let c1 = document.getElementById('c1').value;
	for(let i=2; i<=24; i++){
		document.getElementById('c' + i).value = c1;
	}
}

function agregarCompensacion(){
	let total = 0;
	total += parseFloat(document.getElementById('co').value);
	for(let i=1; i<=24; i++){
		total += parseFloat(document.getElementById('c' + i).value);
	}
	document.getElementById('co').value = total.toFixed(2);
}



function duplicarPrimerValorQuinquenio(){
	let q1 = document.getElementById('q1').value;
	for(let i=2; i<=24; i++){
		document.getElementById('q' + i).value = q1;
	}
}

function agregarQuinquenio(){
	let total = 0;
	total += parseFloat(document.getElementById('qb').value);
	for(let i=1; i<=24; i++){
		total += parseFloat(document.getElementById('q' + i).value);
	}
	document.getElementById('qq').value = total.toFixed(2);
}


function duplicarPrimerValor(){
	let s1 = document.getElementById('s1').value;
	for(let i=2; i<=24; i++){
		document.getElementById('s' + i).value = s1;
	}
}

function agregarSalarios(){
	let total = 0;
	for(let i=1; i<=24; i++){
		total += parseFloat(document.getElementById('s' + i).value);
	}
	document.getElementById('ss').value = total.toFixed(2);
}

window.onload = function() {
    //console.log("Página cargada");
	cargarBonos();
	cargarPrestaciones();
};

function revisarEventosBonos(){
  let valorEventosBono = document.getElementById('b1').value;

  if(valorEventosBono > 0){
    document.getElementById('b1').classList.remove('is-invalid');
  } else {
    document.getElementById('b1').classList.add('is-invalid'); 
}
}

function cancelar(){
  if(confirm("¿Estás seguro de que deseas cancelar? Se perderán todos los datos ingresados.")){
    window.location.reload();
  }
}


function imprimir(){
 const form = document.getElementById('formularioFull');
  form.submit();
}


function calcular(){

if (document.getElementById('b1').value <= 0) {

  alert("No ingresaste el apoyo para eventos, recuerda que es la suma del ISR del aguinaldo en ambas partes.");
  document.getElementById('b1').classList.add('is-invalid');
  return; // Detener la ejecución de la función si el valor no es válido

} else {
  

try {
  // Código que podría generar un error



  let sueldo = 0;
  let bonos = 0;
  let descuentos = 0;

// Sumar sueldos
  for(let i=1; i<=24; i++){
    sueldo += parseFloat(document.getElementById('s' + i).value);
  }

  //sumar quinquenios
  for(let i=1; i<=24; i++){
    sueldo += parseFloat(document.getElementById('q' + i).value);
  } 

  //sumar quinquenio especial
  sueldo += parseFloat(document.getElementById('qb').value);

  //sumar dias de ajuste fiscal
  sueldo += parseFloat(document.getElementById('af').value);

  //sumar compensaciones
  for(let i=1; i<=24; i++){
    sueldo += parseFloat(document.getElementById('c' + i).value);
  }

  //sumar aguinaldos
    sueldo += parseFloat(document.getElementById('ag').value);
    sueldo += parseFloat(document.getElementById('ag2').value);

//sumar primas vacacionales
  sueldo += parseFloat(document.getElementById('pv').value);
  sueldo += parseFloat(document.getElementById('pv2').value);

  //sumar empleado del mes
  if(document.getElementById('em').value > 0){
     sueldo += (parseFloat(document.getElementById('em').value) * parseFloat(document.getElementById('p5').value));
  } 

  //sumar dias economicos
  sueldo += parseFloat(document.getElementById('de').value);

  //sumar prestaciones
  for(let i=1; i<=3; i++){
    sueldo += (parseFloat(document.getElementById('p' + i).value)*24);     
}
sueldo += (parseFloat(document.getElementById('p4').value)*6); 



//sumar bonos 
  for(let i=1; i<=13; i++){
    bonos += parseFloat(document.getElementById('b' + i).value);
  } 


  //sumar isr
  for(let i=1; i<=29; i++){
    descuentos += parseFloat(document.getElementById('is' + i).value);
  }

//mostrar resultados
document.getElementById('sueldo').value = sueldo.toFixed(2);
document.getElementById('bonos').value = bonos.toFixed(2);
document.getElementById('totalIngresos').value = (sueldo + bonos).toFixed(2);
document.getElementById('descuentos').value = descuentos.toFixed(2);
document.getElementById('totalADeclarar').value = (sueldo + bonos - descuentos).toFixed(2);

} catch (error) {
  // Código para manejar el error
  console.error(error.message);
  console.log(error);
} finally {
  // Código que se ejecuta siempre, haya o no error
  console.log("Cálculo finalizado");
}

}

}





</script>

     </body>
</html>

