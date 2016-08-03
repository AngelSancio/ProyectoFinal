<?php plantilla::iniciar(); ?>
<script>
function validarEmpresa(){
  var nombre = document.getElementById("nombre").value;
  var dedicar= document.getElementById("dedicar").value;
  var email = document.getElementById("email").value;
 var rnc = document.getElementById("rnc").value;
 var direccion = document.getElementById("direccion").value;
  var clave= document.getElementById("clave").value;
  var departamentoContacto= document.getElementById("departamentoContacto").value;
  var telefonoContacto= document.getElementById("telefonoContacto").value;
  var logo= document.getElementById("logo").value;
if (nombre==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios");
  document.getElementById('nombre').focus();
  return false;
};
if(dedicar==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'CAMPO A QUE SE DEDICA?'");
  document.getElementById('dedicar').focus();
  return false;
};
if  (email==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'EMAIL' ");
  document.getElementById('email').focus();
  return false;
};
if  (rnc==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'CAMPO RNC'");
  document.getElementById('rnc').focus();
  return false;
};
if  (direccion==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'CAMPO DIRRECCION'");
  document.getElementById('direccion').focus();
  return false;
};

if  (clave==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'CAMPO CLAVE'");
  document.getElementById('clave').focus();
  return false;
};
if  (departamentoContacto==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'CAMPO DEPARTAMENTO CANDIDATO'");
  document.getElementById('departamentoContacto').focus();
  return false;
};
if  (telefonoContacto==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'TELEFONO CONTACTO'");
  document.getElementById('telefonoContacto').focus();
  return false;
};
if  (logo==0 ){
  alert("Los campos que tienen Asteriscos * son obligatorios 'LOGO'");
  document.getElementById('logo').focus();
  return false;
};

}
</script>
  <link rel="stylesheet" href="../css/empresa.css">
      <form method="post" action="<?php echo base_url('empresa/guardar') ?>" enctype="multipart/form-data">
      <div id="formulario">
      <fieldset id="fieldset">
  <legend align="center"><h1>Datos Personales</h1></legend>
  <table>
    <tr>
      <th>ID:
        <td>
          <input class="tamanoInput" readonly type="number" name="ID" required value="<?php echo $empresa->ID; ?>" />*
        </td>
      </th>
    </tr>
    <tr>
      <th>Nombre:
        <td>
          <input class="tamanoInput" type="text" name="Nombre"   id="nombre" required value="<?php echo $empresa->Nombre; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>A que te dedicas?
        <td>
          <input class="dedicar" type="text" name="Dedicarse" id="dedicar" required value="<?php echo $empresa->Dedicarse; ?>" />*
        </td>
      </th>
    </tr>
    <tr>
      <th>E-mail:
        <td>
          <input class="tamanoInput" type="text" name="Email"  id="email" required value="<?php echo $empresa->Email; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>País:</th>
      <td>
         <select name="Pais" id="pais" class="uno"value="<?php echo $empresa->Pais; ?>">
          <option>Seleccione un país</option>
          <option value="AF">Afganistan</option>
          <option value="AL">Albania</option>
          <option value="DE">Alemania</option>
          <option value="AD">Andorra</option>
          <option value="AO">Angola</option>
          <option value="AI">Anguilla</option>
          <option value="AQ">Antartida</option>
          <option value="AG">Antigua y Barbuda</option>
          <option value="AN">Antillas Holandesas</option>
          <option value="SA">Arabia Saudi</option>
          <option value="DZ">Argelia</option>
          <option value="AR">Argentina</option>
          <option value="AM">Armenia</option>
          <option value="AW">Aruba</option>
          <option value="AU">Australia</option>
          <option value="AT">Austria</option>
          <option value="AZ">Azerbaiyan</option>
          <option value="BS">Bahamas</option>
          <option value="BH">Bahrein</option>
          <option value="BD">Bangladesh</option>
          <option value="BB">Barbados</option>
          <option value="BE">Belgica</option>
          <option value="BZ">Belice</option>
          <option value="BJ">Benin</option>
          <option value="BM">Bermudas</option>
          <option value="BY">Bielorrusia</option>
          <option value="MM">Birmania</option>
          <option value="BO">Bolivia</option>
          <option value="BA">Bosnia y Herzegovina</option>
          <option value="BW">Botswana</option>
          <option value="BR">Brasil</option>
          <option value="BN">Brunei</option>
          <option value="BG">Bulgaria</option>
          <option value="BF">Burkina Faso</option>
          <option value="BI">Burundi</option>
          <option value="BT">Buton</option>
          <option value="CV">Cabo Verde</option>
          <option value="KH">Camboya</option>
          <option value="CM">Cameron</option>
          <option value="CA">Canada</option>
          <option value="TD">Chad</option>
          <option value="CL">Chile</option>
          <option value="CN">China</option>
          <option value="CY">Chipre</option>
          <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
          <option value="CO">Colombia</option>
          <option value="KM">Comores</option>
          <option value="CG">Congo</option>
          <option value="CD">Congo, Republica Democratica del</option>
          <option value="KR">Corea</option>
          <option value="KP">Corea del Norte</option>
          <option value="CI">Costa de Marfil</option>
          <option value="CR">Costa Rica</option>
          <option value="HR">Croacia (Hrvatska)</option>
          <option value="CU">Cuba</option>
          <option value="DK">Dinamarca</option>
          <option value="DJ">Djibouti</option>
          <option value="DM">Dominica</option>
          <option value="EC">Ecuador</option>
          <option value="EG">Egipto</option>
          <option value="SV">El Salvador</option>
          <option value="AE">Emiratos Arabes Unidos</option>
          <option value="ER">Eritrea</option>
          <option value="SI">Eslovenia</option>
          <option value="ES">España</option>
          <option value="US">Estados Unidos</option>
          <option value="EE">Estonia</option>
          <option value="ET">Etiopia</option>
          <option value="FJ">Fiji</option>
          <option value="PH">Filipinas</option>
          <option value="FI">Finlandia</option>
          <option value="FR">Francia</option>
          <option value="GA">Gaban</option>
          <option value="GM">Gambita</option>
          <option value="GE">Georgia</option>
          <option value="GH">Ghana</option>
          <option value="GI">Gibraltar</option>
          <option value="GD">Granada</option>
          <option value="GR">Grecia</option>
          <option value="GL">Groenlandia</option>
          <option value="GP">Guadalupe</option>
          <option value="GU">Guam</option>
          <option value="GT">Guatemala</option>
          <option value="GY">Guayana</option>
          <option value="GF">Guayana Francesa</option>
          <option value="GN">Guinea</option>
          <option value="GQ">Guinea Ecuatorial</option>
          <option value="GW">Guinea-Bissau</option>
          <option value="HT">Haiti</option>
          <option value="HN">Honduras</option>
          <option value="HU">Hungria</option>
          <option value="IN">India</option>
          <option value="ID">Indonesia</option>
          <option value="IQ">Irak</option>
          <option value="IR">Iran</option>
          <option value="IE">Irlanda</option>
          <option value="BV">Isla Bouvet</option>
          <option value="CX">Isla de Christmas</option>
          <option value="IS">Islandia</option>
          <option value="KY">Islas Caiman</option>
          <option value="CK">Islas Cook</option>
          <option value="CC">Islas de Cocos o Keeling</option>
          <option value="FO">Islas Faroe</option>
          <option value="HM">Islas Heard y McDonald</option>
          <option value="FK">Islas Malvinas</option>
          <option value="MP">Islas Marianas del Norte</option>
          <option value="MH">Islas Marshall</option>
          <option value="UM">Islas menores de Estados Unidos</option>
          <option value="PW">Islas Palau</option>
          <option value="SB">Islas Salomon</option>
          <option value="SJ">Islas Svalbard y Jan Mayen</option>
          <option value="TK">Islas Tokelau</option>
          <option value="TC">Islas Turks y Caicos</option>
          <option value="VI">Islas Virgenes (EEUU)</option>
          <option value="VG">Islas Virgenes (Reino Unido)</option>
          <option value="WF">Islas Wallis y Futuna</option>
          <option value="IL">Israel</option>
          <option value="IT">Italia</option>
          <option value="JM">Jamaica</option>
          <option value="JP">Japon</option>
          <option value="JO">Jordania</option>
          <option value="KZ">Kazajistan</option>
          <option value="KE">Kenia</option>
          <option value="KG">Kirguizistan</option>
          <option value="KI">Kiribati</option>
          <option value="KW">Kuwait</option>
          <option value="LA">Laos</option>
          <option value="LS">Lesotho</option>
          <option value="LV">Letonia</option>
          <option value="LB">Libano</option>
          <option value="LR">Liberia</option>
          <option value="LY">Libia</option>
          <option value="LI">Liechtenstein</option>
          <option value="LT">Lituania</option>
          <option value="LU">Luxemburgo</option>
          <option value="MK">Macedonia, Ex-Republica Yugoslava de</option>
          <option value="MG">Madagascar</option>
          <option value="MY">Malasia</option>
          <option value="MW">Malawi</option>
          <option value="MV">Maldivas</option>
          <option value="ML">Mali</option>
          <option value="MT">Malta</option>
          <option value="MA">Marruecos</option>
          <option value="MQ">Martinica</option>
          <option value="MU">Mauricio</option>
          <option value="MR">Mauritania</option>
          <option value="YT">Mayotte</option>
          <option value="MX">Mexico</option>
          <option value="FM">Micronesia</option>
          <option value="MD">Moldavia</option>
          <option value="MC">Monaco</option>
          <option value="MN">Mongolia</option>
          <option value="MS">Montserrat</option>
          <option value="MZ">Mozambique</option>
          <option value="NA">Namibia</option>
          <option value="NR">Nauru</option>
          <option value="NP">Nepal</option>
          <option value="NI">Nicaragua</option>
          <option value="NE">Niger</option>
          <option value="NG">Nigeria</option>
          <option value="NU">Niue</option>
          <option value="NF">Norfolk</option>
          <option value="NO">Noruega</option>
          <option value="NC">Nueva Caledonia</option>
          <option value="NZ">Nueva Zelanda</option>
          <option value="OM">Oman</option>
          <option value="NL">Paises Bajos</option>
          <option value="PA">Panama</option>
          <option value="PG">Papia Nueva Guinea</option>
          <option value="PK">Paquistan</option>
          <option value="PY">Paraguay</option>
          <option value="PE">Peru</option>
          <option value="PN">Pitcairn</option>
          <option value="PF">Polinesia Francesa</option>
          <option value="PL">Polonia</option>
          <option value="PT">Portugal</option>
          <option value="PR">Puerto Rico</option>
          <option value="QA">Qatar</option>
          <option value="UK">Reino Unido</option>
          <option value="CF">Republica Centroafricana</option>
          <option value="CZ">Republica Checa</option>
          <option value="ZA">Republica de Sudafrica</option>
          <option value="DO">Republica Dominicana</option>
          <option value="SK">Republica Eslovaca</option>
          <option value="RE">Reunion</option>
          <option value="RW">Ruanda</option>
          <option value="RO">Rumania</option>
          <option value="RU">Rusia</option>
          <option value="EH">Sahara Occidental</option>
          <option value="KN">Saint Kitts y Nevis</option>
          <option value="WS">Samoa</option>
          <option value="AS">Samoa Americana</option>
          <option value="SM">San Marino</option>
          <option value="VC">San Vicente y Granadinas</option>
          <option value="SH">Santa Helena</option>
          <option value="LC">Santa Lucia</option>
          <option value="ST">Santo Toma y Principe</option>
          <option value="SN">Senegal</option>
          <option value="SC">Seychelles</option>
          <option value="SL">Sierra Leona</option>
          <option value="SG">Singapur</option>
          <option value="SY">Siria</option>
          <option value="SO">Somalia</option>
          <option value="LK">Sri Lanka</option>
          <option value="PM">St Pierre y Miquelon</option>
          <option value="SZ">Suazilandia</option>
          <option value="SD">Sudan</option>
          <option value="SE">Suecia</option>
          <option value="CH">Suiza</option>
          <option value="SR">Surinam</option>
          <option value="TH">Tailandia</option>
          <option value="TW">Taiwan</option>
          <option value="TZ">Tanzania</option>
          <option value="TJ">Tayikistan</option>
          <option value="TF">Territorios franceses del Sur</option>
          <option value="TP">Timor Oriental</option>
          <option value="TG">Togo</option>
          <option value="TO">Tonga</option>
          <option value="TT">Trinidad y Tobago</option>
          <option value="TN">Tunez</option>
          <option value="TM">Turkmenistan</option>
          <option value="TR">Turquia</option>
          <option value="TV">Tuvalu</option>
          <option value="UA">Ucrania</option>
          <option value="UG">Uganda</option>
          <option value="UY">Uruguay</option>
          <option value="UZ">Uzbekistan</option>
          <option value="VU">Vanuatu</option>
          <option value="VE">Venezuela</option>
          <option value="VN">Vietnam</option>
          <option value="YE">Yemen</option>
          <option value="YU">Yugoslavia</option>
          <option value="ZM">Zambia</option>
          <option value="ZW">Zimbabue</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>RNC:
        <td>
          <input class="tamanoInput" type="text" name="Rnc"  id="rnc" required value="<?php echo $empresa->Rnc; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Pagina Web:
        <td>
          <input class="tamanoInput" type="text" name="PaginaWeb"  id="paginaWeb" value="<?php echo $empresa->PaginaWeb; ?>"/>
        </td>
      </th>
    </tr>
    <tr>
      <th>Direccion:
        <td>
          <input class="tamano2" type="text" name="Direccion"  id="direccion" required value="<?php echo $empresa->Direccion; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Ciudad:
        <td>
          <input class="tamanoInput" type="text" name="Ciudad"  id="ciudad" value="<?php echo $empresa->Ciudad; ?>"/>
        </td>
      </th>
    </tr>
    <tr>
      <th>Clave:
        <td>
          <input class="tamanoInput" type="password" name="Clave"  id="clave" required value="<?php echo $empresa->Clave; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Persona de contacto:
        <td>
          <input class="tamanoInput" type="text" name="PersonaContacto"  id="personaContacto" value="<?php echo $empresa->PersonaContacto; ?>"/>
        </td>
      </th>
    </tr>
    <tr>
      <th>Departamento de contacto:
        <td>
          <input class="tamanoInput" type="text" name="DepartamentoContacto"  id="departamentoContacto" required value="<?php echo $empresa->DepartamentoContacto; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Telefono de contacto:
        <td>
          <input class="tamanoInput" type="pasword" name="TelefonoContacto"  id="telefonoContacto" required value="<?php echo $empresa->TelefonoContacto; ?>"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>E-mail de contacto:
        <td>
          <input class="tamanoInput" type="text" name="EmailContacto"  id="emailContacto" value="<?php echo $empresa->EmailContacto; ?>"/>
        </td>
      </th>
    </tr>

    <tr>
      <th>Logo:
        <td>
          <button class="subirArchivo">
          <input class="botonForm" type="file" name="Logo"  id="logo" required value="<?php echo $empresa->Logo; ?>"/>*
          Adjuntar Archivo</button>
      </th>
    </tr>

    <tr>
      <th>
        <td colspan="2">
          <center>
          <button type="submit" onclick="validarEmpresa()" class="botonForm">Guardar</button>
          </center>

          <center>
          <h2>* Campos obligatorios</h2>
          </center>
        </td>
      </th>
    </tr>
  </table>
