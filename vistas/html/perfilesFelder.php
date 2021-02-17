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
                    <p style="text-align: justify;"> Indica preferencias hacia el procesamiento a través de la aplicación de los conocimientos y el trabajo en grupo. Tienden a retener y comprender mejor nueva información cuando hacen algo activo con ella (discutiéndola, aplicándola, explicándosela a otros).</p>
                    <br>
            
                  


                </div>
                <div class="col">
                    <h3><p style="text-align: center;">SENSORIAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/sensorial.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se orienta hacia la percepción de hechos de la realidad y detalles. Refiere a un tipo de pensamiento concreto, práctico y procedimental; sigue procedimientos muy bien establecidos; gustan de trabajo práctico (trabajo de laboratorio).</p>
                    <br>
                   
                 
                </div>
                <div class="col">

                    <h3><p style="text-align: center;">VISUAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/visual.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Representa mejor el contenido a través de materiales figurativos como diagramas, gráficas, películas, demostraciones, entre otros; recuerdan mejor lo que ven.</p>
                    <br>
                   
                   


                </div>

                <div class="col">

                    <h3><p style="text-align: center;">SECUENCIAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/secuencial.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se orienta hacia una comprensión de tipo analítica siguiendo procesos lineales y predeterminados. Aprenden en pequeños pasos incrementales cuando el siguiente paso está siempre lógicamente relacionado con el anterior; ordenados y lineales.</p>
                    <br>
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
                    <p style="text-align: justify;"> Señala habilidades para adquirir conocimientos mediante la escucha y el pensamiento individual sobre los contenidos. Tienden a retener y comprender nueva información pensando y reflexionando sobre ella, prefieren aprender meditando, pensando y trabajando solos.</p>
                    <br>
                   
                  
                </div>
            


             <div class="col">

                    <h3><p style="text-align: center;">INTUITIVO</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/intuitivo.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Tiende hacia el descubrimiento de relaciones entre conceptos y significados subyacentes. Alude a habilidades creativas e innovadoras; orientados hacia las teorías y los significados; les gusta innovar y odian la repetición.</p>
                    <br>
                   
                  
                </div>
            

             <div class="col">

                    <h3><p style="text-align: center;">VERBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/verbal.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Alude a las preferencias por las explicaciones orales u escritas; entienden mejor lo que leen o lo que oyen. </p>
                    <br>
                   
                  
                </div>
            

             <div class="col">

                    <h3><p style="text-align: center;">GLOBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/global.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Tiende hacia el entendimiento holístico captando el sentido amplio de los contenidos. Esta característica puede conllevar dificultades para explicar el modo en que llevan a cabo la comprensión de los conceptos y conclusiones. Aprenden grandes saltos, de forma general, aprendiendo nuevo material casi al azar y “de pronto” visualizando la totalidad.</p>
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
