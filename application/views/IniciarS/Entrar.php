<?php plantilla::iniciar(); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/IniciarUsuario.css" >
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
  </head>
  <body>
    <form method="post" action="<?php echo base_url('IniciarSesion/loginCandidato'); ?>">
    <div class="usuario">
      <h1>Iniciar como usuario</h1>
    </div>
   <div class="IniciarUsuario">
     <div id="user">
       <h1>Usuario</h1> <input type="text" name="Email" value="">
     </div>
     <div id="pass">
       <h1>Contraseña</h1><input type="password" name="Clave" value="">
     </div>
     <button type="submit">Entrar</button>
    </div>
    </form>

    <form method="post" action="<?php echo base_url('IniciarSesion/loginEmpresa'); ?>">
    <div class="empresa">
      <h1>Iniciar como Empresa</h1>
    </div>

    <div class="IniciarEmpresa">
      <div id="user">
        <h1>Email</h1> <input type="text" name="email" value="">
      </div>
      <div id="pass">
        <h1>Contraseña</h1><input type="password" name="clave" value="">
      </div>
      <button type="submit">Entrar</button>
     </div>
    </form>
  </body>
</html>