</fieldset>
</div>
</form>

<div id="divTbl">
  <!--<fieldset>
    <legend><h3>Registros Anteriores</h3></legend>
  <table id="tblDatos" align="center" rules="all">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>A que te dedicas?</th>
        <th>E-mail</th>
        <th>Pais</th>
        <th>Rnc</th>
        <th>Pagina Web</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Clave</th>
        <th>Persona de Contacto</th>
        <th>Departamento de Contacto</th>
        <th>Telefono de Contacto</th>
        <th>Email de Contacto</th>
        <th>Logo</th>
      </tr>
    </thead>
    <tbody>

      <?php

        foreach($empresas as $empresa){

          $linkEdit = base_url("/empresa/empresa/?ID={$empresa->ID}");
          $linkDelete = base_url("/empresa/delete/?ID={$empresa->ID}");
          $logo = base_url("/logo/{$empresa->Logo}");

          echo "<tr>
            <td>{$empresa->Nombre}</td>
            <td>{$empresa->Dedicarse}</td>
            <td>{$empresa->Email}</td>
            <td>{$empresa->Pais}</td>
            <td>{$empresa->Rnc}</td>
            <td>{$empresa->PaginaWeb}</td>
            <td>{$empresa->Direccion}</td>
            <td>{$empresa->Ciudad}</td>
            <td>{$empresa->Clave}</td>
            <td>{$empresa->PersonaContacto}</td>
            <td>{$empresa->DepartamentoContacto}</td>
            <td>{$empresa->TelefonoContacto}</td>
            <td>{$empresa->EmailContacto}</td>
            <td><button><a href='{$logo}'>Logo</a></button></td>

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
<style >

</style>
