
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]> <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]> <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9]> <html class="ie9 oldie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html  lang="es">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <!--
  =============================================================================
  === PLANTILLA DESARROLLADA POR LA OFICINA DE MEDIOS DIGITALES - UNIMEDIOS ===
  =============================================================================
  -->

  <!-- base href="http://subdominio.unal.edu.co/" -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

  <meta name="revisit-after" content="1 hour">
  <meta name="distribution" content="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
  <meta name="expires" content="1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="all">

  <link rel="stylesheet" type="text/css" href="css/frontend.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/accesibilidad.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/unal.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/base.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/tablet.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/phone.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/small.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/printer.css" media="print">

  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/unal.js" type="text/javascript"></script>
  <script src="js/accesibilidad.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]><script src="js/html5shiv.js"
  type="text/javascript"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"
  type="text/javascript"></script><![endif]-->

  <title>Estilos de Aprendizaje</title>




<!-- defaultpanel -->

<!-- Panel de accesibilidad -->
<div class="tx-unal-accesibilidad">
  <!-- defaultpanel -->
  <div
    id="panel-accesibilidad"
    style="display:none"
    class="panel-content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 ">
            <br><h4>Tamaño letra</h4>
            <button
              class="boton-panel"
              id="letra-disminuir"
              onclick="cambiarTamanioLetra('-')"
              type="submit"
              name=""
              value="">A<sup>-</sup>
            </button>
            <button
              class="boton-panel"
              id="letra-aumentar"
              onclick="cambiarTamanioLetra('+')"
              type="submit"
              name=""
              value="">
              A<sup>+</sup>
            </button>
            <br>
           <label> Tamaño <br><input
              disabled="1"
              class="letras-porcentaje"
              id="letter-percent"
              type="text"
              name=""
              value="100%"></label>
          </div>
          <div class="col-md-3 ">
            <h4>Cambiar Contrastes</h4>
            <button
              class="boton-panel"
              id="contraste-1"
              onclick="cambiarContrastes(1)"
              type="submit"
              name=""
              value="">1
            </button>
            <button
              class="boton-panel"
              id="contraste-2"
              onclick="cambiarContrastes(2)"
              type="submit"
              name=""
              value="">2
            </button>
            <button
              class="boton-panel"
              id="contrate-3"
              onclick="cambiarContrastes(3)"
              type="submit"
              name=""
              value="">3
            </button>
          </div>
          <div class="col-md-3 ">
            <h4>Invertir colores</h4>
            <button
              class="boton-panel"
              id="inversor"
              onclick="invertirColores()"
              type="submit"
              name=""
              value="">Aplicar
            </button>
          </div>
          <div class="col-md-3">
            <h4>Restablecer ajustes</h4>
            <button
              class="boton-panel"
              id="defaul-config"
              onclick="defaultConfig()"
              type="submit"
              name=""
              value="">
              Aplicar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content wrapper for padding -->
  <div id="pestania-accesibilidad" class="">Panel de Accesibilidad</div>
</div>