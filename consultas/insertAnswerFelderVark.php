
<?php

require("conexionBaseDatos.php");
require ("activeSession.php");

// error_reporting(0);

 
 
$sql = "SELECT cedula from usuario
WHERE nombre_style='$varSeccion'

";
	$ejecucion=pg_query($sql);
	$docu=pg_fetch_array($ejecucion);
	$document=$docu['cedula'];





		$cant_V = 0;
        $cant_A = 0;
        $cant_R = 0;
        $cant_K = 0;

        $cant_G = 0;
        $cant_S = 0;


        for ($i = 1; $i <= 13; $i++) {

        	$letrasV=$_POST[$i];
            if ( $letrasV == 'V')
                $cant_V++;

            $letrasA=$_POST[$i];
            if ( $letrasA == 'A')
                $cant_A++;

            $letrasR=$_POST[$i];
            if ( $letrasR == 'R')
                $cant_R++;

            $letrasK=$_POST[$i];
            if ( $letrasK == 'K')
                $cant_K++;
        }

        echo "<br>";
        echo "LETRAS V";
        var_dump($cant_V);

        echo "<br>";
        echo "LETRAS A";
        var_dump($cant_A);

        echo "<br>";
        echo "LETRAS R";
        var_dump($cant_R);

        echo "<br>";
        echo "LETRAS K";
        var_dump($cant_K);


        //GLOBAL _ SECUENCIAL

        for ($j = 49; $j <= 70; $j++) {
        	$letrasG=$_POST[$j];
            if ($letrasG == 'G')
                $cant_G++;

            $letrasS=$_POST[$j];
            if ( $letrasS == 'S')
                $cant_S++;
        }

        echo "<br>";
        echo "LETRAS G";
        var_dump($cant_G);

        echo "<br>";
        echo "LETRAS S";
        var_dump($cant_S);

        /*$this->usuario_model->guardar_estudiante($cant_V,$cant_A,$cant_R,$cant_K,$cant_G,$cant_S);

        /* echo "   cantidad G  ";
          echo $cant_G;
          echo "   cantidad S  ";
          echo $cant_S; */

        // $mayor = "";

        $puntaje = 0;
        if ($cant_V >= $cant_A && $cant_V >= $cant_R && $cant_V >= $cant_K) {
            $mayor = 7; //Visual
            $puntaje = $cant_V;
        } else
        if ($cant_A >= $cant_V && $cant_A >= $cant_R && $cant_A >= $cant_K) {
            $mayor = 1; //Auditivo
            $puntaje = $cant_A;
        } else
        if ($cant_R >= $cant_V && $cant_R >= $cant_A && $cant_R >= $cant_K) {
            $mayor = 5; //Lector
            $puntaje = $cant_R;
        } else
        if ($cant_K >= $cant_R && $cant_K >= $cant_V && $cant_K >= $cant_A) {
            $mayor = 3; //kinestesico
            $puntaje = $cant_K;
        }

        if ($cant_G >= $cant_S) {
            $mayor = $mayor + 0; //Global
            $puntaje = $puntaje . '-' . $cant_G;
        } else {
            $mayor = $mayor + 1; //Secuencial
            $puntaje = $puntaje . ' - ' . $cant_S;
        }

        //$datos = array($mayor, $cant_V, $cant_A, $cant_R, $cant_K, $cant_G, $cant_S);

        echo "<br>";
        echo "RESULTADOS FINALES ";
        var_dump($cant_V);
        var_dump($cant_A);
        var_dump($cant_R);
        var_dump($cant_K);
        var_dump($cant_G);
        var_dump($cant_S);
        

$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


$sqlQuery2="INSERT INTO consolidado_felder_vark (documento, fecha, hora, test, visual, secuencial, global, auditivo, lector_escritor, kinestesico)
                values ('".$document."','".$dateTime."','".$hora."','Felder-Vark',".$cant_V.",".$cant_S.",".$cant_G.",".$cant_A.",".$cant_R.",".$cant_K.")";
$exe=pg_query($sqlQuery2);


header("Location: ../vistas/html/perfilesFelderVark.php");


