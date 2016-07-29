<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../csss/RegistroCandidato.css">
    <meta charset="utf-8">
    <title>Registro de Empresa</title>

  <!--  <link rel="stylesheet" href="css/RegistroCandidato.css">-->
  </head>
  <style >
  body{
    color: white;
    font-size: 20px;
  }
  input{
    margin-top: 10px;
    margin-right: 20px;
  }
  input.tamanoInput{
    width: 600px;
    height: 30px;
  }
  input.tamano2{
    float: left;
    width: 200px;
    height: 30px;
  }
  fieldset{
    border: none;
  }
  h4{
    float: left;
    margin-top: 10px;
  }
  .botonForm{
    width: 150px;
    height: 40px;
    background: #19466A;
    color: white;
    border: none;
  }
  .subirArchivo input.botonForm{
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 24px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
  }
  .subirArchivo{
    position: relative;
    overflow: hidden;
    margin: 10px;
    width: 150px;
    height: 40px;
    background: #19466A;
    color: white;
    border: none;
  }
.requisitos{
width: 600px;
height: 120px;
}
.edadMaxima{
width: 80px;
height: 30px;
}
.comentario{
width: 600px;
height: 120px;
}
button{
margin-top: 5%;
}
  </style>
  <body>
    <header>
      <div id="logo">
            <a href="<?php echo base_url() ?>"><img src="../images/logo.png" width="159px" height="151px" style="margin-left:200px;"></img></a>
            <div class="botonesPrincipales">
              <a href=""><button>Iniciar sesión</button></a>
            <a href=""><button>Registrarse</button></a>
            </div>

      </div>
    </header>
    <div class="menu">
      <div id="menu2">
          <nav>
            <ul>
              <li><a class="botonMenu" href="<?php echo base_url() ?>">Inicio</a></li>
              <li><a class="botonMenu" href="#">Empleos</a></li>
              <li><a class="botonMenu" href="#">Curriculums</a></li>
              <li><a class="botonMenu" href="#">Publicar</a></li>
              <li><a class="botonMenu" href="#">Contacto</a></li>
            </ul>
          </div>
          </nav>
        </div>
    </div>
    <div class="contenido">
      <form method="post" action="">
  <div id="formulario">
    <fieldset id="fieldset">
      <legend align="center"><h1>Datos Personales</h1></legend>
      <table>
        <tr>
          <th>Nombre del puesto:
            <td>
              <input class="tamanoInput" type="text" name="NombrePuesto"  id="nombrePuesto" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Descripcion:
            <td>
              <input class="tamanoInput" type="text" name="Descripcion"  id="descripcion"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Requisitos :
            <td>
              <input class="requisitos" type="text" name="Requisitos"  id="requisitos"/>*
            </td>
          </th>
        </tr>
          <th>Nivel Academico
            <td>
              <input type="radio" name="NivelAcademico" id="nivelAcademico" />Primario
              <input type="radio" name="NivelAcademico" id="nivelAcademico"/>Secundario
              <input type="radio" name="NivelAcademico" id="nivelAcademico"/>Universitario
            </td>
          </th>
        </tr>
        <tr>
          <th>Edad Maxima:
            <td>
              <input class="edadMaxima" type="number" name="EdadMaxima" id="edadMaxima"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Horario:
            <td>
              <input class="tamanoInput" type="text" name="Horario" id="horario"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Salario:
            <td>
              <input class="tamano2" type="text" name="Salario"  id="salario"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Comentario:
            <td>
              <input class="comentario" type="text" name="Comentario"  id="salario"/>*

            </td>
          </th>
        </tr>
          <tr>
          <th>
            <td colspan="2">
              <center>
              <button type="submit" class="botonForm">Guardar</button>
              </center>

              <center>
              <h4>* Campos obligatorios</h4>
              </center>
            </td>
          </th>
        </tr>
      </table>
    </fieldset>
  </div>
</form>
    </div>

    <div class="footer">
      <div id="footer2">
            <nav>
              <ul>
                <li><a class="botonMenu" href="#">Aviso Legal</a></li>
                <li><a class="botonMenu" href="#">Política de Privacidad</a></li>
                <li><a class="botonMenu" href="#">Servicios Especiales</a></li>
              </ul>
            </nav>
          </div>
    </div>

  </body>
</html>
