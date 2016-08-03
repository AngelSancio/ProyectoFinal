<?php

class plantilla{

  static $instancia = null;

  static function iniciar(){
    self::$instancia = new plantilla();
  }

  function __construct(){
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../csss/RegistroCandidato.css">
    <meta charset="utf-8">
    <title>Empleate Ya</title>

  </head>
  <style >

  </style>
  <body>
    <header>
      <div id="logo">
        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('/images') ?>/logo.png" width="159px" height="151px" style="margin-left:200px;"></img></a>
        <div class="botonesPrincipales">
          <a href="<?php echo base_url('IniciarSesion/Entrar') ?>"><button>Iniciar sesión</button></a>
        <a href="<?php echo base_url('registro/principal') ?>"><button>Registrarse</button></a>
        </div>
      </div>
    </header>
    <div class="menu">
      <div id="menu2">
          <nav>
            <ul>
              <?php if(isset($_SESSION['candidato'])){?>
              <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('candidato/empleos') ?>">Empleos</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('inicio/contacto') ?>">Contacto</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('IniciarSesion/salir') ?>">Cerrar Sesion</a></li>

            <?php } else if(isset($_SESSION['empresa'])){ ?>
              <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('empresa/curriculums') ?>">Curriculums</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('empresa/publicar') ?>">Publicar</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('inicio/contacto') ?>">Contacto</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('IniciarSesion/salir') ?>">Cerrar Sesion</a></li>

            <?php } else if(isset($_SESSION['administrador'])){?>
              <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('candidato/empleos') ?>">Empleos</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('empresa/curriculums') ?>">Curriculums</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('empresa/publicar') ?>">Publicar</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('inicio/contacto') ?>">Contacto</a></li>
              <li><a class="botonMenu" href="<?php echo base_url('IniciarSesion/salir') ?>">Cerrar Sesion</a></li>

            <?php } else{ ?>
                <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
                <li><a class="botonMenu" href="<?php echo base_url('candidato/empleos') ?>">Empleos</a></li>
                <li><a class="botonMenu" href="<?php echo base_url('empresa/curriculums') ?>">Curriculums</a></li>
                <li><a class="botonMenu" href="<?php echo base_url('empresa/publicar') ?>">Publicar</a></li>
                <li><a class="botonMenu" href="<?php echo base_url('inicio/contacto') ?>">Contacto</a></li>
              <?php } ?>
            </ul>
          </div>
          </nav>
        </div>
    </div>
    <div class="contenido">
<?php
  }

  function __destruct(){
?>
</div>

<div class="footer">
  <div id="footer2">
    <nav>
      <ul>
        <li><a class="botonMenu" href="<?php echo base_url('inicio/aviso') ?>">Aviso Legal</a></li>
        <li><a class="botonMenu" href="<?php echo base_url('inicio/politica') ?>">Política de Privacidad</a></li>
        <li><a class="botonMenu" href="<?php echo base_url('inicio/servicios') ?>">Servicios Especiales</a></li>
      </ul>
    </nav>
  </div>
</div>
</body>
</html>
<?php
  }
}
 ?>
