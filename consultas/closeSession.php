<?php

    session_start();
    // $_SESSION['usuario']=null;
    session_destroy();
    header("Location: ../vistas/html/index.php");

?>