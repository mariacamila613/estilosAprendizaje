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


<p>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div style="border:1px solid;">
          <h3 style="text-align: center;">Test Chaea</h3>
          <p style="text-align: justify;">Evaluar los estilos de aprendizaje Activo, Reflexivo, Teórico y Pragmático como estrategia para adecuaciones en la planificaciones didácticas de las asignaturas.
          </p>
          <img src="images/test.png" style="width: 150px; position: relative; left: 35%;">
        </div>
      </div>

      <div class="col-sm-6" style="border:1px solid;">
       <h3 style="text-align: center;">Test Chaea Junior
       </h3>
       <p style="text-align: justify;">En definitiva, el CHAEA-Junior es un cuestionario basado en un modelo de aprendizaje por la experiencia orientado a la mejora académica.
       </p>
       <img src="images/chaea.png" style="width: 150px; position: relative; left: 35%;">
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
