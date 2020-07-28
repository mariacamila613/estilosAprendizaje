<?php

 session_start();
 unset($_SESSION['nombre_style']);
 header("Location: ../vistas/html/index.php");

?>
