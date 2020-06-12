
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
<form class="formulario"  action="../../consultas/insertAnswerChaeaJunior.php" name="registro" method="post">
 <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2> Paso 1</h2>
                <size=18>
                <p style = "18">
                <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                    <li>Este cuestionario ha sido diseñado para identificar su Estilo preferido de Aprendizaje. </li>
                    <li>No es un test de inteligencia, ni de personalidad.</li>
                    <li>No hay límite de tiempo para contestar al Cuestionario. No le ocupará  más de 15 minutos.</li>
                    <li>No hay respuestas correctas o erróneas. Será  útil en la medida que sea sincero/a en sus respuestas.</li>
                    <li>Por favor conteste a todos los ítems. </li>
                    <li>El Cuestionario es anónimo.</li>
                    <li>Seleccione el test que desea realizar.</li>
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

  <label for="1"> ﻿La gente que me conoce opina de mí que digo las cosas tal y como las pienso.  </label> </td>

    <td><input type="radio" ut id="check_10" name="1"  value="1"required> Sí</td>
    <td><input type="radio"  ut id="check_8" name="1" value="0"> No </td>
        </legend>
  </fieldset>

</tr>

<tr>
  <th scope="row">2</th>
  <td> <fieldset>
          <legend>
      <label>Distingo claramente lo bueno de lo malo, lo que está bien y lo que está mal. </label> </td>

    <td><input type="radio" ut id="check_11" name="2" value="1" required  > Sí</td>
    <td><input type="radio" ut id="check_6" name="2" value="0"  > No </td>

</tr>


<tr>
  <th scope="row">3</th>
  <td>
      <fieldset>
          <legend>
              <label>Muchas veces actúo sin mirar las consecuencias.</label> </td>

    <td><input type="radio" name="3" ut id="check_1" value="1" required> Sí</td>
    <td><input type="radio" name="3" ut id="check_2" value="0" > No </td>

</tr>


<tr>
  <th scope="row">4</th>
  <td>
      <fieldset>
          <legend>
              <label>Me interesa saber cómo piensan los demás y por qué motivos actúan.</label> </td>

    <td><input type="radio" ut id="check_11" name="4" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_6" name="4" value="0" > No </td>

</tr>


<tr>
  <th scope="row">5</th>
  <td><fieldset>
          <legend><label>Valoro mucho cuando me hacen un regalo que sea de gran utilidad.  </label> </td>

    <td><input type="radio" ut id="check_12" name="5"   value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="5"   value="0" > No </td>

</tr>


<tr>
  <th scope="row">6</th>
  <td><fieldset>
          <legend><label>Procuro enterarme de lo que ocurre en donde estoy.  </label> </td>

    <td><input type="radio" ut id="check_1" name="6" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_2" name="6" value="0" > No </td>

</tr>



<tr>
  <th scope="row">7</th>
  <td><fieldset>
          <legend><label>Disfruto si tengo tiempo para preparar mi trabajo y hacerlo lo mejor posible.  </label> </td>

    <td><input type="radio" ut id="check_12"  name="7" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4"  name="7" value="0" > No </td>

</tr>




<tr>
  <th scope="row">8</th>
  <td><fieldset>
          <legend><label>Me gusta seguir un orden, en las comidas, en los estudios y hacer ejercicio físico con regularidad.</label> </td>

    <td><input type="radio" ut id="check_11" name="8" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_6" name="8" value="0" > No </td>

</tr>


<tr>
  <th scope="row">9</th>
  <td><fieldset>
          <legend><label>Prefiero las ideas originales y novedosas aunque no sean muy prácticas. </label> </td>

    <td><input type="radio"  ut id="check_1" name="9" value="1" required> Sí</td>
    <td><input type="radio"  ut id="check_2" name="9" value="0" > No </td>
</tr>


<tr>
  <th scope="row">10</th>
  <td><fieldset>
          <legend><label>Acepto y me ajusto a las normas sólo si sirven para lograr lo que me gusta.</label> </td>

    <td><input type="radio" id="check_10" name="10" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_8" name="10" value="0" > No </td>

</tr>




<tr>
  <th scope="row">11</th>
  <td><fieldset>
          <legend><label>Escucho más que hablo.  </label> </td>

    <td><input type="radio" ut id="check_12" name="11" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="11" value="0" > No </td>

</tr>


<tr>
  <th scope="row">12</th>
  <td><fieldset>
          <legend><label>En mi cuarto tengo generalmente las cosas ordenadas, pues no soporto el desorden. </label> </td>

    <td><input type="radio" ut id="check_11" name="12" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_6" name="12" value="0" > No </td>

</tr>



