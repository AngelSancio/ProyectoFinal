<?php plantilla::iniciar(); ?>
<link rel="stylesheet" href="../css/curriculum.css" >
<div id="divTbl">

    <h1 align="center">Curriculums</h1>
  <table id="tblDatos" align="center" border="transparent" width="100%" height="100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Foto</th>
        <th>E-mail</th>
        <th>Curriculum</th>
      </tr>
    </thead>
    <tbody>

      <?php

        foreach($candidatos as $candidato){


          $foto = base_url("/subido/{$candidato->Foto}");
          $curriculum = base_url("/subido/{$candidato->Curriculum}");

          echo "<tr>
            <td>{$candidato->Nombre}</td>
            <td>{$candidato->Apellido}</td>
            <td><button><a href='{$foto}'>Foto</a></button></td>
            <td>{$candidato->Email}</td>
            <td><button><a href='{$curriculum}'>Curriculum</a></button></td>
          </tr>";
        }

       ?>
    </tbody>
  </table>

</div>
<script>
  function validarBorrar(){

    return confirm("Seguro que desea borrar esta fila, esta operacion no se puede cancelar");
  }
</script>
