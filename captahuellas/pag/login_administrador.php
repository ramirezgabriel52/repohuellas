<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CNE Merida</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}
/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { 
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	
	padding-right: 15px;
	padding-left: 15px; 
}
a img { 
	border: none;
}
a:link {
	color: #42413C;
	text-decoration: underline; 
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
}
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; 
}
.header {
	background-color: #ADB96E;
}
.sidebar1 {
	float: left;
	width: 180px;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 780px;
	float: left;
}
/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}
ul.nav {
	list-style: none;
	border-top: 1px solid #666; 
	margin-bottom: 15px; /
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { 
	padding: 5px 5px 5px 15px;
	display: block; 
	width: 160px;  
	text-decoration: none;
	background-color: #f0f8ff;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #ADB96E;
	color: #FFF;
}
/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background-color: #f0f8ff;
	position: relative;
	clear: both; 
}
/* ~~ clases float/clear varias ~~ */
.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat { 
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>
<body>
<div class="container">
  <div class="header">
    <div align="center" class="container">
      <table width="949" height="108">
        <tr>
          <th width="169" scope="col"><img src="../img/simple.jpg" width="237" height="148" alt="logo" /></th>
          <th width="589" scope="col"><em><marquee><h2>Sistema de control de asistencia de empleados CNE Merida.</h2></marquee></em></th>
          <th width="169" scope="col">&nbsp;</th>
        </tr>
      </table>
    </div> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href=>Ingreso Administrador</a></li>
      <li><a href="login_empleados.php">Ingreso Empleado</a></li>
      <li><a href="http://www.cne.gov.ve/web/index.php">Pagina Oficial CNE</a></li>
      <li><a href="../index.php">Inicio</a></li>
    </ul>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1 align="center">Ingreso para administrador.</h1>
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
function llenar()
 {
   if (form.nombre.value == \"\") {
   alert ('Debes llenar el campo de Nombre');
   return false;
   }
   if (form.password.value == \"\") {
   alert ('Debes de ingresar tu contraseña');
   return false;
   }
   else 
   {
   return true;
   }
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
              <td><input name=\"nombre\" type=\"text\" class=\"colour1\"></td>
            </tr>
            <tr> 
              <td>Contrase&ntilde;a</td>
              <td><input name=\"password\" type=\"password\" class=\"colour1\"></td>
            </tr>
            <tr> 
              <td><input name=\"enviar\" type=\"submit\" value=\"Enviar datos\" class=\"button\"></td>
              <td><input name=\"borrar\" type=\"reset\" value=\"Borrar formulario\" class=\"button\"></td>
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
        <p>Se debe tener en cuenta que el sistema difiere entre mayusculas y minusculas en el nombre y la contraseña, cuando estan mal escritos los datos del formulario sera redirigido a esta pagina y no podra acceder al sistema.<br>       
      </div></td>
  </tr>
</table> "; 
}
switch ($a)
 {
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
        // setcookie("nombre",$user_ID,time()+3600);
        // setcookie("password",$password,time()+3600);
}         
   break;
   default:
   $acceso = "no";
      form ();
   break;
}
mysql_close($link); //cierra la conexion 
?>
<h2>Informacion</h2>
<p align="justify"><!-- end .content -->Esta sección del sistema es solo para el ingreso de usuarios  tipo administrador, si no es un usuario tipo administrador por favor regrese y  seleccione otra opción. </p>
</div>
  <div class="footer">
    <p align="center">En caso de tener problemas con el sistema favor notificarlos de inmediato al administrador, gracias.</p>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>