<tr>
  <th scope="row">13</th>
  <td><fieldset>
          <legend><label>Antes de hacer algo estudio con cuidado sus ventajas e inconvenientes.   </label> </td>

    <td><input type="radio" ut id="check_12"   name="13" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="13" value="0" > No </td>

</tr>


<tr>
  <th scope="row">14</th>
  <td><fieldset>
          <legend><label>En las actividades escolares pongo más interés cuando hago algo nuevo y diferente.     </label> </td>

    <td><input type="radio" ut id="check_11" name="14" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_6" name="14" value="0" > No </td>

</tr>


<tr>
  <th scope="row">15</th>
  <td><fieldset>
          <legend><label>En una discusión me gusta decir claramente lo que pienso.     </label> </td>

    <td><input type="radio" ut id="check_10" name="15" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_8" name="15" value="0"> No </td>

</tr>
    </tr>


                       </tbody>
                      </table>
                  </div>
                <button class="btn btn-success nextBtn btn-lg pull-right btn-un" type="button" id="next1" >Siguiente</button>
             <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" >Atrás</button>
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
          <legend><label>Si juego, dejo los sentimientos por mis amigos a un lado, pues en el juego es importante ganar. </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="16" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_2" name="16" value="0" > No </td>
  </th>
</tr>
    </tr>






<tr>
  <th scope="row">17</th>
  <td><fieldset>
          <legend><label>Me siento a gusto con las personas espontáneas y divertidas aunque a veces me den problemas. </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="17" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_2" name="17" value="0" > No </td>
  </th>
</tr>
    </tr>

<tr>
  <th scope="row">18</th>
  <td><fieldset>
          <legend><label>Expreso abiertamente como me siento.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="18" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_8" name="18" value="0" > No </td>
  </th>
</tr>
    </tr>




<tr>
  <th scope="row">19</th>
  <td><fieldset>
          <legend><label> En las reuniones y fiestas suelo ser el más divertido.    </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="19" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_8" name="19" value="0" > No </td>
  </th>
</tr>
    </tr>


  <tr>
  <th scope="row"> 20</th>
  <td><fieldset>
          <legend><label>  Me gusta analizar y dar vueltas a las cosas para lograr su solución.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_12"  name="20" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_4" name="20" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 21 </th>
  <td><fieldset>
          <legend><label> Prefiero las ideas que sirven para algo ay que se puedan realizar a soñar o fantasear.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="21" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_8" name="21" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 22</th>
  <td><fieldset>
          <legend><label> Tengo cuidado y pienso las cosas antes de sacar conclusiones. </label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="22" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="22" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">23 </th>
  <td><fieldset>
          <legend><label> Intento hacer las cosas para que me queden perfectas.</label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="23" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_6" name="23" value="0" > No </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">24 </th>
  <td><fieldset>
          <legend><label> Prefiero oír las opiniones de los demás antes de exponer la mía.    </label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="24" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_4" name="24" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 25 </th>
  <td><fieldset>
          <legend><label>  En las discusiones me gusta observar como actúan los demás participantes.  </label> </td>
  <th>
        <td><input type="radio" ut id="check_10" name="25" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_8" name="25" value="0"> No </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">26 </th>
  <td><fieldset>
          <legend><label> Me disgusta estar con personas calladas y que piensan mucho todas las cosas.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="26" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_2" name="26" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 27 </th>
  <td><fieldset>
          <legend><label>  Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="27" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_2" name="27" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 28 </th>
  <td><fieldset>
          <legend><label> Doy ideas nuevas y espontáneas en los trabajos en grupo.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="28" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="28" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">29</th>
  <td><fieldset>
          <legend><label>  La mayoría de las veces creo que es preciso saltarse las normas más que cumplirlas.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="29" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_2" name="29" value="0" > No </td>
  </th>
</tr>
    </tr>

    <tr>
  <th scope="row"> 30 </th>
  <td><fieldset>
          <legend><label> Cuando estoy con mis amigos hablo más que escucho.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="30" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_2" name="30" value="0" > No </td>
  </th>
</tr>
    </tr>


                 </tbody>

                </table>

                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un" type="button" id="nexti2" >Siguiente</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" >Atrás</button>
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
          <legend><label> Creo que, siempre, deben hacerse las cosas con lógica y de forma razonada.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="31" value="1" required > Sí</td>
    <td><input type="radio" ut id="check_6" name="31" value="0" > No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row"> 32</th>
  <td><fieldset>
          <legend><label> Me ponen nervioso/a aquellos que dicen cosas poco importantes o sin sentido.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="32" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_6" name="32" value="0" > No </td>
  </th>
</tr>
    </tr>


    <tr>
  <th scope="row">33 </th>
  <td><fieldset>
          <legend><label>  Me gusta comprobar que las cosas funcionan realmente. </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="33" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_8" name="33" value="0"> No </td>
  </th>
