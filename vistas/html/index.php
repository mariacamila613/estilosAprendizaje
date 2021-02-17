 <?php
 include ("head.php");
 include("nav.php");
 ?>

 <link rel="stylesheet" type="text/css" href="css/unal.css">

 <main class="detalle">
  <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>

  <div class="login">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="container">
      <div class="card card-container" id="divLogin">
        <h1 class="header-sesion">Iniciar sesión</h1>
        <form class="form-signin" method="post" action="../../consultas/login.php">
          <span id="reauth-email" class="reauth-email"></span>
          <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="psw">
          <button class="btn" style="background-color: #1c4bd4; color:white;" type="submit">Iniciar sesión</button>
        </form><!-- /form -->

        <a href="recuperaContraseña.php" style="color:#1c4bd4;" class="forgot-password enlace" id="enlace">
          ¿Olvidó la contraseña?
        </a>  <a href="registro.php" style="color:#1c4bd4;" class="forgot-password enlace" id="enlace">
          Registrarse
        </a>


      </div><!-- /card-container -->
    </div><!-- /container -->


  </div>
  <?php
  include("../../consultas/mensajeError.php");
  ?>


</form>
</div>



  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div style="border:2px solid;">
          <h3 style="text-align: center;">Test Chaea</h3>
          <p style="text-align: center;">El Cuestionario Honey Alonso de Estilos de Aprendizaje (CHAEA) es un instrumento para diagnosticar los estilos de aprendizaje. Inscrito dentro de los enfoques cognitivos del aprendizaje. El objetivo principal es evaluar los estilos de aprendizaje Activo, Reflexivo, Teórico y Pragmático como estrategia para adecuaciones en la planificaciones didácticas de las asignaturas.</p>
          <img src="images/test.png" style="width: 120px; position: relative; left: 35%;">
        </div>
      </div>


      <div class="col-sm-6">
        <div style="border:2px solid;">
          
          <h3 style="text-align: center;">Test Chaea Junior </h3>
          <p style="text-align: center;">El CHAEA-Junior es un cuestionario basado en un modelo de aprendizaje por la experiencia orientado a la mejora académica. Se caracteriza por su usabilidad, sencillez, rapidez de aplicación y para proporcionar un instrumento, con suficiente validez y fiabilidad que diagnostique los Estilos de Aprendizaje</p>
          <br>
          <img src="images/test.png" style="width: 120px; position: relative; left: 35%;">
        </div>
        <br>
      </div>






  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div style="border:2px solid;">
          <h3 style="text-align: center;">Test Felder</h3>
          <p style="text-align: center;">Para diagnosticar el estilo de aprendizaje de un estudiante, de acuerdo al modelo de Felder, se emplea el Cuestionario sobre el Índice de Estilos de Aprendizaje de Felder (1984), contentivo de 11 preguntas para cada dimensión (procesamiento, percepción, entrada, comprensión). Las dos posibles respuestas (a y b) de cada pregunta, determinan el valor de cada dimensión (activo/reflexivo, sensorial/intuitiva, visual/verbal, secuencial/global). 
          </p>
          <img src="images/test.png" style="width: 120px; position: relative; left: 35%;">
        </div>
      </div>


      <div class="col-sm-6">
        <div style="border:2px solid;">
          
          <h3 style="text-align: center;">Test Vark </h3>
          <p style="text-align: center;">Este cuestionario tiene como propósito ayudarle a conocer cómo trabaja con la información y cuál es su estilo de aprendizaje preferido para captar, procesar y proporcionar ideas e información. Los diferentes estilos que se manejan en este cuestionario son: Visual, Auditivo, Lecto-escritor, Kinestésico. Básicamente usted podrá identificar y hacer conscientes sus preferencias sensoriales de manera que identifique situaciones de aprendizaje que pueda aprovechar a su favor. </p>
          <img src="images/test.png" style="width: 120px; position: relative; left: 35%;">
        </div>
         <br>
      </div>




  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div style="border:2px solid;">
          <h3 style="text-align: center;">Test VARK-FSLSM</h3>
          <p style="text-align: center;">Este cuestionario cuenta con 24 preguntas que tienen como propósito saber algo acerca de sus preferencias sobre cómo trabaja con información. Esto le permitirá identificar su estilo de aprendizaje (visual, lector, auditivo y kinestésico).
          </p>
          <img src="images/test.png" style="width: 120px; position: relative; left: 35%;">
        </div>
      </div>


      <div class="col-sm-6">
        <div style="border:2px solid;">
          
          <h3 style="text-align: center;">Cuestionario </h3>
          <p style="text-align: center;">El proceso enseñanza-aprendizaje es sumamente complejo ya que intervienen diferentes elementos, que no solo están sujetos al quehacer del docente y del alumno, aunque estos sean los principales actores. En este cuestionario existen 3 preguntas para evaluar los tipos de actividades de su preferencia.</p>
          <img src="images/cuestionario.png" style="width: 130px; position: relative; left: 35%;">
        </div>
         <br>
      </div>







     </div>
   </div>
 </div>
</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>
