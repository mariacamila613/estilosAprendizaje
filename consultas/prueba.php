<?php

include("conexionBaseDatos.php");
include("activeSession.php");
foreach ($_SESSION['cedulas'] as $documento ) {
		echo "<br>";
		echo $documento;
}
