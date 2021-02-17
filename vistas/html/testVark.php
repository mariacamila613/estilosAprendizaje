
<?php
require("../../consultas/conexionBaseDatos.php");

?>

 

    <script src="js/aa.js" charset="utf-8">

    </script>
  <link rel="stylesheet" type="text/css" href="css/step.css">

    <div class="stepwizard-row setup-panel">


        <div class="stepwizard-step">
            <a href="#step-1" type="button"  id="boton" class="btn btn-primary btn-circle" >1</a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button"  id="boton" class="btn btn-default btn-circle" disabled="disabled" >2</a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button"   id="boton" class="btn btn-default btn-circle" disabled="disabled">3</a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button"  id="boton" class="btn btn-default btn-circle" disabled="disabled">4</a>

        </div>

        <!--  <div class="stepwizard-step">
            <a href="#step-5" type="button"  id="boton" class="btn btn-default btn-circle" disabled="disabled">5</a>

        </div> -->

        <style>
           #boton { display : none; }
        </style>

    </div>
</div>



<br>

<!--onsubmit="return onSubmit()"-->
<form class="formulario"  action="../../consultas/insertAnswerVark.php" name="registro" method="post">
 <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2> Paso 1</h2>
                <size=18>
                <p style = "18">
                <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                    <p>El cuestionario cuenta con 16 preguntas, que le servirán para identificar su estilo de aprendizaje, visual, auditivo, lectura/ escritura o kinestésico. Cada pregunta cuenta con cuatro opciones que corresponde a los diferentes estilos de aprendizaje. En este cuestionario se deben seguir algunas instrucciones para dar respuesta y que su resultado sea veraz y de utilidad. Dichos pasos a seguir son: </p>
                    <li>Escoja las respuestas que más se acercan a su preferencia y elija la letra.</li>
                    <li>No es un test de inteligencia, ni de personalidad.</li>
                    <li>No hay límite de tiempo para contestar al Cuestionario. No le ocupará  más de 15 minutos.</li>
                    <li>No hay respuestas correctas o erróneas. Será  útil en la medida que sea sincero/a en sus respuestas.</li>
                    <li>Por favor conteste a todos los ítems. </li>
                    <li>El cuestionario es anónimo.</li>
                   
              </font>
                </div>

                <button class="btn btn-success nextBtn  btn-lg pull-right btn-un" type="button" >Iniciar</button>
              </div>
            </div>
    </div>




     <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-2">
         <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 2</h3>
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>#</th><th>Pregunta</th><th>Respuesta

                      </th>

                    </tr>

                  </thead>

                  <tbody>
 
<tr>
  <th scope="row">1</th>
  <td>
      <fieldset> 
   <legend>

  <label for="1">Usted cocinará algo especial para su familia. Usted haría:  </label> </td>

    <td><input type="radio" name="1" value="1"required> Preguntar a amigos por sugerencias.</td>
    <td><input type="radio" name="1" value="2"> Dar una vista al recetario por ideas de las fotos.</td>
    <td><input type="radio" name="1" value="3"required> Usar un libro de cocina donde usted sabe hay una buena receta.</td>
    <td><input type="radio" name="1" value="4"> Cocinar algo que usted sabe sin la necesidad de instrucciones.</td>

  </legend>
  </fieldset>

</tr>


<tr>
  <th scope="row">2</th>
  <td> <fieldset>
          <legend>
      <label>Usted escogerá alimento en un restaurante o un café. Usted haría: </label> </td>

    <td><input type="radio" name="2" value="1" required> Escuchar al mesero o pedir que amigos recomienden opciones.</td>
    <td><input type="radio" name="2" value="2"> Mirar lo qué otros comen o mirar dibujos de cada platillo.</td>
    <td><input type="radio" name="2" value="3" required> Escoger de las descripciones en el menú.</td>
    <td><input type="radio" name="2" value="4"> Escoger algo que tienes o has tenido antes.</td>

</tr>




<tr>
  <th scope="row">3</th>
  <td>
      <fieldset>
          <legend>
              <label>Aparte del precio, qué más te influenciaría para comprar un libro de ciencia ficción</label> </td>

    <td><input type="radio" name="3" value="1" required> Un amigo habla acerca de él y te lo recomienda.</td>
    <td><input type="radio" name="3" value="2" > Tienes historias reales, experiencias y ejemplos.</td>
    <td><input type="radio" name="3" value="3" required> Leyendo rápidamente partes de él.</td>
    <td><input type="radio" name="3" value="4" > El diseño de la pasta es atractivo.</td>

</tr>




<tr>
  <th scope="row">4</th>
  <td>
      <fieldset>
          <legend>
              <label>Usted ha terminado una competencia o un examen y le gustaría tener alguna retroalimentación. Te gustaría retroalimentarte:</label> </td>

    <td><input type="radio" name="4" value="1"required> Usando descripciones escritas de los resultados </td>
    <td><input type="radio" name="4" value="2" > Usando ejemplos de lo que usted ha hecho.  </td>
    <td><input type="radio" name="4" value="3"required> Usando gráficos que muestran lo que usted ha logrado.</td>
    <td><input type="radio" name="4" value="4" > De alguien que habla por usted.  </td>

