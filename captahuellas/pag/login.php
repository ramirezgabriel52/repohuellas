<?php

// conecion a la base de datos
$host = "localhost"; 
$user = "root"; 
$psw  = "cne"; 
$db   = "otro"; 
function Conectarse() 
{ 
global $host, $user, $psw, $db;
//$psw
   if (!($link=mysql_connect("$host","$user","$psw"))) 
   { 
      echo "HAY UN ERROR CON LA BASE DE DATOS"; 
      exit(); 
   } 
   if (!mysql_select_db("$db",$link))
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

$link = Conectarse();
// Recuperacion y creacion de variables
$a           = $_POST['a'];
$nombre      = htmlspecialchars ($_POST['nombre']) ;
$password    = md5 (htmlspecialchars($_POST['password']));

function form(){ 
echo "<link href=\"estilo.css\" rel=\"stylesheet\" type=\"text/css\">
<body scroll=\"auto\">
<SCRIPT LANGUAGE=\"JavaScript\">
function llenar() {
   if (form.nombre.value == \"\") {
   alert ('Debes llenar el campo de Nombre');
   return false;
   }
   if (form.password.value == \"\") {
   alert ('Debes de ingresar tu contraseña');
   return false;
   }
   return true;
}
</SCRIPT>
<form action=\"$PHP_SELF\" method=\"POST\" name=\"form\" onSubmit=\"return llenar()\"><input type=\"hidden\" name=\"a\" value=\"1\">
  <table width=\"70%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"windowbg2\">
    <tr> 
      <td><div align=\"center\"> 
          <table width=\"65%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
            <tr> 
              <td colspan=\"2\">Bienvenido al sistema por favor llena 
                los siguientes campos... </td>
            </tr>
            <tr> 
              <td>Nombre</td>
              <td><input name=\"usuario\" type=\"text\" class=\"colour1\"></td>
            </tr>
            <tr> 
              <td>Contrase&ntilde;a</td>
              <td><input name=\"password\" type=\"password\" class=\"colour1\"></td>
            </tr>
            <tr> 
              <td><input name=\"enviar\" type=\"submit\" value=\"Enviar datos\" class=\"button\"></td>
              <td><input name=\"borrar\" type=\"reset\" value=\"Borrar formulario\" class=\"button\"></td>

	      <td> <input type='button' value='Registrar' onClick=location.href='registrar.php'></td>
	      </tr>
		
          </table>
        </div></td>
    </tr>
  </table>
  <br>
</form>
<SCRIPT language=\"JavaScript\">
<!--
document.forms[0].nombre.focus();
//-->
</SCRIPT>


<table width=\"70%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"windowbg2\">
  <tr>
    <td><div align=\"justify\"> 
        <p>Ten en cuenta que el sistema difiere entre mayusculas y minusculas 
          en la contrase&ntilde;a, asi que por favor escribe bien tu contrase&ntilde;a, 
          si aun no estas registrado, olvidaste tu contrase&ntilde;a, o tienes 
          duda de como utilizar el sistema contacta al administrador de este sitio, 
          cuando estan mal escritos los datos del formulario, seras redirigido 
          a esta pagina y no puedes accesar al sistema...<br>
          
      </div></td>

  </tr>

<tr>
<td>
<p> 	Si no eres usuario registrado puedes hacer click aqui para registrarte :
<a href = registrar.php> REGISTRAR </a>
</td>
</tr>


</table> "; }

switch ($a) {
   case 1:
         
         //Sentencia SQL para buscar un usuario con esos datos 
         $c_usuario = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password'"; 
         //Ejecuto la sentencia 
         $r_usuario = mysql_query("$c_usuario",$link) or die(mysql_error()); 
         $r_ok = mysql_fetch_array($r_usuario);
         //////////////////////////////////////////////////////// 
		 
      if($r_ok['usuario'] != $nombre && $r_ok['password'] != $password){
         $acceso = "no";
         echo "<center>Nombre de usuario o contraseña incorrecta<br>
              por favor <b>intena de nuevo</b></a></center>";
         form();
         }
      else{
         $user_dat = mysql_query("SELECT * FROM usuario WHERE ID='$user_ID'") or die(mysql_error());
         $datos = mysql_fetch_array($user_dat);
         $user_ID = $r_ok['ID'];
         $user = $r_ok['usuario'];
         $acceso = "ok";
         setcookie("nombre",$user_ID,time()+3600);
         setcookie("password",$password,time()+3600);
         header("LOCATION: acceso.php"); // Aqui es que se pone el que siga despues .php
	 //despues de que se ingesen bien los datos
         }
         
   break;
   default:
   $acceso = "no";
      form ();
   break;
}
mysql_close($link); //cierra la conexion 

