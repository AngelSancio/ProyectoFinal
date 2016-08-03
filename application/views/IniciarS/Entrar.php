<?php plantilla::iniciar(); ?>
  <head>
    <link rel="stylesheet" href="../css/IniciarUsuario.css" >
    <meta charset="utf-8">
  </head>
    <div class="form">

    <form method="post" action="<?php echo base_url('IniciarSesion/loginCandidato'); ?>">
      <table>
            <h1>Iniciar como usuario</h1>
            <tr>
        <th>
        Email:
              </th>
        <td>
         <input type="text" name="Email" value="">
        </td>
      </tr>
        <tr>
          <th>Clave:

          </th>
          <td>
            <input type="password" name="Clave" value="">
          </td>
        </tr>
        <tr>
          <td align="center" colspan="4">
            <button id="buton"type="submit">Entrar</button>
          </td>
        </tr>
      </table>
    </form>
    <form method="post" action="<?php echo base_url('IniciarSesion/loginEmpresa'); ?>">
      <table>
        <br><br>
        <h1>Iniciar como Empresa</h1>
        <tr>
          </td>
        </tr>
        <th>
        Email:
        </th>
        <td>
          <input type="text" name="Email" value="">
        <tr>
          <th>
            Clave:
          </th>
          <td>
            <input type="password" name="Clave" value="">
          </td>
        </tr>
        <tr>
          <td align="center" colspan="4">
            <button id="buton"type="submit">Entrar</button>
          </td>
        </tr>
      </table>
    </form>
    <form method="post" action="<?php echo base_url('IniciarSesion/loginAdministrador'); ?>">
      <table>
        <tr>
            <br><br>
            <h1>Iniciar como Administrador</h1>

          </td>
        </tr>
        <th>
        Email:
        </th>
        <td>
          <input type="text" name="Email" value="">
        <tr>
          <th>
            Clave:
          </th>
          <td>
            <input type="password" name="Clave" value="">
          </td>
        </tr>
        <tr>
          <td align="center" colspan="4">
            <button id="buton"type="submit">Entrar</button>
          </td>
        </tr>
      </table>
    </form>
   </div>
        <!--tr>

    <div class="usuario">
    </div>
  </tr>
  <tr>

   <div class="IniciarUsuario">

     <div id="user">
       <h1>Email</h1> <input type="text" name="Email" value="">
     </div>
   </tr>
   <tr>

     <div id="pass">
       <h1>Clave</h1><input type="password" name="Clave" value="">
     </div>
   </tr>
     <button type="submit">Entrar</button>
    </div>
  </table>
    </form>

    <form method="post" action="<?php echo base_url('IniciarSesion/loginEmpresa'); ?>">
    <div class="empresa">
      <h1>Iniciar como Empresa</h1>
    </div>

    <div class="IniciarEmpresa">
      <div id="user">
        <h1>Email</h1> <input type="text" name="Email" value="">
      </div>
      <div id="pass">
        <h1>Contraseña</h1><input type="password" name="Clave" value="">
      </div>
      <button type="submit">Entrar</button>
     </div>
    </form>

    <form method="post" action="<?php echo base_url('IniciarSesion/loginAdministrador'); ?>">
    <div class="empresa">
      <h1>Iniciar como Administrador</h1>
    </div>

    <div class="IniciarEmpresa">
      <div id="user">
        <h1>Email</h1> <input type="text" name="Email" value="">
      </div>
      <div id="pass">
        <h1>Contraseña</h1><input type="password" name="Clave" value="">
      </div>
      <button type="submit">Entrar</button>
     </div>
   </form-->