</tr>



<tr>
  <th scope="row">5</th>
  <td><fieldset>
          <legend><label>Usted tiene un problema con la rodilla. Usted preferiría que el doctor:</label> </td>

    <td><input type="radio" name="5"   value="1"required > Use un modelo de plástico y te enseñe lo que está mal</td>
    <td><input type="radio" name="5"   value="2" > Te de una página de internet o algo para leer</td>
    <td><input type="radio" name="5"   value="3"required > Te describa lo qué está mal</td>
    <td><input type="radio" name="5"   value="4" > Te enseñe un diagrama lo que está mal</td>

</tr>



<tr>
  <th scope="row">6</th>
  <td><fieldset>
          <legend><label>Usted está a punto de comprar una cámara digital o teléfono o móvil. ¿Aparte del precio qué más influirá en tomar tu decisión? </label> </td>

    <td><input type="radio" name="6" value="1"required > Probándolo</td>
    <td><input type="radio" name="6" value="2" > Es un diseño moderno y se mira bien. </td>
    <td><input type="radio" name="6" value="3"required > Leer los detalles acerca de sus características.</td>
    <td><input type="radio" name="6" value="4" > El vendedor me informa acerca de sus características. </td>

</tr>


<tr>
  <th scope="row">7</th>
  <td><fieldset>
          <legend><label>Usted no está seguro como se deletrea trascendente o tracendente ¿Usted qué haría? </label> </td>

    <td><input type="radio" name="7" value="1"required > Escribir ambas palabras en un papel y escojo una.</td>
    <td><input type="radio" name="7" value="2" > Pienso cómo suena cada palabra y escojo una.</td>
    <td><input type="radio" name="7" value="3"required > Busco la palabra en un diccionario.</td>
    <td><input type="radio" name="7" value="4" > Veo la palabra en mi mente y escojo según como la veo.</td>

</tr>



<tr>
  <th scope="row">8</th>
  <td><fieldset>
          <legend><label>Me gustan páginas de Internet que tienen:</label> </td>

    <td><input type="radio" name="8" value="1"required > Interesantes descripciones escritas, listas y explicaciones.</td>
    <td><input type="radio" name="8" value="2" > Diseño interesante y características visuales.</td>
    <td><input type="radio" name="8" value="3"required > Cosas que con un click pueda cambiar o examinar.</td>
    <td><input type="radio" name="8" value="4" > Canales donde puedo oír música, programas de radio o entrevistas.</td>

 </tr>
</tr>


                       </tbody>
                      </table>
                  </div>
                <button class="btn btn-success nextBtn btn-lg pull-right btn-un" type="button" id="next1" style="position: absolute;left: 33%">Siguiente</button>
             <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1"style="position: absolute;left: 60%" >Atrás</button>
            </div>
        </div>
    </div>


     <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 3</h3>
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>#</th><th>Pregunta</th><th>Respuesta

                      </th>

                    </tr>

                  </thead>

                  <tbody>

<tr>
  <th scope="row">9</th>
  <td><fieldset>
          <legend><label>Usted está planeando unas vacaciones para un grupo. Usted quiere alguna observación de ellos acerca del plan. Usted qué haría:</label> </td>

    <td><input type="radio" name="9" value="1" required> Usa un mapa o página de Internet para mostrarles los lugares.</td>
    <td><input type="radio" name="9" value="2" > Describe algunos de los puntos sobresalientes.  </td>
    <td><input type="radio" name="9" value="3" required> Darles una copia del itinerario impreso.</td>
    <td><input type="radio" name="9" value="4" > Llamarles por teléfono o mandar mensaje por correo electrónico. </td>

</tr>



<tr>
  <th scope="row">10</th>
  <td><fieldset>
          <legend><label>Usted está usando un libro, disco compacto o página de Internet para aprender a tomar fotos con su cámara digital nueva. Usted le gustaría tener:</label> </td>

    <td><input type="radio" name="10" value="1"required> Una oportunidad de hacer preguntas acerca de la cámara y sus características.</td>
    <td><input type="radio" name="10" value="2" > Esquemas o diagramas que muestran la cámara y la función de cada parte. </td>
    <td><input type="radio" name="10" value="3"required> Ejemplos de buenas y malas fotos y cómo mejorarlas.</td>
    <td><input type="radio" name="10" value="4" > Aclarar las instrucciones escritas con listas y puntos sobre qué hacer. </td>
</tr>



<tr>
  <th scope="row">11</th>
  <td><fieldset>
          <legend><label>Usted quiere aprender un programa nuevo, habilidad o juego en una computadora. Usted qué hace: </label> </td>

    <td><input type="radio" name="11" value="1"required > Hablar con gente que sabe acerca del programa.</td>
    <td><input type="radio" name="11" value="2" > Leer las instrucciones que vienen en el programa.</td>
    <td><input type="radio" name="11" value="3"required > Seguir los esquemas en el libro que acompaña el programa.</td>
    <td><input type="radio" name="11" value="4" >  Use los controles o el teclado. </td>
