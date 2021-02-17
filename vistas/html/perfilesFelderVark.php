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
            <a href="reporte.php" target="_blank" class="btn btn-primary" style="color:white">  AQUÍ </a> <br><br><br><br><br><br></div>



            <div class="row">
                <div class="col">
                    <h3> <p style="text-align: center;">VISUAL-GLOBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/visual.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se refiere a las personas que aprenden preferentemente mediante la observación. Pueden tener dificultad para recordar instrucciones y mensajes verbales. Para ellos es muy importante ver la expresión facial y el lenguaje corporal de la persona que habla para poder entender y retener la lección. Durante charlas o conferencias prefieren seguir la conferencia en fotocopias y transparencias o tomar notas antes que seguir la explicación oral.</p>
                    <br>
                    <br>
                    <li>Instrucciones escritas</li>
                    <li>Mapas conceptuales</li> 
                    <li>Diagramas, modelos, cuadros sinópticos</li> 
                    <li>Animaciones computacionales</li>  
                    <li>Videos, transparencias, fotografías e ilustraciones</li>
                </div>


                <div class="col">

                    <h3><p style="text-align: center;">LECTOR-GLOBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/lectura.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Son las personas que aprenden bien leyendo o escribiendo el material que desea aprender. Los estudiantes de Lectura y Escritura son buenos estudiosos tradicionales. Encajan con el método de estudio convencional, enseñado por la escuela, de leer libros de texto y escribir notas, los estudiantes son buenos para tomar notas durante la clase y estudian mejor leyendo estas notas o copiándolas.</p>
                    <br>
                    <br>
                    <li>Escritos de un minuto</li>
                    <li>Composiciones literarias, diarios, bitácoras y reportes</li>
                    <li>Elaboración resúmenes, reseñas y síntesis de textos</li>
                    <li>Revisión de textos de los compañeros</li>

                </div>




                <div class="col">
                    <h3><p style="text-align: center;">AUDITIVO-GLOBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/auditivo.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se refiere a las personas que aprenden mejor cuando reciben la información oralmente y cuando pueden hablar y explicar esa información a otra persona. Tiene facilidad de palabra y expresan sus emociones verbales. Tienen éxito cuando las instrucciones son dadas en voz alta o ellos deben responder oralmente. Les es más fácil recordar información cuando esta es presentada en forma de poema o canción. Les gusta hablar sobre lo que esa haciendo y suelen hacer muchas preguntas</p>
                    <br>
                    <br>
                    <li>Instrucciones verbales</li>
                    <li>Repetir sonidos parecidos</li>
                    <li>Audiocasettes</li>
                    <li>Debates, discusiones y confrontaciones</li>
                    <li>Lluvia de ideas</li>
                    <li>Leer el mismo texto con distinta reflexión</li>
                    <li>Lectura guiada y comentada</li>
                    <br>
                    <br>
                    <br>
                    <br>  
                </div>


                



                <div class="col">

                    <h3><p style="text-align: center;">KINESTÉSICO-GLOBAL</h3>
                    <br>   <br>
                    <img class="option_pdf" src="images/kinestesico.png" style="width: 240px; height:210px ">
                    <br>   <br>
                    <p style="text-align: justify;"> Se refiere a las personas que aprenden por medio de las actividades físicas. Ellos aprenden cuando hacen cosas, a través del movimiento y la manipulación física, Necesitan moverse constantemente y buscan cualquier pretexto para levantarse. Les gusta tocarlo todo y a través de ello descubrir cómo funcionan las cosas. No suelen ser grandes lectores y tienen a tener mala ortografía. Recuerdan las impresiones generales pero no los detalles.</p>
                    <br>
                    <br>
                    <li>Juego de roles y dramatizaciones</li>
                    <li>Dinámicas grupales que requieran sentarse y pararse</li>
                    <li>El pizarrón para resolver problemas</li>
                    <li>Manipulación de objetos para explicación de fenómenos</li>
                    <li>Gestos para acompañar las instrucciones orales</li>
                   

                </div>


                 <div class="col">

                    <h3><p style="text-align: center;">GLOBAL</h3>
                    <br>   <br>
                    <center><img class="option_pdf" src="images/global.png" style="width: 240px; height:210px "></center>
                    <br>   <br>
                    <p style="text-align: justify;"> Tiende hacia el entendimiento holístico captando el sentido amplio de los contenidos. Esta característica puede conllevar dificultades para explicar el modo en que llevan a cabo la comprensión de los conceptos y conclusiones. Aprenden grandes saltos, de forma general, aprendiendo nuevo material casi al azar y “de pronto” visualizando la totalidad.</p>
                    <br>
                   
                  
                </div>


                 <div class="col">

                    <h3><p style="text-align: center;">SECUENCIAL</h3>
                    <br>   <br>
                    <center><img class="option_pdf" src="images/secuencial.png" style="width: 240px; height:210px "></center>
                    <br>   <br>
                    <p style="text-align: justify;"> Se orienta hacia una comprensión de tipo analítica siguiendo procesos lineales y predeterminados. Aprenden en pequeños pasos incrementales cuando el siguiente paso está siempre lógicamente relacionado con el anterior; ordenados y lineales.</p>
                    <br>
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
