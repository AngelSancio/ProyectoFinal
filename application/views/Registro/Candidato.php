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
#fieldset h1{
  margin-left: 35%;
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
      <h1>Datos Personales</h1>
      <table>
        <tr>
          <th>Nombre:
            <td>
              <input class="tamanoInput" type="text" name="Nombre"  id="nombre"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Apellido:
            <td>
              <input class="tamanoInput" type="text" name="Apellido" id="apellido"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Cédula:
            <td>
              <input class="tamanoInput" type="text" name="Cedula"  id="cedula"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Sexo:
            <td>
              <input type="radio" name="Sexo"  id="sexo"/>Femenino
              <input type="radio" name="Sexo"  id="sexo"/>Masculino
            </td>
          </th>
        </tr>
        <tr>
          <th>Dirección:
            <td>
              <input class="tamanoInput" type="text" name="Direccion"  id="direccion"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Ciudad:
            <td>
              <input class="tamanoInput" type="text" name="Ciudad"  id="ciudad"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Fecha de Nacimiento:
            <td>
              <input class="tamano2" type="date" name="FechaNacimiento"  id="fechaNac"/><h4>(MM/DD/AAAA)</h4>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Nacionalidad:
            <td>
              <input class="tamanoInput" type="text" name="Nacionalidad"  id="nacionalidad"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Foto:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Foto"  id="foto"/>*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Estado Civil:
            <td>
              <input type="radio" name="EstadoCivil"  id="estadoCivil"/>Soltero/a
              <input type="radio" name="EstadoCivil"  id="estadoCivil"/>Casado/a
              <input type="radio" name="EstadoCivil"  id="estadoCivil"/>Unión Libre *
            </td>
          </th>
        </tr>
        <tr>
          <th>Nivel Académico:
            <td>
              <input type="radio" name="NivelAcademico"  id="nivelAcademico"/>Primaria
              <input type="radio" name="NivelAcademico"   id="nivelAcademico"/>Secundaria
              <input type="radio" name="NivelAcademico"   id="nivelAcademico"/>Universitario *
            </td>
          </th>
        </tr>
        <tr>
          <th>¿Está Laborando?
            <td>
              <input type="radio" name="Laborando"  id="laborando"/>Si
              <input type="radio" name="Laborando"  id="laborando"/>No
            </td>
          </th>
        </tr>
        <tr>
          <th>E - mail:
            <td>
              <input class="tamanoInput" type="text" name="Email"  id="email"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Curriculum:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Curriculum" id="curriculum"/>*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Clave:
            <td>
              <input class="tamano2" type="password" name="Clave"  id="clave"/>*

            </td>
          </th>
        </tr>
        <tr>
          <th>
            <td colspan="2">
              <center>
              <button type="submit" class="botonForm">Guardar</button>
              </center>

              <center><h4>* Campos obligatorios</h4>
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
