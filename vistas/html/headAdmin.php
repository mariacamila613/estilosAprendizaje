 <header id="unalTop">
    <!-- Logo -->
    <div class="logo">

        <!--[if (gte IE 9)|!(IE)]><!-->
        <svg width="93%" height="93%">
          <image
          xlink:href="images/escudoUnal.svg"
          width="100%"
          height="100%"
          class="hidden-print"
          alt="Escudo de la Universidad Nacional de Colombia"/>Inicio
        </svg>

        <!--<![endif]-->
        <!--[if lt IE 9]> <img src="images/escudoUnal.png" width="93%" height="auto"
        class="hidden-print"/> <![endif]-->

      </a>
    </div>
    <!-- Seal -->
    <div class="seal">



    </div>

    <!-- Menú superior -->
    <div class="firstMenu d-none d-md-block">
      <div class="content-fluid">
        <nav class="navbar navbar-expand-md nav navbar-dark">
          <!-- perfiles -->
          <div class=" collapse navbar-collapse navbar-default" id="navbarSupportedContent">
            <nav id="profiles">

            </nav>
          </div>
          <!-- Redes sociales  -->
          <ul class="socialLinks d-none d-md-block">

            <li >
            <a
            href="https://www.facebook.com/UNColombia"
            target="_blank"
            class="facebook"
            title="Página oficial en Facebook"><div class="red r1">Facebook</div>
            </a>
            </li>


           <li>
            <a
            href="https://twitter.com/UNColombia"
            target="_blank"
            class="twitter"
            title="Cuenta oficial en Twitter"> <br> <div class="red r2">Twitter</div>
            </a>
            </li>



            <li>
            <a
            href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg"
            target="_blank"
            class="youtube"
            title="Canal oficial de Youtube"><div class="red r3">Youtube</div>
            </a>
            </li>

            <li>
            <a
            href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html"
            target="_blank"
            class="rss"
            title="Suscripción a canales de información RSS"><div class="red r4">RSS</div>
            </a>
            </li>

          </ul>
          <!-- idioma -->
        </nav>
      </div>
    </div>

    <!-- Menú inferior -->
    <div id="bs-navbar" class="navigation d-none d-md-block">

      <!-- Buscador -->
      <div class="buscador" id="buscador">
        <div
        class="gcse-searchbox-only"
        data-resultsurl="https://unal.edu.co/resultados-de-la-busqueda/"
        data-newwindow="true"></div>
      </div>
      <!-- Main menu -->
      <div class="navbar-dark mainMenu" id="main_menu_container">
        <!-- Items menú principal -->
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <div class="btn-group">
          <a href="inicio.php" aria-label="Enlace para ir a inicio" class="btn btn-default">Perfil usuario</a>
        </div>
        <div class="btn-group">
          <a href="gestionUsuarios.php"   aria-label="Enlace para contactar a nuestro equipo" class="btn btn-default">Gestión de usuarios</a>
        </div>
         <!-- <div class="btn-group">
          <a href="actualizarAdmin.php"   aria-label="Enlace para ir actualizar los datos "class="btn btn-default">Actualizar Datos</a>
        </div> -->
        <div class="btn-group">
          <a href="reporteAdmin.php"  aria-label="Enlace para ver los reportes" class="btn btn-default">Ver reportes</a>
        </div>
         <div class="btn-group">
          <a href="../../consultas/closeSession.php"  aria-label="Enlace para ir a cerrar sesión" class="btn btn-default">Cerrar sesión</a>
        </div>

      <div class="btn-group d-none">
        <div
          class="btn btn-default dropdown-toggle"
          data-toggle="dropdown"
          id="navbarSupportedContent"
          data-target="#services">Servicios<span class="caret"></span>
        </div>
      </div>
      <!-- Perfiles -->
      <div class="btn-group d-none">
        <div
          class="btn btn-default dropdown-toggle"
          data-toggle="dropdown"
          id="navbarSupportedContent"
          data-target="#profiles">Perfiles<span class="caret"></span>
        </div>
      </div>
    </div>

    <!--Navbar-->
    <nav class="navbar navbar-light light-blue lighten-4 main_menu">
      <!-- Navbar brand -->


      <!-- Collapse button -->
      <button
        class="navbar-toggler collapsed d-block d-md-none"
        type="button"
        data-toggle="collapse"
        data-target="#navbar_content"
        aria-controls="navbar_content"
        aria-expanded="false"
        aria-label="Toggle navigation"
        id="btn_hamburguer">
        <!-- <span class="navbar-toggler-icon"></span> -->
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbar_content">
        <!-- subdominio -->
        <div class="site-url" id="container_subdominio_mobil"></div>
        <!-- buscador -->
        <div class="buscador" id="container_buscador_mobil"></div>
        <!-- main -->
        <div id="container_mainmenu_mobil"></div>
        <!-- Sedes -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_sedes_mobil" aria-controls="container_sedes_mobil">Sedes<span class="caret"> </span>
          </div>
        </div>
        <div class="collapse" id="container_sedes_mobil"></div>

        <!-- Servicios -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_servicios_mobil" aria-controls="container_servicios_mobil">Servicios<span class="caret"> </span>
          </div>
        </div>
        <div class="collapse" id="container_servicios_mobil"></div>


        <!-- Perfiles -->
        <div class="btn-group d-block d-md-none hidden-print">
          <div class="btn btn-default dropdown-toggle" data-toggle="collapse" data-target="#container_profiles_mobil" aria-controls="container_profiles_mobil">Perfiles<span class="caret"> </span>
          </div>
        </div>
        <div class="collapse" id="container_profiles_mobil"></div>

      </div>
      <!-- Collapsible content -->

    </nav>

  </header>


  <style type="text/css">


.facebook{
  position: absolute;
  right: 160px;
   align-content: center;
  align-items: center;
}



.twitter{
  position: absolute;
  right: 110px;
   align-content: center;
  align-items: center;
}

.youtube{
  position: absolute;
  right: 60px;
   align-content: center;
  align-items: center;
}

.rss{
  position: absolute;
  right: 10px;
   align-content: center;
  align-items: center;
}



.red{
  position: absolute;
  color: white;
  top: 80%;
  font-size: 13px;
  margin: 3px 0px 3px 0px;
}

.r1{right: -60%;}
.r2{right: -40%;}
.r3{right: -60%;}
.r4{right: 0%;}


</style>
