 <?php
include ("head.php");
include("nav.php");

 ?>


  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> <br> <br>


<div class="login">

      <form action="../../consultas/login.php" method="post" name="inicioSesion">
        <div class="form-group">
        <div class="row">
          <div class="col-md-2 offset-md-4">
            <label for="uname"><b>Usuario: </b></label>    <br>    <br>   
              <label for="psw"><b>Contraseña: </b></label>
              <br>
         </div>
          <div class="col-md-2">
<input type="text" name="uname" id="uname" placeholder="Escriba su usuario"><br>    <br>
<input type="password" name="psw" id="psw" placeholder="Escriba su contraseña" required><br>
  <label class="form-check-label">
    

    <br>    <br>   
     <div class="col-md-2 offset-md-2">
    <button type="submit" class="boton">Iniciar Sesión</button>
</div>

      
      <!--MENSAJE EN CASO DE QUE LOS DATOS INGRESADOS NO SEAN CORRECTOS-->
           <?php
           include("../../consultas/mensajeError.php");
           ?>

         <label>¿Aún no estás registrado? <br><a href="registro.php" class="registro">Registrarse</a> </label>
      <br> 
        <label><br><a href="recuperaContraseña.php" class="pass">¿Olvidaste la contraseña?</a> </label>
    
      <style type="text/css">
            
          .registro{

            color: green;
              position: absolute;
              left: 50px;
              right: 100px;
          }
          .pass{
            color: green;
          }

          </style>
       
       </form>
    <br>    <br>
</div>
      <br>    <br>   </div>
      <br>    <br>
      </div>
      <br>    <br>


      </div>


      <br>    <br>



      <p>
<div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3>Test Chaea</h3>
            <p>Evaluar los estilos de aprendizaje Activo, Reflexivo, Teórico y Pragmático como estrategia para adecuaciones en la planificaciones didácticas de las asignaturas. </p>
         
          </div>
          <div class="col-sm-4">
          
     
          </div>
          <div class="col-sm-4">
         <h3>Test Chaea Junior</h3>
            <p>En definitiva, el CHAEA-Junior es un cuestionario basado en un modelo de aprendizaje por la experiencia orientado a la mejora académica.</p>
         
          </div>
        </div>
      </div>



  </p>
</div>
  
<style>
  
.boton{
  width: 70px;
  height: 40px;
}

</style>
<!----------------------------------------------------->


  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>
