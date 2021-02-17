
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

         <div class="stepwizard-step">
            <a href="#step-5" type="button"  id="boton" class="btn btn-default btn-circle" disabled="disabled">5</a>

        </div>
        <style>
           #boton { display : none; }
        </style>

    </div>
</div>



<br>

<!--onsubmit="return onSubmit()"-->
<form class="formulario"  action="../../consultas/insertAnswerFelder.php" name="registro" method="post">
 <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2> Paso 1</h2>
                <size=18>
                <p style = "18">
                <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                    <p>El cuestionario cuenta con 44 preguntas, que le servirán para identificar su estilo de aprendizaje, activo, reflexivo; sensorial, intuitivo; visual, verbal; secuencial, global. Cada pregunta cuenta con dos opciones que corresponde a los diferentes estilos de aprendizaje. En este cuestionario se deben seguir algunas instrucciones para dar respuesta y que su resultado sea veraz y de utilidad. Dichos pasos a seguir son: </p>
                    <li>Encierre en un círculo la opción "a" o "b" para indicar su respuesta a cada
                    pregunta. Por favor seleccione solamente una respuesta para cada pregunta.</li>
                    <li>Si tanto "a" y "b" parecen aplicarse a usted, seleccione aquella que se aplique
                    más frecuentemente.</li>
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

  <label for="1">Entiendo mejor algo   </label> </td>

    <td><input type="radio" ut id="check_10" name="1"  value="1"required> Sí lo practico.</td>
    <td><input type="radio"  ut id="check_8" name="1" value="-1"> Sí pienso en ello.</td>
        </legend>
  </fieldset>

</tr>

<tr>
  <th scope="row">2</th>
  <td> <fieldset>
          <legend>
      <label>Me considero </label> </td>

    <td><input type="radio" ut id="check_11" name="2" value="1" required> Realista.</td>
    <td><input type="radio" ut id="check_6" name="2" value="-1"> Innovador.</td>

</tr>


<tr>
  <th scope="row">3</th>
  <td>
      <fieldset>
          <legend>
              <label>Cuando pienso acerca de lo que hice ayer, es más probable que lo haga sobre
              la base de </label> </td>

    <td><input type="radio" name="3" ut id="check_1" value="1" required> Una imagen.</td>
    <td><input type="radio" name="3" ut id="check_2" value="-1" > Palabras. </td>

</tr>


<tr>
  <th scope="row">4</th>
  <td>
      <fieldset>
          <legend>
              <label>Tengo tendencia a</label> </td>

    <td><input type="radio" ut id="check_11" name="4" value="1"required> Entender los detalles de un tema pero no ver claramente su estructura completa. </td>
    <td><input type="radio" ut id="check_6" name="4" value="-1" > Entender la estructura completa pero no ver claramente los detalles.  </td>

</tr>


<tr>
  <th scope="row">5</th>
  <td><fieldset>
          <legend><label>Cuando estoy aprendiendo algo nuevo, me ayuda  </label> </td>

    <td><input type="radio" ut id="check_12" name="5"   value="1"required > Hablar de ello.</td>
    <td><input type="radio" ut id="check_4" name="5"   value="-1" > Pensar en ello. </td>

</tr>


<tr>
  <th scope="row">6</th>
  <td><fieldset>
          <legend><label>Si yo fuera profesor, yo preferiría dar un curso </label> </td>

    <td><input type="radio" ut id="check_1" name="6" value="1"required > Que trate sobre hechos y situaciones reales de la vida. </td>
    <td><input type="radio" ut id="check_2" name="6" value="-1" > Que trate con ideas y teorías.  </td>

</tr>



<tr>
  <th scope="row">7</th>
  <td><fieldset>
          <legend><label>Prefiero obtener información nueva de </label> </td>

    <td><input type="radio" ut id="check_12"  name="7" value="1"required > Imágenes, diagramas, gráficas o mapas.</td>
    <td><input type="radio" ut id="check_4"  name="7" value="-1" > Instrucciones escritas o información verbal.</td>

