<?php plantilla::iniciar(); ?>
<link rel="stylesheet" href="../css/empleos.css">
<div id="divTbl"  >

    <h3>Empleos Guardados</h3>
  <table id="tblDatos" align="center" border=all>
    <thead>
      <tr>
        <th>Puesto</th>
        <th>Descripcion</th>
        <th>Requisitos</th>
        <th>Nivel Academico</th>
        <th>Edad Maxima</th>
        <th>Horario</th>
        <th>Salario</th>
        <th>Comentario</th>
        <th>Empresa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($publicaciones as $publicar){

          echo "<tr>
            <td>{$publicar->NombrePuesto}</td>
            <td>{$publicar->Descripcion}</td>
            <td>{$publicar->Requisitos}</td>
            <td>{$publicar->NivelAcademico}</td>
            <td>{$publicar->EdadMaxima}</td>
            <td>{$publicar->Horario}</td>
            <td>{$publicar->Salario}</td>
            <td>{$publicar->Comentario}</td>
            <td>{$publicar->Empresa}</td>
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
<style >

</style>
