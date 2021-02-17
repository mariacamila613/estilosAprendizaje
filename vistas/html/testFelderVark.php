
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
<form class="formulario"  action="../../consultas/insertAnswerFelderVark.php" name="registro" method="post">
 <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2> Paso 1</h2>
                <size=18>
                <p style = "18">
                <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                    <p>Este cuestionario cuenta con 24 preguntas que tienen como propósito saber algo acerca de sus preferencias sobre cómo trabaja con información. Esto le permitirá identificar su estilo de aprendizaje (visual, lector, auditivo y kinestésico). Escoja las respuestas que mejor explican su preferencia. Seleccione más de una respuesta si una respuesta simple no encaja con su percepción (Preguntas de la 1 a la 13). De la pregunta 14 a la pregunta 24 seleccione una sola respuesta. Deje en blanco toda pregunta que no se aplique. Recuerde que: </p>
                    <li>No es un test de inteligencia, ni de personalidad.</li>
                    <li>No hay límite de tiempo para contestar al Cuestionario. No le ocupará  más de 15 minutos.</li>
                    <li>No hay respuestas correctas o erróneas. Será  útil en la medida que sea sincero/a en sus respuestas.</li>
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
                

                  </thead>

                  <tbody>
  <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        1. Usted está por darle instrucciones a una persona que está junto a usted, esa persona es de fuera, no
                                        conoce la ciudad, esta alojada en un hotel y quedan en encontrarse en otro lugar más tarde. Usted que
                                        haría?
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="1" VALUE="V"> Dibujo un mapa en un papel.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="2" VALUE="A"> Le digo cómo llegar.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="3" VALUE="R"> Le escribo las instrucciones (sin dibujar un mapa).</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="4" VALUE="K"> La busco y recojo en el hotel.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        2. Usted no está seguro como se deletrea la palabra tracendente o trascendente. Que haría usted.
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="5" VALUE="R"> Busco la palabra en un diccionario.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="6" VALUE="V"> Veo la palabra en mi mente y escojo según como la veo</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="7" VALUE="A"> La repito en mi mente.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="8" VALUE="K"> Escribo ambas versiones en un papel y escojo una.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        3. Usted acaba de recibir una copia de un itinerario para un viaje mundial. Esto le interesa a un/a amigo/o.
                                        Usted que haría?
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="9" VALUE="A"> Hablarle por teléfono inmediatamente y contarle del viaje.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="10" VALUE="R"> Enviarle una copia del itinerario impreso.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="11" VALUE="V"> Mostrarle un mapa del mundo.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="12" VALUE="K"> Compartir que planea hacer en cada lugar que visite.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        4. Usted esta por cocinar algo muy especial para su familia. Usted.
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="13" VALUE="K"> Cocina algo familiar que no necesite receta o instrucciones</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="14" VALUE="V"> Da una vista a través de un recetario por ideas de las fotos.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="15" VALUE="R"> Busca un libro de recetas especifico donde hay una buena receta.</td></tr>                                    
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        5. Un grupo de turistas le han sido asignados para que usted les explique del Area Nacional Protegida. Usted,
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="16" VALUE="K"> Organiza un viaje por el lugar.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="17" VALUE="V"> Les muestra fotos y transparencias</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="18" VALUE="R"> Les da un folleto o libro sobre las Areas Nacionales Protegidas.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="19" VALUE="A"> Les da una platica sobre las Areas Nacionales Protegidas.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        6. Usted está por comprarse un nuevo estéreo. Que otro factor, además del precio, influirá su decisión
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="20" VALUE="A"> El vendedor le dice lo que usted quiere saber.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="21" VALUE="R"> Leyendo los detalles sobre el estéreo.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="22" VALUE="K"> Jugando con los controles y escuchándolo.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="23" VALUE="V"> Luce muy bueno y a la moda (padre, cool, chido).</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        7. Recuerde un momento en su vida en que usted aprendió a hacer algo como a jugar un nuevo juego de
                                        cartas. Trate de evitar escoger una destreza física, como andar en bicicleta. Cómo aprendió usted mejor?
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="24" VALUE="V"> Pistas visuales—fotos, diagramas, cuadros...</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="25" VALUE="R"> Instrucciones escritas</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="26" VALUE="A"> Escuchando a alguien que se lo explicaba.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="27" VALUE="K"> Haciéndolo o probándolo.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        8. Si usted tiene un problema en un ojo, usted prefiere que el doctor
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="28" VALUE="A"> Le diga que anda mal.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="29" VALUE="V"> Le muestre un diagrama de que está mal.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="30" VALUE="K"> Use un modelo para enseñarle qué está mal.</td></tr>                                    
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        9. Usted está apunto de aprender un nuevo programa en la computadora. Usted,
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="31" VALUE="K"> Se sienta frente al teclado y empieza a experimentar con el programa.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="32" VALUE="R"> Lee el manual que viene con el programa.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="33" VALUE="A"> Telefonea a un amigo y le hace preguntas sobre el programa.</td></tr>                                      
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        10. Usted va en su coche, a otra ciudad, en donde tiene amigos que quiere visitar. Usted quisiera que ellos:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="34" VALUE="V"> Le dibujen un mapa en un papel.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="35" VALUE="A"> Le den las instrucciones para llegar.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="36" VALUE="R"> Escriban las instrucciones (sin el mapa)</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="37" VALUE="K"> Lo esperen a usted en la gasolinera de la entrada a la ciudad.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        11. Aparte del precio, que influirá más su decisión de compra de un libro de texto particular?
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="38" VALUE="K"> Usted ha usado una copia antes.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="39" VALUE="A"> Un amigo le ha platicado acerca del libro.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="40" VALUE="R"> Una lectura rápida de algunas partes del libro.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="41" VALUE="V"> El diseño de la pasta del libro es atractiva.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        12. Una nueva película ha llegado a los cines de la ciudad. Que influirá mas en la decisión de ir al cine o
                                        no—asumiendo que tiene el dinero para los boletos---
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="42" VALUE="A"> Usted oyó en el radio acerca de la película</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="43" VALUE="R"> Usted Leyó una reseña de la película.</td></tr>                  
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="44" VALUE="V"> Usted vió una reseña en la televisión o en el cine.</td></tr>                                      
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        13. Usted prefiere que un profesor/maestro o conferencista use:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="45" VALUE="R"> Un libro de texto, copias, lecturas.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="46" VALUE="V"> Un diagrama de flujo, cuadros, gráficos, dispositivas.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="47" VALUE="K"> Sesiones prácticas, laboratorio, visitas, viajes de campo.</td></tr>                
                                <tr><td ><INPUT TYPE=CHECKBOX NAME="48" VALUE="A"> Preguntas y respuestas, charlas, grupos de discusión u oradores invitados</td></tr>        


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
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        14. Tengo tendencia a:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="49" VALUE="S"> Entender los detalles de un tema pero no ver claramente su estructura completa.</td></tr>                
                                <tr><td ><INPUT TYPE=RADIO NAME="49" VALUE="G"> Entender la estructura completa pero no ver claramente los detalles.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        15. Una vez que entiendo:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="50" VALUE="G"> Todas las partes, entiendo el total.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="50" VALUE="S"> El total de algo, entiendo como encajan sus partes.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        16. Cuando resuelvo problemas de matemáticas:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="51" VALUE="S"> Generalmente trabajo sobre las soluciones con un paso a la vez.</td></tr>                
                                <tr><td ><INPUT TYPE=RADIO NAME="51" VALUE="G"> Frecuentemente sé cuales son las soluciones, pero luego tengo dificultad  para imaginarme los pasos para llegar a ellas.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        17. Cuando estoy analizando un cuento o una novela:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="52" VALUE="G"> Pienso en los incidentes y trato de acomodarlos para configurar los temas.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="52" VALUE="S"> Me doy cuenta de cuales son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        18. Es más importante para mí que un profesor:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="53" VALUE="S"> Exponga el material en pasos secuenciales claros.</td></tr>                
                                <tr><td ><INPUT TYPE=RADIO NAME="53" VALUE="G"> Me dé un panorama general y relacione el material con otros temas.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        19. Aprendo:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="54" VALUE="S"> A un paso constante. Si estudio con ahínco consigo lo que deseo.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="54" VALUE="G"> En inicios y pausas. Me llego a confundir y súbitamente lo entiendo.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        20. Cuando me enfrento a un cuerpo de información:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="55" VALUE="S"> Me concentro en los detalles y pierdo de vista el total de la misma.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="55" VALUE="G"> Trato de entender el todo antes de ir a los detalles.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        21. Cuando escribo un trabajo, es más probable que:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="56" VALUE="G">  Lo haga (piense o escriba) desde el principio y avance.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="56" VALUE="S">  Lo haga (piense o escriba) en diferentes partes y luego las ordene.</td></tr>                  
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        22. Cuando estoy aprendiendo un tema, prefiero:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="57" VALUE="S"> Mantenerme concentrado en ese tema, aprendiendo lo más que pueda de él.</td></tr>                
                                <tr><td ><INPUT TYPE=RADIO NAME="57" VALUE="G"> Hacer conexiones entre ese tema y temas relacionados.</td></tr>                
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        23. Algunos profesores inician sus clases haciendo un bosquejo de lo que enseñarán. Esos bosquejos son:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="58" VALUE="S"> Algo útiles para mí.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="58" VALUE="G"> Muy útiles para mí.</td></tr>                
                                <tr>
                                <tr>
                                <tr><td>&nbsp;</td></tr>                  
                                <tr>
                                    <td class="storytitle">
                                        24. Cuando resuelvo problemas en grupo, es más probable que yo:
                                    </td>
                                </tr>        
                                <tr><td ><INPUT TYPE=RADIO NAME="59" VALUE="S"> Piense en los pasos para la solución de los problemas.</td></tr>                  
                                <tr><td ><INPUT TYPE=RADIO NAME="59" VALUE="G"> Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos.</td></tr>                



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



<!-- <div class="col-md-2 offset-md-4">
<tr>
  <td style="text-align:center; border: black 5px;width: 5%;"> VISUAL </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> AUDITIVO </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> LECTOR/ESCRITOR </td>

  <td style="text-align:center; border: black 5px;width: 5%;"> KINESTÉSICO </td>

 </div>
 </tr>



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