</tr>




<tr>
  <th scope="row">8</th>
  <td><fieldset>
          <legend><label>Una vez que entiendo</label> </td>

    <td><input type="radio" ut id="check_11" name="8" value="1"required > Todas las partes, entiendo el total.</td>
    <td><input type="radio" ut id="check_6" name="8" value="-1" > El total de algo, entiendo como encajan sus partes.</td>

</tr>


<tr>
  <th scope="row">9</th>
  <td><fieldset>
          <legend><label>En un grupo de estudio que trabaja con un material difícil, es más probable que</label> </td>

    <td><input type="radio"  ut id="check_1" name="9" value="1" required> Participe y contribuya con ideas.</td>
    <td><input type="radio"  ut id="check_2" name="9" value="-1" > No participe y solo escuche.  </td>
</tr>


<tr>
  <th scope="row">10</th>
  <td><fieldset>
          <legend><label>Es más fácil para mí</label> </td>

    <td><input type="radio" id="check_10" name="10" value="1"required> Aprender hechos.</td>
    <td><input type="radio" ut id="check_8" name="10" value="-1" > Aprender conceptos. </td>

</tr>


<tr>
  <th scope="row">11</th>
  <td><fieldset>
          <legend><label>En un libro con muchas imágenes y gráficas es más probable que </label> </td>

    <td><input type="radio" ut id="check_12" name="11" value="1"required > Revise cuidadosamente las imágenes y las gráficas.</td>
    <td><input type="radio" ut id="check_4" name="11" value="-1" > Me concentre en el texto escrito. </td>

</tr>


<tr>
  <th scope="row">12</th>
  <td><fieldset>
          <legend><label>Cuando resuelvo problemas de matemáticas</label> </td>

    <td><input type="radio" ut id="check_11" name="12" value="1" required> Generalmente trabajo sobre las soluciones con un paso a la vez.</td>
    <td><input type="radio" ut id="check_6" name="12" value="-1" > Frecuentemente sé cuales son las soluciones, pero luego tengo dificultad para imaginarme los pasos para llegar a ellas. </td>

</tr>



<tr>
  <th scope="row">13</th>
  <td><fieldset>
          <legend><label>En las clases a las que he asistido</label> </td>

    <td><input type="radio" ut id="check_12"   name="13" value="1"required > He llegado a saber como son muchos de los estudiantes.</td>
    <td><input type="radio" ut id="check_4" name="13" value="-1" > Raramente he llegado a saber como son muchos estudiantes.   </td>

</tr>


<tr>
  <th scope="row">14</th>
  <td><fieldset>
          <legend><label>Cuando leo temas que no son de ficción, prefiero</label> </td>

    <td><input type="radio" ut id="check_11" name="14" value="1"required > Algo que me enseñe nuevos hechos o me diga como hacer algo.</td>
    <td><input type="radio" ut id="check_6" name="14" value="-1" > Algo que me dé nuevas ideas en que pensar.   </td>
</tr>


<tr>
  <th scope="row">15</th>
  <td><fieldset>
    <legend><label>Me gustan los maestros</label> </td>
    <td><input type="radio" ut id="check_10" name="15" value="1" required> Que utilizan muchos esquemas en el pizarrón.</td>
    <td><input type="radio" ut id="check_8" name="15" value="-1"> Que toman mucho tiempo para explicar.</td>

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
  <th scope="row">16</th>
  <td><fieldset>
          <legend><label>Cuando estoy analizando un cuento o una novela</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="16" value="1" required> Pienso en los incidentes y trato de acomodarlos para configurar los temas.</td>
    <td><input type="radio" ut id="check_2" name="16" value="-1" > Me doy cuenta de cuales son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran.</td>
  </th>
</tr>
    </tr>






