<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PORTAL DE EMPLEO</title>
    <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    body{
background-image: url(img/prin.jpg);
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;
    }

div#menu{

  width: 100%;
  height: 150px;
  border: 1px black;
  background-image: url(img/empleate.png);
  background-repeat: no-repeat;
}

  #menues li {
 display: inline-block;
 list-style: none;
 padding: 5px;
 font:  14px Times new roman;

 }
 nav ul{
	 text-align: center;

 }
 div#cmenu{
   font-size: 30px;
     float: right;
     width: 30%;
     margin-top: 4%;

 }

 a{
   color:blue;
   font-size: 18px;
 }

    </style>
  </head>
  <body>
    <div id="vacio">
      <div id="menu">
        <nav id="menues">
        <div id="cmenu">
          <ul>
      <li> <a href=" <?php echo base_url('controladorInicio') ?>" title="Entrar"><img src="img/entrar.png"/>Entrar en el sitio</a></li>
      <li> <a href="" title="Quienes somos"><img src="img/quienesSomos.png" width=50px>Quienes somos</a></li>

      <li> <a href=""title="Contactanos"><img src="img/contactenos.png"/> Contactenos</a></li>

      </ul>
        </div>
        </nav>
      </div>
    </div>


  </body>
</html>
