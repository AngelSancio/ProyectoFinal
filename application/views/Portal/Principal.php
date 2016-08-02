<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Empleate ya</title>
    <style>

      div #logo{
        margin-top: -20px;
        float: left;
        margin-left: 5%;
      }
      div #sesion{
        margin-top: 40px;
        margin-right: 20px;
        height: 100px;
        float: right;
      }
      div #sesion button{
        width: 150px;
        height: 40px;
        background: #19466A;
        color: white;
        border: none;
      }
      div #menu2{

      }
      div #menu{
        width: 100%;
        height: 42px;
        background: #90C5E7;
        float:left;
      	border-style: none;
      	border-color: transparent;
      	position: relative;
      }
      div #menu a{
        text-decoration: none;
        color: white;
        font-size: 20px;
      }
      div #menu nav ul{
        text-align: right;
        margin-right: 30px;
      }
      div #menu nav ul li{
         padding-right:30px;
          display: inline-block;
        }
      div #menu nav ul li:hover{
        text-decoration: underline;
          padding-right: 30px;
      }
      div #menu nav ul li:active{
        text-decoration: underline;
        background: black;
      }
      div #cuerpo{
        width:100%;
        height: 900px;
      }
      div #footer2{
        width: 100%;
        height: 72px;
        background: #19466A;
        float:left;
      	border-style: none;
      	border-color: transparent;
      	position: relative;
        align-items: left;
      }
      div #footer2 a{
        text-decoration: none;
        color: white;
        font-size: 20px;
      }
      div #footer2 nav ul{
        text-align: center;
        margin-right: 30px;
      }
      div #footer2 nav ul li{
         padding-right:30px;
          display: inline-block;
        }
      div #footer2 nav ul li:hover{
        text-decoration: underline;
          padding-right: 30px;
      }
      div #footer2 nav ul li:active{
        text-decoration: underline;
        background: transparent;
      }
    </style>
  </head>
  <body>
    <div id="header">
      <div id="logo">
        <a href="<?php echo base_url() ?>"><img src="images/logo.png" width="159px" height="151px" margin-left:"50px"></img></a>
      </div>
      <div id="sesion">
        <a href=""><button>Iniciar sesión</button></a>
        <a href="<?php echo base_url('registro/principal') ?>"><button>Registrarse</button></a>
      </div>
      <div id="menu" class="barraMenu">
        <div id="menu2">
        <nav>
          <ul>
            <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('candidato/empleos') ?>">Empleos</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('empresa/curriculums') ?>">Curriculums</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('empresa/publicar') ?>">Publicar</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('inicio/contacto') ?>">Contacto</a></li>
          </ul>
        </div>
        </nav>
      </div>
    </div>
    <div id="cuerpo">
      <div id="portada">
        <img src="images/epleateyaecortado.jpg" width="90%">
      <div style="position: absolute; top: 500px; left: 350px; font-size:60px; color: white;">Buscar empleo ahora es mucho mas facil!</div>
      <div style="position: absolute; top: 660px; left: 350px; color: white; background-color:#90C5E7; width: 17%; height:180px; float:left;"><p>Mision</p><h3>Ayudar a toda persona que necesita experiencial laboral.</h3></div>
      <div style="position: absolute; top: 660px; left: 650px; color: white; background-color:#90C5E7; width: 17%; height:180px; float:left;"><p>Vision</p><h3>Ser la primera pagina en la mente de las personas cuando necesitan buscar un empleo.</h3></div>
      <div style="position: absolute; top: 660px; left: 950px; color: white; background-color:#90C5E7; width: 17%; height:180px; float:left;"><p>Valores</p><h3>Eficacia, Responsabilidad, Perseverancia y Rapidez.</h3></div>

      <div style=" margin-top:0px; margin-left:342px; color: white; background-color:red; width: 17%; height:170px; float:left;">
        <img src="images/mision recortada.jpg" alt="" style="margin-left:0px; width:100%; height:100%;" /></div>
      <div style=" margin-top:0px; margin-left:34px; color: white; background-color:red; width: 17%; height:170px; float:left;">
        <img src="images/visión recortada.jpg" alt="" style="margin-left:0px; width:100%; height:100%;" /></div>
      <div style=" margin-top:0px; margin-left:34px; color: white; background-color:red; width: 17%; height:170px; float:left;">
        <img src="images/valores recortados.jpg" alt="" style="margin-left:0px; width:100%; height:100%;" /></div>

      <h1>Bienvenidos!</h1>
      <h2>Somos un portal capacitado en ayudar a las personas a buscar
        trabajo en todo el mundo.</h2>
    <style >
        #portada img{
          margin-left: 6%;
        }
        p{
          text-align: center;
          font-size: 30px;
        }
        h3{
          margin-left: 7%;
        }
        h1{
          color: blue;
          font-size: 100px;
          text-align: center;


        } h2{
          color: blue;
          font-size: 25px;
          margin-top: -1%;
          text-align: center;
          margin-bottom: 3%;

        }
      </style></img>
      </div>
    </div>
    <div id="footer">
      <div id="footer2" >
        <nav>
          <ul>
            <li><a class="botonMenu" href="<?php echo base_url('legal/aviso') ?>">Aviso Legal</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('legal/politica') ?>">Política de Privacidad</a></li>
            <li><a class="botonMenu" href="<?php echo base_url('legal/servicios') ?>">Servicios Especiales</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </body>
</html>