<tr>
  <th scope="row">17</th>
  <td><fieldset>
          <legend><label>Cuando comienzo a resolver un problema de tarea, es más probable que</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="17" value="1"required > Comience a trabajar en su solución inmediatamente.</td>
    <td><input type="radio" ut id="check_2" name="17" value="-1" > Primero trate de entender completamente el problema.  </td>
  </th>
</tr>
    </tr>

<tr>
  <th scope="row">18</th>
  <td><fieldset>
          <legend><label>Prefiero la idea de</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="18" value="1"required> Certeza.</td>
    <td><input type="radio" ut id="check_8" name="18" value="-1" > Teoría. </td>
  </th>
</tr>
    </tr>




<tr>
  <th scope="row">19</th>
  <td><fieldset>
          <legend><label>Recuerdo mejor</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="19" value="1"required> Lo que veo.</td>
    <td><input type="radio" ut id="check_8" name="19" value="-1" > Lo que oigo.  </td>
  </th>
</tr>
    </tr>


  <tr>
  <th scope="row"> 20</th>
  <td><fieldset>
          <legend><label>Es más importante para mí que un profesor</label> </td>
  <th>
    <td><input type="radio" ut id="check_12"  name="20" value="1" required> Exponga el material en pasos secuenciales claros.</td>
    <td><input type="radio" ut id="check_4" name="20" value="-1" > Me dé un panorama general y relacione el material con otros temas.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 21 </th>
  <td><fieldset>
          <legend><label>Prefiero estudiar</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="21" value="1"required> En un grupo de estudio.</td>
    <td><input type="radio" ut id="check_8" name="21" value="-1" > Solo.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 22</th>
  <td><fieldset>
          <legend><label>Me considero</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="22" value="1"required > Cuidadoso en los detalles de mi trabajo.</td>
    <td><input type="radio" ut id="check_4" name="22" value="-1" > Creativo en la forma en la que hago mi trabajo.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">23 </th>
  <td><fieldset>
          <legend><label>Cuando alguien me da direcciones de nuevos lugares, prefiero</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="23" value="1"required > Un mapa.</td>
    <td><input type="radio" ut id="check_6" name="23" value="-1" > Instrucciones escritas.  </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">24 </th>
  <td><fieldset>
          <legend><label>Aprendo</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="24" value="1" required> A un paso constante. Si estudio con ahínco consigo lo que deseo.</td>
    <td><input type="radio" ut id="check_4" name="24" value="-1" > En inicios y pausas. Me llego a confundir y súbitamente lo entiendo.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 25 </th>
  <td><fieldset>
          <legend><label>Prefiero primero</label> </td>
  <th>
        <td><input type="radio" ut id="check_10" name="25" value="1"required > Hacer algo y ver que sucede.</td>
    <td><input type="radio" ut id="check_8" name="25" value="-1"> Pensar como voy a hacer algo.  </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">26 </th>
  <td><fieldset>
          <legend><label>Cuando leo por diversión, me gustan los escritores que</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="26" value="1" required> Dicen claramente los que desean dar a entender.</td>
    <td><input type="radio" ut id="check_2" name="26" value="-1" > Dicen las cosas en forma creativa e interesante.   </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 27 </th>
  <td><fieldset>
          <legend><label>Cuando veo un esquema o bosquejo en clase, es más probable que recuerde</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="27" value="1"required > La imagen.</td>
    <td><input type="radio" ut id="check_2" name="27" value="-1" > Lo que el profesor dijo acerca de ella. </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 28 </th>
  <td><fieldset>
          <legend><label>Cuando me enfrento a un cuerpo de información</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="28" value="1"required > Me concentro en los detalles y pierdo de vista el total de la misma.</td>
    <td><input type="radio" ut id="check_4" name="28" value="-1" > Trato de entender el todo antes de ir a los detalles.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">29</th>
  <td><fieldset>
          <legend><label>Recuerdo más fácilmente</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="29" value="1"required > Algo que he hecho.</td>
    <td><input type="radio" ut id="check_2" name="29" value="-1" > Algo en lo que he pensado mucho.  </td>
  </th>
