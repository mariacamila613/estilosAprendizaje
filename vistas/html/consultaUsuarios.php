<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("headAdmin.php");
include("nav.php");

?>




<!-- /content wrapper for padding -->

<!-- Contenido -->
<main class="detalle">
    <div class="breadcrumb-class"><span>Listado de Usuarios</span></div>
    <br> <br>  <br> <br>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

 
<?php
include ("../../consultas/consultaUsuariosActuales.php");
?>


    <!----------------------------------------------------->



</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>


