</tr>



    </tr>
    <tr>
  <th scope="row">34 </th>
  <td><fieldset>
          <legend><label> Rechazo las ideas originales y espontáneas si veo que no sirven para algo práctico.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="34" value="1"required> Sí</td>
    <td><input type="radio"ut id="check_8" name="34" value="0"> No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 35</th>
  <td><fieldset>
          <legend><label>Con frecuencia pienso en las consecuencias de mis actos para prever el futuro.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="35" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_6"  name="35" value="0" > No </td>
  </th>
</tr>
    </tr>







     <tr>
  <th scope="row"> 36</th>
  <td><fieldset>
          <legend><label>En muchas ocasiones, si se desea algo, no importa lo que se haga para conseguirlo.   </label> </td>
  <th>
    <td><input type="radio"  ut id="check_10" name="36" value="1"required> Sí</td>
    <td><input type="radio" ut id="check_8" name="36" value="0"> No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">37 </th>
  <td><fieldset>
          <legend><label>Me molestan los compañeros y personas que hacen las cosas a lo loco. </label> </td>
  <th>
    <td><input type="radio" ut id="check_11" name="37" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_6" name="37" value="0" > No </td>
  </th>
</tr>
    </tr>
    <tr>
  <th scope="row">38 </th>
  <td><fieldset>
          <legend><label>Suelo reflexionar sobre los asuntos y problemas.</label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="38" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="38" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 39</th>
  <td><fieldset>
          <legend><label> Con frecuencia soy una de las personas que más animan las fiestas.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="39" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_2" name="39" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row">40 </th>
  <td><fieldset>
          <legend><label> Los que me conocen suelen pensar que soy poco sensible a sus sentimientos.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_10" name="40" value="1"  required> Sí</td>
    <td><input type="radio" ut id="check_8" name="40" value="0"> No </td>
  </th>
</tr>
    </tr>



    <tr>
  <th scope="row">41 </th>
  <td><fieldset>
          <legend><label>  Me cuesta mucho planificar mis tareas y preparar con tiempo mis exámenes.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_1" name="41" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_2" name="41" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row"> 42 </th>
  <td><fieldset>
          <legend><label>  Cuando trabajo en grupo me interesa saber lo que opinan los demás.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="42" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="42" value="0" > No </td>
  </th>
</tr>
    </tr>
    <tr>
  <th scope="row">43 </th>
  <td><fieldset>
          <legend><label> Me molesta que la gente no se tome las cosas en serio.   </label> </td>
  <th>
    <td><input type="radio" ut id="check_11"  name="43" value="1" required> Sí</td>
    <td><input type="radio" ut id="check_6" name="43" value="0" > No </td>
  </th>
</tr>
    </tr>




    <tr>
  <th scope="row">44 </th>
  <td><fieldset>
          <legend><label> A menudo me doy cuenta de otras formas mejores de hacer las cosas.  </label> </td>
  <th>
    <td><input type="radio" ut id="check_12" name="44" value="1"required > Sí</td>
    <td><input type="radio" ut id="check_4" name="44" value="0" > No </td>
  </th>
</tr>
    </tr>


                 </tbody>

                </table>

                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un" type="button" id="" >Siguiente</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" >Atrás</button>
            </div>
        </div>
    </div>


  <!-- *******************************************************************************************************  -->


 <br> <br> <br>
    <div class="row setup-content" id="step-5">

              <br> <br> <br> <br>
               <div class="col-md-5 offset-md-5"> <h3> RESULTADOS DEL TEST</h3></div>

                <table class="table table-striped table-hover ">




                        <thead>
                          <tr>

                          </tr>
                        </thead>
                        <tbody>
                      <tr>



  <div class="col-md-2 offset-md-4">
<tr>
  <td style="text-align:center; border: black 5px;width: 5%;">
    PRAGMÁTICO
  </td>

   <td style="text-align:center; border: black 5px;width: 5%;">
    TEÓRICO
  </td>

  <td style="text-align:center; border: black 5px;width: 5%;">
      REFLEXIVO
  </td>

<td style="text-align:center; border: black 5px;width: 5%;">
    ACTIVO
  </td>

</div>
 </tr>
 <tr>
     <td  class="activo-s" style="text-align:center;"></td>

 <td class="reflexivo-s" style="text-align:center;"></td>

  <td class="teorico-s" style="text-align:center;"></td>

  <td class="pragmatico-s" style="text-align:center;"></td>

 </tr>
</table>


             </tbody>

                </table>

    <script type="text/javascript" src="js/valoresChaea.js">

    </script>

    </table>

    <div class="col-md-2 offset-md-4">
        <div style="text-align: center;">
            <div class="d-flex justify-content-center">
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