</tr>
    </tr>

      <tr>
    <th scope="row"> 30 </th>
    <td><fieldset>
            <legend><label>Cuando tengo que hacer un trabajo, prefiero</label> </td>
    <th>
      <td><input type="radio" ut id="check_1" name="30" value="1" required> Dominar una forma de hacerlo.</td>
      <td><input type="radio" ut id="check_2" name="30" value="-1" > Intentar nuevas formas de hacerlo.  </td>
    </th>
  </tr>
      </tr>


                 </tbody>

                </table>

                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un" type="button" id="nexti2"style="position: absolute;left: 33%" >Siguiente</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" style="position: absolute;left: 60%" >Atrás</button>
            </div>
        </div>
    </div>


  <!-- *******************************************************************************************************  -->



    <div class="row setup-content" id="step-4">
         <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 4</h3>
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <th>#</th><th>Pregunta</th><th>Respuesta

                      </th>

                    </tr>

                  </thead>

                  <tbody>

                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>
                      <tr>


    <tr>
  <th scope="row"> 31</th>
  <td><fieldset>
          <legend><label>Cuando alguien me enseña datos, prefiero</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="31" value="1" required > Gráficas.</td>
    <td><input type="radio" ut id="check_6" name="31" value="-1" > Resúmenes con texto.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 32</th>
  <td><fieldset>
          <legend><label>Cuando escribo un trabajo, es más probable que</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="32" value="1" required> Lo haga (piense o escriba) desde el principio y avance.</td>
    <td><input type="radio" ut id="check_6" name="32" value="-1" > Lo haga (piense o escriba) en diferentes partes y luego las ordene.  </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">33 </th>
  <td><fieldset>
          <legend><label>Cuando tengo que trabajar en un proyecto de grupo, primero quiero</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="33" value="1" required> Realizar una "tormenta de ideas" donde cada uno contribuye con ideas.</td>
    <td><input type="radio" ut id="check_8" name="33" value="-1"> Realizar la "tormenta de ideas" en forma personal y luego juntarme con el
    grupo para comparar las ideas. </td>
  </th>
</tr>



    </tr>
    <tr>
  <th scope="row">34 </th>
  <td><fieldset>
          <legend><label>Considero que es mejor elogio llamar a alguien</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="34" value="1"required> Sensible.</td>
    <td><input type="radio"ut id="check_8" name="34" value="-1"> Imaginativo. </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 35</th>
  <td><fieldset>
          <legend><label>Cuando conozco gente en una fiesta, es más probable que recuerde</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="35" value="1"required > Cómo es su apariencia.</td>
    <td><input type="radio" ut id="check_6"  name="35" value="-1" > Lo que dicen de sí mismos.  </td>
  </th>
</tr>
    </tr>







     <tr>
  <th scope="row"> 36</th>
  <td><fieldset>
          <legend><label>Cuando estoy aprendiendo un tema, prefiero</label> </td>
  <th>
    <td><input type="radio"  ut id="check_10" name="36" value="1"required> Mantenerme concentrado en ese tema, aprendiendo lo más que pueda de
    él.</td>
    <td><input type="radio" ut id="check_8" name="36" value="-1"> Hacer conexiones entre ese tema y temas relacionados.   </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">37 </th>
  <td><fieldset>
          <legend><label>Me considero</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="37" value="1" required> Abierto.</td>
    <td><input type="radio" ut id="check_6" name="37" value="-1" > Reservado. </td>
  </th>
