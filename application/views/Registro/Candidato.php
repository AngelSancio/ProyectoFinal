<?php plantilla::iniciar(); ?>
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
div #divTbl{

  color:black;
}
div #tblDatos{
  width: 300px;
}
.contenido{
  height: 1500px;
}
.footer{
  margin-top: 2000px;
}
  </style>

      <form method="post" action="<?php echo base_url('candidato/guardar') ?>" enctype="multipart/form-data">
  <div id="formulario">
    <fieldset id="fieldset">
      <h1>Datos Personales</h1>
      <table>
        <tr>
          <th>ID:
            <td>
              <input class="tamanoInput" readonly type="number" name="ID"  value="<?php echo $candidato->ID; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Nombre:
            <td>
              <input class="tamanoInput" type="text" name="Nombre" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Apellido:
            <td>
              <input class="tamanoInput" type="text" name="Apellido" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Cédula:
            <td>
              <input class="tamanoInput" type="text" name="Cedula"  />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Sexo:
            <td>
              <input type="radio" name="Sexo" value="Femenino" />Femenino
              <input type="radio" name="Sexo" value="Masculino" />Masculino
            </td>
          </th>
        </tr>
        <tr>
          <th>Dirección:
            <td>
              <input class="tamanoInput" type="text" name="Direccion" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Ciudad:
            <td>
              <input class="tamanoInput" type="text" name="Ciudad" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Fecha de Nacimiento:
            <td>
              <input class="tamano2" type="date" name="FechaNacimiento" /><h4>(MM/DD/AAAA)</h4>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Nacionalidad:
            <td>
              <input class="tamanoInput" type="text" name="Nacionalidad" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Foto:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Foto" />*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Estado Civil:
            <td>
              <input type="radio" name="EstadoCivil" value="Soltero/a"/>Soltero/a
              <input type="radio" name="EstadoCivil" value="Casado/a"/>Casado/a
              <input type="radio" name="EstadoCivil" value="Union Libre"/>Unión Libre *
            </td>
          </th>
        </tr>
        <tr>
          <th>Nivel Académico:
            <td>
              <input type="radio" name="NivelAcademico" value="Primaria"/>Primaria
              <input type="radio" name="NivelAcademico" value="Secundaria"/>Secundaria
              <input type="radio" name="NivelAcademico" value="Universitario"/>Universitario *
            </td>
          </th>
        </tr>
        <tr>
          <th>¿Está Laborando?
            <td>
              <input type="radio" name="Laborando" value="Si"/>Si
              <input type="radio" name="Laborando" value="No"/>No
            </td>
          </th>
        </tr>
        <tr>
          <th>E - mail:
            <td>
              <input class="tamanoInput" type="text" name="Email" />*
            </td>
          </th>
        </tr>
        <tr>
          <th>Curriculum:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Curriculum"/>*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Clave:
            <td>
              <input class="tamano2" type="password" name="Clave" />*

            </td>
          </th>
        </tr>
        <tr>
          <th>
            <td colspan="2">
              <center>
              <button type="submit" value="submit" class="botonForm">Guardar</button>
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
<div id="divTbl">
  <fieldset>
    <legend><h3>Registros Anteriores</h3></legend>
  <table id="tblDatos" align="center" rules="all">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Sexo</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Fecha de Nacimiento</th>
        <th>Nacionalidad</th>
        <th>Foto</th>
        <th>Estado Civil</th>
        <th>Nivel Academico</th>
        <th>Esta Laborando?</th>
        <th>E-mail</th>
        <th>Curriculum</th>
        <th>Clave</th>
      </tr>
    </thead>
    <tbody>

      <?php
//<td><a href='".base_url("subido/{$candidato->Foto}");"'>{$candidato->Foto}</a>Foto</td>
        foreach($candidatos as $candidato){

          $linkEdit = base_url("/candidato/?ID={$candidato->ID}");
          $linkDelete = base_url("/candidato/delete/?ID={$candidato->ID}");
          $foto = base_url("/subido/{$candidato->Foto}");
          $curriculum = base_url("/subido/{$candidato->Curriculum}");

          echo "<tr>
            <td>{$candidato->ID}</td>
            <td>{$candidato->Nombre}</td>
            <td>{$candidato->Apellido}</td>
            <td>{$candidato->Cedula}</td>
            <td>{$candidato->Sexo}</td>
            <td>{$candidato->Direccion}</td>
            <td>{$candidato->Ciudad}</td>
            <td>{$candidato->FechaNacimiento}</td>
            <td>{$candidato->Nacionalidad}</td>
            <td><button><a href='{$foto}'>Foto</a></button></td>
            <td>{$candidato->EstadoCivil}</td>
            <td>{$candidato->NivelAcademico}</td>
            <td>{$candidato->Laborando}</td>
            <td>{$candidato->Email}</td>
            <td><button><a href='{$curriculum}'>Curriculum</a></button></td>
            <td>{$candidato->Clave}</td>
            <td>
              <button><a href='{$linkEdit}' class='btn btn-info btn-sm'>Edit</a></button>
              <button><a href='{$linkDelete}' onclick='return validarBorrar();' class='btn btn-danger btn-sm'>Del</a></button>
            </td>
          </tr>";
        }

       ?>
    </tbody>
  </table>
</fieldset>
</div>
<script>
  function validarBorrar(){

    return confirm("Seguro que desea borrar esta fila, esta operacion no se puede cancelar");
  }
</script>
