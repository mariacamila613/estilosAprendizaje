<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" >

Swal.fire({
  icon: 'success',
  title: 'Respuestas guardadas correctamente!'
})
    </script>



<html>
<head>


</head>
<body>



<main class="detalle">











        </h1>
    </div>



    <div>


        <div class="panel panel-default">


















            <br>   <br>
            <div class="panel-body"></div>
            <br>   <br> <br>
            <div class="d-flex justify-content-center">
                <br>
                <h1>CARACTERÍSTICAS DE CADA PERFIL</h1>
                <br><br><br><br><br><br>
            </div>



            <h4 style="text-align: justify;"> En esta sesión encuentras los diferentes perfiles sobre los estilos de aprendizaje que son una mezcla de factores cognitivos, afectivos y fisiológicos característicos que sirven como indicadores relativamente estables de cómo el alumno percibe, interactúa y responde al entorno de aprendizaje. Interpreta estas descripciones con tus resultados.</h4>
                    <br>
                    <br>


            <div class="d-flex justify-content-center">
            <h4>CONSULTE SUS RESULTADOS       </h4></div>


            <div class="d-flex justify-content-center">
            <a href="reporte.php" target="_blank" class="btn btn-primary" style="color:white">  AQUÍ </a> <br><br><br><br><br></div>




            <div class="row">
                <div class="col">
                    <h3> <p style="text-align: center;">ACTIVO</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/activo.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Son abiertos, improvisadores y espontáneos, no les importa correr riesgos o cometer errores. Retienen mejor la información haciendo algo con el conocimiento como discutirlo, explicarlo o aplicarlo. Les agrada el trabajo activo, desarrollan guías de estudio, carteleras, trabajos, talleres.</p>
                    <br>
                    <br>
                    <br>
                    <br> 
                   


                </div>
                <div class="col">
                    <h3><p style="text-align: center;">REFLEXIVO</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/reflexivo.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Prefieren pensar detenidamente sobre el objeto de estudio y trabajar solos. Aumentan la comprensión en pasos lineales, pueden no entender el material, pero logran conectar lógicamente sus partes. Prefieren la elaboración de mapas conceptuales, diagramas de flujo, árboles de problemas.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                </div>
                <div class="col">

                    <h3><p style="text-align: center;">TEÓRICO</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/teorico.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se trata de estudiantes objetivos, con un profundo sentido crítico, metódico y disciplinado, que abordan los problemas desde un punto de vista lógico. Prefieren las actividades estructuradas que les permitan comprender sistemas complejos. Prefieren las clases magistrales.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    


                </div>

                <div class="col">

                    <h3><p style="text-align: center;">PRAGMÁTICO</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/pragmatico.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Recuerdan mejor lo que ven, figuras, demostraciones, diagramas, imágenes. Prefieren el apoyo de material didáctico. Prefieren descubrir posibilidades y relaciones, les agradan las innovaciones, captan mejor las abstracciones. Son capaces de resolver problemas rápidamente luego de captar el panorama general. Son personas realistas, directas, eficaces y prácticas, prefieren planificar las acciones de manera que puedan ver relación entre el asunto tratado y su aplicación.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                   
                </div>
            </div>

            <div class="d-flex justify-content-center">

                <a  href="inicio.php" class="btn btn-success">Ir a Inicio</a></div>
        </div>


</main>



<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>
