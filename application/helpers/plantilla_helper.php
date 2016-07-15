<?php
  class plantilla{

    static $plantilla = null;

    static function start(){
      self::$plantilla = new plantilla();
    }

    function __construct(){
      ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <style>
          #contenedor{
            width: 80%;
            height: 1230px;
            margin: auto;
            background: #E0F8F7;



        }
          header{
            width: 100%;
            height: 140px;
            background: white;
            float: left;

          }
          #registro{
            width: 30%;
            height: 140px;
            background: white;
            float: right;

          }
          #registro img{
            margin-left: 2%;
          }
          #busqueda{
            width: 100%;
            align-text :center;
            background: white;
          }
          #botones{
            width: 100%;
            height: 80px;
            background: black;
          border-top-left-radius: 40px;
          border-top-right-radius:40px;


          }
           button{

        width: 155px;
        height: 30px;
        background: #58ACFA;
      border-radius: 20px;


           }
           #tablaRegistro{
             width: 90%;
             margin: auto;
           }
           .busqueda{
             margin: auto;
           }
           th{
             font-size: 24px ;
           }
           #footer{
             width: 80%;
             height: 120px;
             margin: auto;
             background: black;
             border-bottom-left-radius: 40px;
             border-bottom-right-radius: 40px;
       	float: none;
          	text-align: center;
           }
           #footer li{
             font-size:20px;
             padding: 2%;

           }

      nav ul{

      text-align:center;
      size: 18;
      margin: 3;
      }
      a {
      text-decoration: none;
      color: white;
      }
      nav ul li{
      padding:5px;
      display: inline-block;

      }


              </style>
          <title>Portal de Empleo</title>
        </head>
        <body>

          <div id="contenedor">
            <header>
              <img src="img/empleate.png" width=300px>
              <div id="registro">
                  <center><h2><strong>Iniciar Sesión</strong> como: </h2></center>
                  <table  id="tablaRegistro">
                    <tr>
                      <td><a href="<?php echo base_url('candidato'); ?>"><button  type="submit" name="candidato" id="boton">CANDIDATO</button></a></td>
                    <td><a href="<?php echo base_url('empresa'); ?>"><button type="submit" name="empresa" id="boton"> EMPRESA</button></a></td>
                           </tr>
                </table>
                  </div>
          </header>
            <div id="busqueda">
                <form method="" >
                  <table class="busqueda">
                    <tr>
                      <th>Que empleo buscas ?</th>
                      <td><input  style=" height:100%;  "type="text" name="buscarempleo"/>  </td>
                      <th>Donde ?</th>
                      <td> <select name="ciudad" id="ciudad" style='padding:5px;border-color:#eee'>
                 <option value="" selected></option>
                 <option value='Azua'>Azua</option><option value='Baní'>Baní</option><option value='Barahona'>Barahona</option><option value='Bonao'>Bonao</option><option value='Comendador'>Comendador</option><option value='Cotuí'>Cotuí</option><option value='Dajabón'>Dajabón</option><option value='El Seibo'>El Seibo</option><option value='Esperanza'>Esperanza</option><option value='Hato Mayor'>Hato Mayor</option><option value='Higüey'>Higüey</option><option value='Jimaní'>Jimaní</option><option value='La Romana'>La Romana</option><option value='La Vega'>La Vega</option><option value='Mao'>Mao</option><option value='Moca'>Moca</option><option value='Monte Cristi'>Monte Cristi</option><option value='Monte Plata'>Monte Plata</option><option value='Nagua'>Nagua</option><option value='Neyba'>Neyba</option><option value='Pedernales'>Pedernales</option><option value='Puerto Plata'>Puerto Plata</option><option value='Sabaneta'>Sabaneta</option><option value='Salcedo'>Salcedo</option><option value='Samaná'>Samaná</option><option value='San Cristóbal'>San Cristóbal</option><option value='San Francisco de Macorís'>San Francisco de Macorís</option><option value='San Juan de la Maguana'>San Juan de la Maguana</option><option value='San Pedro de Macorís'>San Pedro de Macorís</option><option value='Santiago'>Santiago</option><option value='Santo Domingo'>Santo Domingo</option><option value='Villa Altagracia'>Villa Altagracia</option><option value='Bávaro'>Bávaro</option><option value='Haina'>Haina</option><option value='Punta Cana'>Punta Cana</option><option value='Jarabacoa'>Jarabacoa</option><option value='Las Terrenas'>Las Terrenas</option><option value='Constanza'>Constanza</option><option value='Boca Chica'>Boca Chica</option><option value='Navarrete'>Navarrete</option>   </select>  </td>
                      <td><a href=''><img src="img/buscar.png" height=25></a></td>
                    </tr>
                  </table>
                </form>

            </div>
            <div id="botones">
              <table id="tablamenu" style="margin: auto; -moz-border-radius: 15px 15px 15px 15px; width: 70%;  padding: 1%; margin-left: 20%; ">
                <tr>

                  <td><a href="<?php echo base_url('empleo'); ?>"><button style="height:50px; " type="submit" name="empleos" id="boton" >EMPLEOS</button></a></td>
                <td><a href="<?php echo base_url('curriculum'); ?>"><button  style="height:50px; "type="submit" name="curriculums" id="boton"> CURRICULUMS</button></a></td>
                <td><a href="<?php echo base_url('registro'); ?>"><button style="height:50px;" type="submit" name="registrarse" id="boton" > REGISTRARTE</button></a></td>
                       </tr>

            </table>
            </div


      <?php
    }

    function cuerpo(){
      ?>



      <?php
    }

    function __destruct(){
      ?>



      <?php
    }
  }
 ?>