</tr>



<tr>
  <th scope="row">12</th>
  <td><fieldset>
          <legend><label>Estás ayudando a alguien que quiere a ir al aeropuerto, al centro del pueblo o la estación del ferrocarril. Usted hace:</label> </td>

    <td><input type="radio" name="12" value="1" required> Va con la persona.</td>
    <td><input type="radio" name="12" value="2" > Anote las direcciones en un papel (sin mapa). </td>
    <td><input type="radio" name="12" value="3" required> Les dice las direcciones.</td>
    <td><input type="radio" name="12" value="4" > Les dibuja un croquis o les da un mapa</td>

</tr>

 

<tr>
  <th scope="row">13</th>
  <td><fieldset>
          <legend><label>Recuerde un momento en su vida en que usted aprendió a hacer algo nuevo. Trate de evitar escoger una destreza física, como andar en bicicleta. Usted aprendió mejor:</label> </td>

    <td><input type="radio" name="13" value="1"required > Viendo una demostración.</td>
    <td><input type="radio" name="13" value="2" > Con instrucciones escritas, en un manual o libro de texto.</td>
    <td><input type="radio" name="13" value="3"required > Escuchando a alguien explicarlo o haciendo preguntas.</td>
    <td><input type="radio" name="13" value="4" > Con esquemas y diagramas o pistas visuales.</td>

</tr>

 


<tr>
  <th scope="row">14</th>
  <td><fieldset>
          <legend><label>Ud. Prefiere un maestro o conferencista que use:</label> </td>

    <td><input type="radio" name="14" value="1"required > Demostraciones, modelos o sesiones prácticas.</td>
    <td><input type="radio" name="14" value="2" > Folletos, libros o lecturas.  </td>
    <td><input type="radio" name="14" value="3"required > Diagramas, esquemas o gráficos.</td>
    <td><input type="radio" name="14" value="4" > Preguntas y respuestas, pláticas y oradores invitados.</td>

</tr>



<tr>
  <th scope="row">15</th>
  <td><fieldset>
          <legend><label>Un grupo de turistas quiere aprender acerca de parques o reservas naturales en su área. Usted:</label> </td>

    <td><input type="radio" name="15" value="1"required > Los acompaña a un parque o reserva natural.</td>
    <td><input type="radio" name="15" value="2" > Les da un libro o folleto acerca de parques o reservas naturales.</td>
    <td><input type="radio" name="15" value="3"required > Les da una plática acerca de parques o reservas naturales.</td>
    <td><input type="radio" name="15" value="4" > Les muestra imágenes de Internet, fotos o libros con dibujos.</td>

</tr>


<tr>
  <th scope="row">16</th>
  <td><fieldset>
          <legend><label>Usted tiene que hacer un discurso para una conferencia u ocasión especial. Usted hace:</label> </td>
            
    <td><input type="radio" name="16" value="1" required> Escribir el discurso y aprendérselo leyéndolo varias veces.</td>
    <td><input type="radio" name="16" value="2"> Reunir muchos ejemplos e historias para hacer el discurso verdadero y práctico.</td>
    <td><input type="radio" name="16" value="3" required> Escribir algunas palabras claves y practicar el discurso repetidas veces.</td>
    <td><input type="radio" name="16" value="4"> Hacer diagramas o esquemas que te ayuden a explicar las cosas.</td>

       
    </tr>
</tr>


                 </tbody>

                </table>


                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un" type="button" id=""     style="position: absolute;left: 33%" >Siguiente</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" style="position: absolute;left: 60%" >Atrás</button>
            </div>
        </div>
    </div>


  <!-- *******************************************************************************************************  -->


 <br> <br> <br>
    <div class="row setup-content" id="step-4">

      <br> <br> <br> <br>
      <div class="col-md-4 offset-md-4"><center> <h4> ¿Está seguro que desea continuar? </h4></center></div>

                <table class="table table-striped table-hover ">




                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>
                      <tr>


<!-- 
<div class="col-md-2 offset-md-4">
<tr>
  <td style="text-align:center; border: black 5px;width: 5%;"> VISUAL </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> AUDITIVO </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> LECTOR/ESCRITOR </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> KINESTÉSICO </td>

 </div>
 </tr> -->


<!-- 
 <tr>

 <td  class="visual-s" style="text-align:center;"></td> //********************************

 <td class="auditivo-s" style="text-align:center;"></td>

 <td class="lector/escritor-s" style="text-align:center;"></td>

 <td class="kinestésico-s" style="text-align:center;"></td>


</tr> -->

</table>


             </tbody>

                </table>

    </table>

    <div class="col-md-2 offset-md-4">
        <div style="text-align: center;">
            <div class="d-flex center-content-center">
                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un"  type="submit" style="position: absolute;right: -10%; ">Finalizar</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" style="position: absolute;right: -60%; " >Atrás</button>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>



</form>

</main>
</div>








