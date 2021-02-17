
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

       <!--  <div class="stepwizard-step">
            <a href="#step-3" type="button"   id="boton" class="btn btn-default btn-circle" disabled="disabled">3
            </a>

        </div>

        <div class="stepwizard-step">
            <a href="#step-4" type="button"  id="boton" class="btn btn-default btn-circle" disabled="disabled">4</a>

        </div> -->

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
<form class="formulario"  action="../../consultas/insertAnswerCuestionario.php" name="registro" method="post">
 <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2> Paso 1</h2>
                <size=18>
                <p style = "18">
                <div class="form-group" style = "line-height: 2em; font-size: 12pt">
                   <p>El proceso enseñanza-aprendizaje es sumamente complejo ya que intervienen diferentes elementos, que no solo están sujetos al quehacer del docente y del alumno, aunque estos sean los principales actores. En este cuestionario existen 3 preguntas para evaluar los tipos de actividades de su preferencia.</p>
                   
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
                <h2> Paso 2</h2>
                <br><br><br>
                <size=18>
                <p style = "18">
            




 
<tr>
  

    <label class="etiquetas" for="name" form="name"><h3>1. ¿Qué tipo de actividades usa con mayor frecuencia para desarrollar una tarea propuesta?</h3></label><br>
    <textarea id=respuesta name="respuesta1" rows="5" cols="50"></textarea>
    <br><br><br>


</tr>



                <size=18>
                <p style = "18">

<tr>

    <label class="etiquetas" for="name" form="name"><h3>2.  Qué tipo de actividades prefiere para realizar una tarea propuesta:</h3></label>
    <br>
 <h5>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Cuadro Sinóptico"> Cuadro Sinóptico
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Cuadro Comparativo"> Cuadro Comparativo
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Reflexión crítica sobre artículo o texto breve encontrado"> Reflexión crítica sobre artículo o texto breve encontrado
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Resumen Analítico"> Resumen Analítico
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Exponer detalladamente una aplicación simple sobre conceptos o temática "> Exponer detalladamente una aplicación simple sobre conceptos o temática 
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Construir una presentación sobre la temática que sintetice lo más importante"> Construir una presentación sobre la temática que sintetice lo más importante
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value=" Aplicación práctica (Desarrollo) de la temática"> Aplicación práctica (Desarrollo) de la temática
    <br><br>
    <input type="checkbox" name="checkbox[]" id="checkbox" value="Mapa Mental o Conceptual "> Mapa Mental o Conceptual 
    <br><br>
    <p>Otra. ¿Cuál? <input   style="width: 200px;" id="otra" type="text" name="9"></p>
    <br><br>

</h5>
</tr>

          <size=18>
          <p style = "18">
<tr>

    <label class="etiquetas" for="name" form="name"><h3>3.  Qué tipo de actividades usa menos para realizar una tarea propuesta:</h3></label>
    <br>

 <h5>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Cuadro Sinóptico"> Cuadro Sinóptico
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Cuadro Comparativo"> Cuadro Comparativo
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Reflexión crítica sobre artículo o texto breve encontrado"> Reflexión crítica sobre artículo o texto breve encontrado
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Resumen Analítico"> Resumen Analítico
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Exponer detalladamente una aplicación simple sobre conceptos o temática "> Exponer detalladamente una aplicación simple sobre conceptos o temática 
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Construir una presentación sobre la temática que sintetice lo más importante"> Construir una presentación sobre la temática que sintetice lo más importante
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value=" Aplicación práctica (Desarrollo) de la temática"> Aplicación práctica (Desarrollo) de la temática
    <br><br>
    <input type="checkbox" name="checkbox3[]" id="checkbox3" value="Mapa Mental o Conceptual "> Mapa Mental o Conceptual 
    <br><br>
    <br><br>
  
</h5>
</tr>


          
                  </div>
                <button class="btn btn-success nextBtn btn-lg pull-right btn-un" type="button" id="next1" style="position: absolute;left: 33%">Siguiente</button>
             <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1"style="position: absolute;left: 60%" >Atrás</button>
            </div>
        </div>
    </div>
      
         


     <!-- *******************************************************************************************************  -->

    <div class="row setup-content" id="step-5">
      <br> <br> <br> <br>
      <div class="col-md-4 offset-md-4"><center> <h4> ¿Está seguro que desea continuar? </h4></center></div>
            
                <table class="table table-striped table-hover ">
                  

                  

                </table>


            <div class="col-md-2 offset-md-4">
            <div style="text-align: center;">
            <div class="d-flex center-content-center">
                <button class="btn btn-success nextBtn btn-lg pull-right  btn-un"  type="submit" style="position: absolute;right: -10%; ">Finalizar</button>
                <button class="btn btn-success backBtn btn-lg pull-right btn-un" type="button" id="next-1" style="position: absolute;right: -60%; " >Atrás</button>
            </div>
        </div>


  <!-- *******************************************************************************************************  -->



</form>

</main>
</div>








