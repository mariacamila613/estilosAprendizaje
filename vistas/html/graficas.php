<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include("head.php");
include("nav.php");
error_reporting(0);
 ?>



<!DOCTYPE html>
<html>
<head>
  


      <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> 




    <script src="librerias/jquery.js"></script>
    <script src="librerias/plotly.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <div class="titulo">GRÁFICAS DEL TEST CHAEA JUNIOR </div>
                        <style type="text/css">
                            .titulo {
                              display: flex;
                              justify-content: center;
                              color: white;
                            }
                   </style>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargaLineal"></div>
                            </div>
                              <div class="col-sm-6">
                                <div id="cargaBarras"></div>
                            </div>
                         
                          
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

</div>
<br>
 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                       <div class="titulo">GRÁFICAS DEL TEST CHAEA</div>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargalinealChaea"></div>
                            </div>
                              <div class="col-sm-6">
                                <div id="cargaBarrasChaea"></div>
                            </div>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>


<br>
 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                       <div class="titulo">GRÁFICAS DEL TEST FELDER</div>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargalinealFelder"></div>
                            </div>
                              <div class="col-sm-6">
                                <div id="cargaBarrasFelder"></div>
                            </div>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>         



<br>
 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                       <div class="titulo">GRÁFICAS DEL TEST VARK</div>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargalinealVark"></div>
                            </div>
                              <div class="col-sm-6">
                                <div id="cargaBarrasVark"></div>
                            </div>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>


 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                       <div class="titulo">GRÁFICAS DEL TEST FELDER-VARK</div>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargalinealFelderVark"></div>
                            </div>
                              <div class="col-sm-6">
                                <div id="cargaBarrasFelderVark"></div>
                            </div>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>



</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('linealJunior.php');
        $('#cargaBarras').load('barrasJunior.php');
        $('#cargaBarrasChaea').load('barrasChaea.php');
        $('#cargalinealChaea').load('linealChaea.php');


        $('#cargaBarrasFelder').load('barrasFelder.php');
        $('#cargalinealFelder').load('linealFelder.php');

        $('#cargaBarrasVark').load('barrasVark.php');
        $('#cargalinealVark').load('linealVark.php');

        $('#cargaBarrasFelderVark').load('barrasFelderVark.php');
        $('#cargalinealFelderVark').load('linealFelderVark.php');

    });
</script>
</main></head></html>
<?php
include("foot.php");
?>