<?php plantilla::iniciar(); ?>
<script>
function validarContacto(){
  var nombre = document.getElementById("nombre").value;
  var apellido= document.getElementById("apellido").value;
  var cedula = document.getElementById("cedula").value;
 var ciudad = document.getElementById("ciudad").value;
 var fechaNac = document.getElementById("fechaNac").value;
  var nacionalidad= document.getElementById("nacionalidad").value;
  var email= document.getElementById("email").value;
  var curriculum= document.getElementById("curriculum").value;
  var clave= document.getElementById("clave").value;
if (nombre==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios");
  document.getElementById('nombre').focus();
  return false;
};

 if(apellido==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios ");
  document.getElementById('apellido').focus();
  return false;
};
if  (cedula==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios ");
  document.getElementById('cedula').focus();
  return false;
};
if  (ciudad==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios ");
  document.getElementById('ciudad').focus();
  return false;
};
if  (fechaNac==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'Campo Fecha de Nacimiento'");
  document.getElementById('fechaNac').focus();
  return false;
};

if  (nacionalidad==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'Campo Nacionalidad'");
  document.getElementById('nacionalidad').focus();
  return false;
};
if  (email==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'Campo Email'");
  document.getElementById('email').focus();
  return false;
};
if  (curriculum==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'Campo Curriculum'");
  document.getElementById('curriculum').focus();
  return false;
};
if  (clave==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'Campo clave'");
  document.getElementById('clave').focus();
  return false;
};

}
</script>
  <link rel="stylesheet" href="../css/candidato.css" >
      <form method="post" action="<?php echo base_url('candidato/guardar') ?>" enctype="multipart/form-data">
  <div id="formulario">
    <fieldset id="fieldset">
      <h1>Datos Personales</h1>
      <table>
        <tr>
          <th>ID:
            <td>
              <input class="tamanoInput"  readonly type="number" name="ID"  idvalue="<?php echo $candidato->ID; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Nombre:
            <td>
              <input class="tamanoInput"  type="text" name="Nombre" id="nombre" required value="<?php echo $candidato->Nombre; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Apellido:
            <td>
              <input class="tamanoInput" type="text" name="Apellido" id="apellido"required value="<?php echo $candidato->Apellido; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Cédula:
            <td>
              <input class="tamanoInput" type="text" name="Cedula"  id="cedula"  required value="<?php echo $candidato->Cedula; ?>"/>*
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
              <input class="tamanoInput" type="text" name="Direccion" value="<?php echo $candidato->Direccion; ?>"/>
            </td>
          </th>
        </tr>
        <tr>
          <th>Ciudad:
            <td>
              <input class="tamanoInput" type="text" name="Ciudad" id="ciudad" required value="<?php echo $candidato->Ciudad; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Fecha de Nacimiento:
            <td>
              <input class="tamano2" type="date" name="FechaNacimiento"id="fechaNac" required value="<?php echo $candidato->FechaNacimiento; ?>"/><h4>(MM/DD/AAAA)</h4>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Nacionalidad:
            <td>
              <input class="tamanoInput" type="text" name="Nacionalidad" id="nacionalidad"required value="<?php echo $candidato->Nacionalidad; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Foto:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Foto" id="foto" required  value="<?php echo $candidato->Foto; ?>"/>*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Estado Civil:
            <td>
              <input type="radio" name="EstadoCivil" value="Soltero/a"/>Soltero/a
              <input type="radio" name="EstadoCivil" value="Casado/a"/>Casado/a
              <input type="radio" name="EstadoCivil" value="Union Libre"/>Unión Libre
            </td>
          </th>
        </tr>
        <tr>
          <th>Nivel Académico:
            <td>
              <input type="radio" id="nivel" name="NivelAcademico" required value="Primaria"/>Primaria
              <input type="radio" id="nivel" name="NivelAcademico" required value="Secundaria"/>Secundaria
              <input type="radio" id="nivel" name="NivelAcademico" required value="Universitario"/>Universitario *
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
              <input class="tamanoInput" type="text" id="email"name="Email" required value="<?php echo $candidato->Email; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Curriculum:
            <td>
              <button class="subirArchivo">
              <input class="botonForm" type="file" name="Curriculum" id= "subir" required value="<?php echo $candidato->Curriculum; ?>"/>*
              Adjuntar Archivo</button>
          </th>
        </tr>
        <tr>
          <th>Clave:
            <td>
              <input class="tamano2" type="password" name="Clave" id="clave" required value="<?php echo $candidato->Clave; ?>"/>*

            </td>
          </th>
        </tr>
        <tr>
          <th>
            <td colspan="2">
              <center>
              <button type="submit" value="submit" onclick="validarContacto()"class="botonForm">Guardar</button>
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


      <?php
        foreach($candidatos as $candidato){

          $linkEdit = base_url("/candidato/?ID={$candidato->ID}");
          $linkDelete = base_url("/candidato/delete/?ID={$candidato->ID}");
          $foto = base_url("/subido/{$candidato->Foto}");
          $curriculum = base_url("/subido/{$candidato->Curriculum}");

        /*  echo "<tr>
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
          </tr>";*/
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