</tr>
    </tr>

    <tr>
  <th scope="row">38 </th>
  <td><fieldset>
          <legend><label>Prefiero cursos que dan más importancia a</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="38" value="1"required > Material concreto (hechos, datos).</td>
    <td><input type="radio" ut id="check_4" name="38" value="-1" > Material abstracto (conceptos, teorías). </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 39</th>
  <td><fieldset>
          <legend><label>Para divertirme, prefiero</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="39" value="1"required > Ver televisión.</td>
    <td><input type="radio" ut id="check_2" name="39" value="-1" > Leer un libro. </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row">40 </th>
  <td><fieldset>
          <legend><label>Algunos profesores inician sus clases haciendo un bosquejo de lo que
          enseñarán. Esos bosquejos son</label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="40" value="1"  required> Algo útiles para mí.</td>
    <td><input type="radio" ut id="check_8" name="40" value="-1"> Muy útiles para mí.  </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">41 </th>
  <td><fieldset>
          <legend><label>La idea de hacer una tarea en grupo con una sola calificación para todos</label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="41" value="1" required> Me parece bien.</td>
    <td><input type="radio" ut id="check_2" name="41" value="-1" > No me parece bien.  </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 42 </th>
  <td><fieldset>
          <legend><label>Cuando hago grandes cálculos</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="42" value="1"required > Tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo.</td>
    <td><input type="radio" ut id="check_4" name="42" value="-1" > Me cansa hacer su revisión y tengo que esforzarme para hacerlo. </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">43 </th>
  <td><fieldset>
          <legend><label>Tiendo a recordar lugares en los que he estado</label> </td>
  <th>
    <td><input type="radio" ut id="check_11"  name="43" value="1" required> Fácilmente y con bastante exactitud.</td>
    <td><input type="radio" ut id="check_6" name="43" value="-1" > Con dificultad y sin mucho detalle.  </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row">44 </th>
  <td><fieldset>
          <legend><label>Cuando resuelvo problemas en grupo, es más probable que yo</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="44" value="1"required > Piense en los pasos para la solución de los problemas.</td>
    <td><input type="radio" ut id="check_4" name="44" value="-1" > Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos. </td>
  </th>
 </tr>
</tr>


                 </tbody>

                </table>

                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un" type="button" id="" style="position: absolute;left: 33%" >Siguiente</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" style="position: absolute;left: 60%" >Atrás</button>
            </div>
        </div>
    </div>


  <!-- *******************************************************************************************************  -->



 <br> <br> <br>
    <div class="row setup-content" id="step-5">

    <br> <br> <br> <br>
    <div class="col-md-4 offset-md-4"><center> <h4> ¿Está seguro que desea continuar? </h4></center></div>

                <table class="table table-striped table-hover ">




                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>
<!--                    <tr>



<div class="col-md-2 offset-md-4">
<tr>
  <td style="text-align:center; border: black 5px;width: 5%;">  ACTIVO </td>

  <td style="text-align:center; border: black 5px;width: 5%;">     SENSORIAL </td>

  <td style="text-align:center; border: black 5px;width: 5%;">    VISUAL </td>

  <td style="text-align:center; border: black 5px;width: 5%;">     SECUENCIAL </td>

</div>
</tr>




<tr>

<td class="activo-s" style="text-align:center;"></td> 

<td class="sensorial-s" style="text-align:center;"></td>

<td class="visual-s" style="text-align:center;"></td>

<td class="secuencial-s" style="text-align:center;"></td>

</tr> 

</table>


             </tbody>

                </table>


<table class="table table-striped table-hover ">




                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>
                      <tr>



<div class="col-md-2 offset-md-4">
<tr>

  <td style="text-align:center; border: black 5px;width: 5%;">REFLEXIVO      </td>

  <td style="text-align:center; border: black 5px;width: 5%;">INTUITIVO     </td>

  <td style="text-align:center; border: black 5px;width: 5%;">VERBAL        </td>

  <td style="text-align:center; border: black 5px;width: 5%;">GLOBAL        </td>
</div>
</tr>




<tr>

<td class="reflexivo-s" style="text-align:center;"></td> 

<td class="intuitivo-s" style="text-align:center;"></td>

<td class="verbal-s" style="text-align:center;"></td>

<td class="global-s" style="text-align:center;"></td>

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








