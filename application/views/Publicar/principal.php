<?php plantilla::iniciar(); ?>
<link rel="stylesheet" href="../css/publicar.css">

<form method="post" action="<?php echo base_url('empresa/guardarPublicar') ?>">
  <div id="formulario">
    <fieldset id="fieldset">
      <legend align="center"><h1>Datos Personales</h1></legend>
      <table>
        <tr>
          <th>ID:
            <td>
              <input class="tamanoInput" readonly type="text" name="ID"  id="nombrePuesto" value="<?php echo $publicar->ID; ?>"/>*
            </td>
          </th>
        </tr>
          <th>Nombre del puesto:
            <td>
              <input class="tamanoInput" type="text" name="NombrePuesto"  id="nombrePuesto" value="<?php echo $publicar->NombrePuesto; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Descripcion:
            <td>
              <input class="tamanoInput" type="text" name="Descripcion"  id="descripcion" value="<?php echo $publicar->Descripcion; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Requisitos :
            <td>
              <input class="requisitos" type="text" name="Requisitos"  id="requisitos" value="<?php echo $publicar->Requisitos; ?>"/>*
            </td>
          </th>
        </tr>
          <th>Nivel Academico
            <td>
              <input type="radio" name="NivelAcademico" id="nivelAcademico" value="Primario"/>Primario
              <input type="radio" name="NivelAcademico" id="nivelAcademico" value="Secundario"/>Secundario
              <input type="radio" name="NivelAcademico" id="nivelAcademico" value="Universitario"/>Universitario
            </td>
          </th>
        </tr>
        <tr>
          <th>Edad Maxima:
            <td>
              <input class="edadMaxima" type="number" name="EdadMaxima" id="edadMaxima" value="<?php echo $publicar->EdadMaxima; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Horario:
            <td>
              <input class="tamanoInput" type="text" name="Horario" id="horario" value="<?php echo $publicar->Horario; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Salario:
            <td>
              <input class="tamano2" type="text" name="Salario"  id="salario" value="<?php echo $publicar->Salario; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Comentario:
            <td>
              <input class="comentario" type="text" name="Comentario"  id="salario" value="<?php echo $publicar->Comentario; ?>"/>*
            </td>
          </th>
        </tr>
        <tr>
          <th>Empresa:
            <td>
              <input class="tamanoInput" type="text" name="Empresa"  id="salario" value="<?php echo $publicar->Empresa; ?>"/>*
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

  </table>
</fieldset>
</div>
<script>
  function validarBorrar(){

    return confirm("Seguro que desea borrar esta fila, esta operacion no se puede cancelar");
  }
</script>
<style >

</style>
