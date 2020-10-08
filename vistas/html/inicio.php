<?php
require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

 ?>
  <link rel="stylesheet" type="text/css" href="css/unal.css">
	
  <main class="detalle">
     <br> <br> <br> <br> 
    <div class="breadcrumb-class">

<h1 class="bienvenida">Te damos la bienvenida: <?php echo $varSeccion;
?>
	
 <br>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"> -->
  
</script>

<script type="text/javascript" >

Swal.fire({
  icon: 'success',
  title: 'Bienvenido!'
})
    </script>
</h1>
    </div>


		
	<div>

	
<div class="panel panel-default" >

 <br>


  <ul class="list-group" style="background-color: red;">
 
    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt;" id="li" >Este cuestionario ha sido diseñado para identificar su estilo preferido de aprendizaje. No es un test de inteligencia, ni de personalidad.</li>
    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt" id="li">No hay límite de tiempo para contestar al Cuestionario. No le ocupará más de 15 minutos.</li>
    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt; " id="li">No hay respuestas correctas o erróneas y el resultado será útil en la medida que sea sincero/a en sus respuestas.</li>

  </ul>
</div>
</div>
<br>
<style type="text/css">
li:hover {
  background-color: #bdecb6;
}
</style>
<?php
	include("estilosBotones.php");
  include ("foot.php");
  ?>


