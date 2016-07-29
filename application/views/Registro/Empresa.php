<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../csss/RegistroCandidato.css">
    <meta charset="utf-8">
    <title>Registro de Empresa</title>

    <style>
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
.dedicar{
  width: 600px;
  height: 120px;
}
  </head>
  <style >

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
      <fieldset id="fieldset">
  <legend align="center"><h1>Datos Personales</h1></legend>
  <table>
    <tr>
      <th>Nombre:
        <td>
          <input class="tamanoInput" type="text" name="Nombre"   id="nombre" value=""/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>A que te dedicas?
        <td>
          <input class="dedicar" type="text" name="dedicar"  />*
        </td>
      </th>
    </tr>
    <tr>
      <th>E-mail:
        <td>
          <input class="tamanoInput" type="text" name="Email"  id="email"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>País:</th>
      <td>
         <select name="Pais" id="pais" class="uno">
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
          <input class="tamanoInput" type="text" name="Rnc"  id="rnc"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Pagina Web:
        <td>
          <input class="tamanoInput" type="text" name="PaginaWb"  id="paginaWeb"/>
        </td>
      </th>
    </tr>
    <tr>
      <th>Direccion:
        <td>
          <input class="tamano2" type="text" name="Direccion"  id="direccion"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Ciudad:
        <td>
          <input class="tamanoInput" type="password" name="Ciudad"  id="ciudad"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Clave:
        <td>
          <input class="tamanoInput" type="pasword" name="Clave"  id="clave"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Persona de contacto:
        <td>
          <input class="tamanoInput" type="pasword" name="PersonaContacto"  id="personaContacto"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>Telefono de contacto:
        <td>
          <input class="tamanoInput" type="pasword" name="TelefonoContacto"  id="telefonoContacto"/>*
        </td>
      </th>
    </tr>
    <tr>
      <th>E-mail de contacto:
        <td>
          <input class="tamanoInput" type="text" name="EmailContacto"  id="emailContacto"/>*
        </td>
      </th>
    </tr>

    <tr>
      <th>Logo:
        <td>
          <button class="subirArchivo">
          <input class="botonForm" type="file" name="Curriculum" id="logo"/>*
          Adjuntar Archivo</button>
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
