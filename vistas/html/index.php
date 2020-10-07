 <?php
include ("head.php");
include("nav.php");


 ?>

<link rel="stylesheet" type="text/css" href="css/unal.css">

  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
      <br><br><br><br>
        <div class="login">
          <form action="../../consultas/login.php" method="post" name="inicioSesion">
            <div class="row">
              <div class="col-md-2 offset-md-4">
                <label for="email"><b>Correo electrónico: </b></label>
                <br><br>
                <label for="psw"><b>Contraseña: </b></label>
                <br><br>
              </div>
            <div class="col-md-2">
            <input type="email" name="email" id="email" placeholder="Escriba su correo">
            <br><br>
            <input type="password" name="psw" id="psw" placeholder="Escriba su contraseña" required><br>
            <label class="form-check-label">
            <br><br>
          <div class="col-md-2 offset-md-2">
            <button type="submit" class="boton">Iniciar Sesión</button>
            <br><br>
          </div>
             <?php
               include("../../consultas/mensajeError.php");
             ?>
              <a href="recuperaContraseña.php" class="pass" >Recuperar contraseña</a>
              <br>
              <a href="registro.php" class="registro" >Registrarse</a>
              <br><br><br>
         </form>
    </div>


<p>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3 style="text-align: center;">Test Chaea
        </h3>
          <p style="text-align: justify;">Evaluar los estilos de aprendizaje Activo, Reflexivo, Teórico y Pragmático como estrategia para adecuaciones en la planificaciones didácticas de las asignaturas.
          </p>
            <img src="images/test.png" style="width: 150px; position: relative; left: 20%;">
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
         <h3 style="text-align: center;">Test Chaea Junior
         </h3>
            <p style="text-align: justify;">En definitiva, el CHAEA-Junior es un cuestionario basado en un modelo de aprendizaje por la experiencia orientado a la mejora académica.
            </p>
             <img src="images/chaea.png" style="width: 150px; position: relative; left: 20%;">
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
