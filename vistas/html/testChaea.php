
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
        <a href="#step-2" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">2</a>

    </div>
    <div class="stepwizard-step">
        <a href="#step-3" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">3</a>

    </div>
    <div class="stepwizard-step">
        <a href="#step-4" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">4</a>

    </div>

    <div class="stepwizard-step">
        <a href="#step-5" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">5</a>

    </div>

    <div class="stepwizard-step">
        <a href="#step-6" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">6</a>

    </div>
    <div class="stepwizard-step">
        <a href="#step-7" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">7</a>

    </div>



    <div class="stepwizard-step">
        <a href="#step-8" type="button" id="boton" class="btn btn-default btn-circle" disabled="disabled">8</a>

    </div>

    <style>
       #boton { display : none; }
    </style>



</div>
</div>


<br>


<!--onsubmit="return onSubmit()"-->
<form class="formulario"  action="../../consultas/insertAnswerChaea.php" name="registro" method="post">
    <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <b> <h2> Paso 1</h2></b>
                <div class="form-group">
                    <size=18>
                        <p style = "18">
                    <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                        <li>Este cuestionario ha sido diseñado para identificar su Estilo preferido de Aprendizaje.</li>
                        <li>No es un test de inteligencia, ni de personalidad.</li>
                        <li>No hay límite de tiempo para contestar al cuestionario.</li>
                        <li>No le ocupará más de 15 minutos.</li>
                        <li>No hay respuestas correctas o erróneas. Será útil en la medida que sea sincero/a en sus respuestas.</li>
                        <li>Por favor conteste a todos los ítems, el cuestionario es anónimo.</li>
                    </p>
                </div>
                </div>
                <button class="btn btn-success nextBtn  btn-lg pull-right btn-un" type="button" >INICIAR</button>
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
                        <td><fieldset>
                                <legend><label>Tengo fama de decir lo que pienso claramente y sin rodeos.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="1" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="1" value="0"> No </td>
                        </th>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><fieldset>
                                <legend><label>Estoy seguro(a) de lo que es bueno y lo que es malo, lo que está bien y lo que está mal.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="2" value="1" required> Sí</td>
                        <td><input type="radio" required='required' name="2" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">3</th>
                        <td><fieldset>
                                <legend><label>Muchas veces actúo sin mirar las consecuencias.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="3" value="1" required> Sí</td>
                        <td><input type="radio" required='required'  name="3" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">4</th>
                        <td><fieldset>
                                <legend><label>Creo que los formalismos coartan y limitan la actuación libre de las personas.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="4" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="4" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">5</th>
                        <td><fieldset>
                                <legend><label>Normalmente trato de resolver los problemas metódicamente y paso a paso.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="5" value="1"required> Si</td>
                        <td><input type="radio" required='required' name="5" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">6</th>
                        <td><fieldset>
                                <legend><label>Me interesa saber cuáles son los sistemas de valores de los demás y con qué criterios actúan.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="6" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="6" value="0"> No </td>
                        </th>
                    </tr>



                    <tr>
                        <th scope="row">7</th>
                        <td><fieldset>
                                <legend><label>Pienso que el actuar intuitivamente puede ser siempre tan válido como actuar reflexivamente.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="7" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="7" value="0"> No </td>
                        </th>
                    </tr>




                    <tr>
                        <th scope="row">8</th>
                        <td><fieldset>
                                <legend><label>Creo que lo más importante es que las cosas funcionen.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="8" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="8" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">9</th>
                        <td><fieldset>
                                <legend><label>Procuro estar al tanto de lo que ocurre aquí y ahora. </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="9" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="9" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">10</th>
                        <td><fieldset>
                                <legend><label>Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia.</label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="10" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="10" value="0"> No </td>
                        </th>
                    </tr>




                    <tr>
                        <th scope="row">11</th>
                        <td><fieldset>
                                <legend><label>Estoy a gusto siguiendo un orden, en las comidas, en el estudio, haciendo ejercicio regularmente.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="11" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="11" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">12</th>
                        <td><fieldset>
                                <legend><label>Cuando escucho una nueva idea en seguida comienzo a pensar cómo ponerla en práctica.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="12" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="12" value="0"> No </td>
                        </th>
                    </tr>



                    <tr>
                        <th scope="row">13</th>
                        <td><fieldset>
                                <legend><label>Prefiero las ideas originales y novedosas aunque no sean prácticas.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="13" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="13" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">14</th>
                        <td><fieldset>
                                <legend><label>Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="14" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="14" value="0"> No </td>
                        </th>
                    </tr>


                    <tr>
                        <th scope="row">15</th>
                        <td><fieldset>
                                <legend><label>Normalmente encajo bien con personas reflexivas, analáticas y me cuesta sintonizar con personas demasiado espontáneas, imprevisibles.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="15" value="1"required> Si</td>
                        <td><input type="radio" required='required' name="15" value="0"> No </td>
                        </th>
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
                                <legend><label>Escucho con más frecuencia que hablo.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="16" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="16" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>






                    <tr>
                        <th scope="row">17</th>
                        <td><fieldset>
                                <legend><label>Prefiero las cosas estructuradas a las desordenadas.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="17" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="17" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row">18</th>
                        <td><fieldset>
                                <legend><label>Cuando poseo cualquier información, trato de interpretarla bien antes de manifestar alguna conclusión.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="18" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="18" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">19</th>
                        <td><fieldset>
                                <legend><label> Antes de tomar una decisión estudio con cuidado sus ventajas e inconvenientes.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="19" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="19" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row"> 20</th>
                        <td><fieldset>
                                <legend><label>  Me crezco con el reto de hacer algo nuevo y diferente.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="20" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="20" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row"> 21 </th>
                        <td><fieldset>
                                <legend><label>  Casi siempre procuro ser coherente con mis criterios y sistemas de valores. Tengo principios y los sigo.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="21" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="21" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row"> 22</th>
                        <td><fieldset>
                                <legend><label> Cuando hay una discusión no me gusta ir con rodeos.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="22" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="22" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">23 </th>
                        <td><fieldset>
                                <legend><label> Me disgusta implicarme afectivamente en mi ambiente de trabajo. Prefiero mantener relaciones distantes.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="23" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="23" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">24 </th>
                        <td><fieldset>
                                <legend><label> Me gustan más las personas realistas y concretas que las teóricas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="24" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="24" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row"> 25 </th>
                        <td><fieldset>
                                <legend><label>  Me cuesta ser creativo/a, romper estructuras.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="25" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="25" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">26 </th>
                        <td><fieldset>
                                <legend><label> Me siento a gusto con personas espontáneas y divertidas.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="26" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="26" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 27 </th>
                        <td><fieldset>
                                <legend><label>  La mayoría de las veces expreso abiertamente cómo me siento.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="27" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="27" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 28 </th>
                        <td><fieldset>
                                <legend><label> Me gusta analizar y dar vueltas a las cosas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="28" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="28" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">29</th>
                        <td><fieldset>
                                <legend><label> Me molesta que la gente no se tome en serio las cosas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="29" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="29" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row"> 30 </th>
                        <td><fieldset>
                                <legend><label> Me atrae experimentar y practicar las últimas técnicas y novedades.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="30" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="30" value="0"> No </td>
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
                                <legend><label> Soy cauteloso/a a la hora de sacar conclusiones.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="31" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="31" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row"> 32</th>
                        <td><fieldset>
                                <legend><label> Prefiero contar con el mayor número de fuentes de información. Cuantos más datos reúna para reflexionar, mejor.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="32" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="32" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">33 </th>
                        <td><fieldset>
                                <legend><label>  Tiendo a ser perfeccionista.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="33" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="33" value="0"> No </td>
                        </th>
                    </tr>



                    </tr>
                    <tr>
                        <th scope="row">34 </th>
                        <td><fieldset>
                                <legend><label> Prefiero oír las opiniones de los demás antes de exponer la mía.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="34" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="34" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 35</th>
                        <td><fieldset>
                                <legend><label> Me gusta afrontar la vida espontáneamente y no tener que planificar todo previamente.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="35" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="35" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>







                    <tr>
                        <th scope="row"> 36</th>
                        <td><fieldset>
                                <legend><label>En las discusiones me gusta observar cómo actúan los demás participantes.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="36" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="36" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">37 </th>
                        <td><fieldset>
                                <legend><label>Me siento incómodo con las personas calladas y demasiado analáticas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="37" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="37" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">38 </th>
                        <td><fieldset>
                                <legend><label>Juzgo con frecuencia las ideas de los demás por su valor práctico.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="38" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="38" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 39</th>
                        <td><fieldset>
                                <legend><label> Me agobio si me obligan a acelerar mucho el trabajo para cumplir un plazo.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="39" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="39" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">40 </th>
                        <td><fieldset>
                                <legend><label> En las reuniones apoyo las ideas prácticas y realistas.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="40" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="40" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">41 </th>
                        <td><fieldset>
                                <legend><label>  Es mejor gozar del momento presente que deleitarse pensando en el pasado o en el futuro.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="41" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="41" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 42 </th>
                        <td><fieldset>
                                <legend><label>  Me molestan las personas que siempre desean apresurar las cosas.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="42" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="42" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">43 </th>
                        <td><fieldset>
                                <legend><label> Aporto ideas nuevas y espontáneas en los grupos de discusión.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="43" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="43" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">44 </th>
                        <td><fieldset>
                                <legend><label>  Pienso que son más consistentes las decisiones fundamentadas en un minucioso análisis que las basadas en la intuición.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="44" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="44" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 45</th>
                        <td><fieldset>
                                <legend><label>  Detecto frecuentemente la inconsistencia y puntos débiles en las argumentaciones de los demás.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="45" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="45" value="0"> No </td>
                        </th>
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

    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 5</h3>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>#</th><th>Pregunta</th><th>Respuesta

                        </th>

                    </tr>

                    </thead>

                    <tbody>


                    <tr>
                        <th scope="row">46 </th>
                        <td><fieldset>
                                <legend><label> Creo que es preciso saltarse las normas muchas más veces que cumplirlas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="46" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="46" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">47 </th>
                        <td><fieldset>
                                <legend><label> A menudo caigo en la cuenta de otras formas mejores y más prácticas de hacer las cosas.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="47" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="47" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 48</th>
                        <td><fieldset>
                                <legend><label> En conjunto hablo más que escucho.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="48" value="1"required> Sí </td>
                        <td><input type="radio" required='required' name="48" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">49</th>
                        <td><fieldset>
                                <legend><label>  Prefiero distanciarme de los hechos y observarlos desde otras perspectivas.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="49" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="49" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">50 </th>
                        <td><fieldset>
                                <legend><label> Estoy convencido/a que debe imponerse la lógica y el razonamiento.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="50" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="50" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row">51 </th>
                        <td><fieldset>
                                <legend><label> Me gusta buscar nuevas experiencias.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="51" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="51" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row"> 52</th>
                        <td><fieldset>
                                <legend><label> Me gusta experimentar y aplicar las cosas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="52" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="52" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row"> 53 </th>
                        <td><fieldset>
                                <legend><label> Pienso que debemos llegar pronto al grano, al meollo de los temas.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="53" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="53" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"> 54</th>
                        <td><fieldset>
                                <legend><label> Siempre trato de conseguir conclusiones e ideas claras.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="54" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="54" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">55 </th>
                        <td><fieldset>
                                <legend><label> Prefiero discutir cuestiones concretas y no perder el tiempo con charlas vacías.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="55" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="55" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">56 </th>
                        <td><fieldset>
                                <legend><label>  Me impaciento con las argumentaciones irrelevantes e incoherentes en las reuniones.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="56" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="56" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">57 </th>
                        <td><fieldset>
                                <legend><label> Compruebo antes si las cosas funcionan realmente.   </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="57" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="57" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"> 58</th>
                        <td><fieldset>
                                <legend><label>  Hago varios borradores antes de la redacción definitiva de un trabajo.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="58" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="58" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">59 </th>
                        <td><fieldset>
                                <legend><label> Soy consciente de que en las discusiones ayudo a los demás a mantenerse centrados en el tema, evitando divagaciones.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="59" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="59" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">60 </th>
                        <td><fieldset>
                                <legend><label> Observo que, con frecuencia, soy uno de los más objetivos y desapasionados en las discusiones.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="60" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="60" value="0"> No </td>
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

    <div class="row setup-content" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 6</h3>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>#</th><th>Pregunta</th><th>Respuesta

                        </th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>
                        <th scope="row">61 </th>
                        <td><fieldset>
                                <legend><label> Cuando algo va mal, le quito importancia y trato de hacerlo mejor.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="61" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="61" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">62 </th>
                        <td><fieldset>
                                <legend><label> Rechazo ideas originales y espontáneas si no las veo prácticas.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="62" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="62" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">63 </th>
                        <td><fieldset>
                                <legend><label> Me gusta sopesar diversas alternativas antes de tomar una decisión.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="63" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="63" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">64 </th>
                        <td><fieldset>
                                <legend><label> Con frecuencia miro hacia adelante para prever el futuro.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="64" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="64" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">65 </th>
                        <td><fieldset>
                                <legend><label> En los debates prefiero desempeñar un papel secundario antes que ser el líder o el que más participa.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="65" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="65" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">66 </th>
                        <td><fieldset>
                                <legend><label> Me molestan las personas que no siguen un enfoque lógico.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="66" value="1"required> Si</td>
                        <td><input type="radio" required='required' name="66" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">67 </th>
                        <td><fieldset>
                                <legend><label> Me resulta incómodo tener que planificar y prever las cosas.      </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="67" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="67" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">68 </th>
                        <td><fieldset>
                                <legend><label> Creo que el fin justifica los medios en muchos casos.    </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="68" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="68" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">69 </th>
                        <td><fieldset>
                                <legend><label> Suelo reflexionar sobre los asuntos y problemas.      </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="69" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="69" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">70 </th>
                        <td><fieldset>
                                <legend><label> El trabajar a conciencia me llena de satisfacción y orgullo.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="70" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="70" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">71 </th>
                        <td><fieldset>
                                <legend><label> Ante los acontecimientos trato de descubrir los principios y teorías en que se basan. </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="71" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="71" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">72 </th>
                        <td><fieldset>
                                <legend><label>Con tal de conseguir el objetivo que pretendo soy capaz de herir sentimientos ajenos.  </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="72" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="72" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">73 </th>
                        <td><fieldset>
                                <legend><label> No me importa hacer todo lo necesario para que sea efectivo mi trabajo.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="73" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="73" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>



                    <tr>
                        <th scope="row">74 </th>
                        <td><fieldset>
                                <legend><label> Con frecuencia soy una de las personas que más anima las fiestas.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="74" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="74" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>




                    <tr>
                        <th scope="row">75 </th>
                        <td><fieldset>
                                <legend><label> Me aburro enseguida con el trabajo metódico y minucioso.      </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="75" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="75" value="0"> No </td>
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

    <div class="row setup-content" id="step-7">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Paso 7</h3>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>#</th><th>Pregunta</th><th>Respuesta

                        </th>

                    </tr>

                    </thead>

                    <tbody>


                    <tr>
                        <th scope="row">76 </th>
                        <td><fieldset>
                                <legend><label> La gente con frecuencia cree que soy poco sensible a sus sentimientos.        </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_4" name="76" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="76" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>


                    <tr>
                        <th scope="row">77 </th>
                        <td><fieldset>
                                <legend><label> Suelo dejarme llevar por mis intuiciones.      </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_1" name="77" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="77" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row">78 </th>
                        <td><fieldset>
                                <legend><label> Si trabajo en grupo procuro que se siga un método y un orden.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="78" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="78" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row">79 </th>
                        <td><fieldset>
                                <legend><label> Con frecuencia me interesa averiguar lo que piensa la gente.      </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_2" name="79" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="79" value="0"> No </td>
                        </th>
                    </tr>
                    </tr>

                    <tr>
                        <th scope="row">80 </th>
                        <td><fieldset>
                                <legend><label> Esquivo los temas subjetivos, ambiguos y poco claros.     </label> </td>
                        <th>
                        <td><input type="radio" required='required' ut id="check_3" name="80" value="1"required> Sí</td>
                        <td><input type="radio" required='required' name="80" value="0"> No </td>
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
    <div class="row setup-content" id="step-8">

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
                    REFLEXIVO
                </td>

                <td style="text-align:center; border: black 5px;width: 5%;">
                    TEÓRICO
                </td>

                <td style="text-align:center; border: black 5px;width: 5%;">
                    ACTIVO
                </td>

    </div>
    </tr>
    <tr>


        <td class="activo-si" style="text-align:center;"></td>

        <td class="reflexivo-si" style="text-align:center;"></td>

        <td class="teorico-si" style="text-align:center;"></td>

        <td class="pragmatico-si" style="text-align:center;"></td>


    </tr>
    </table>

    <script type="text/javascript" src="js/valoresChaea.js">

    </script>



    </tbody>

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





