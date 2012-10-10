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
.content ul, .content ol { 
	padding: 0 15px 15px 40px; 
}
ul.nav {
	list-style: none; 
	border-top: 1px solid #666; 
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
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
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { 
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
      <li><a href="../img/PAGINA-EN-CONSTRUCCION-PEQU.png">Informes</a></li>
      <li><a href="../img/PAGINA-EN-CONSTRUCCION-PEQU.png">Gestion</a></li>
      <li><a href="../img/PAGINA-EN-CONSTRUCCION-PEQU.png">Consultas</a></li>
      <li><a href="../index.php">Salir</a></li>
    </ul>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1 align="center">Administrador.</h1>
    <div align="center">
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
function formRegistro()
{  
  ?>
    </div>
    <div align="center">
  <table width=\"70%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"windowbg2\">
    <tr> 
      <td><div align=\"center\"> 
        
        <form action="index.php" method="post">
          <div align="center">Usuario (max 20):
            <input type="text" name="usuario" size="20" maxlength="20" /><br />                      
            Password (max 10):            
            <input type="password" name="password" size="10" maxlength="10" />            
            Confirma: <input type="password" name="password2" size="10" maxlength="10" /><br />                       
            Nombre (max 20):            
            <input type="text" name="nombre" size="20" maxlength="20" /><br />                        
            Apellido (max 20):            
            <input type="text" name="apellido" size="20" maxlength="20" /><br />                        
            Email (max 40):            
            <input type="text" name="email" size="20" maxlength="40" /><br />           
            <input type="submit" value="Registrar" />         
            <input type="reset" type="reset" value="Borrar formulario" class="button\">          
          </div>          
          </form>
        </td>
      </tr>
  </table>     
  <?php   
 }    
// verificamos si se han enviado ya las variables necesarias.    
if (isset($_POST["usuario"])) 
{       
   $usuario = $_POST["usuario"];     
   $password = $_POST["password"];  
   $password2 = $_POST["password2"]; 
   $nombre = $_POST["nombre"];
   $apellido= $_POST["apellido"];     
   $email = $_POST["email"];       
 // Hay campos en blanco       
 if($usuario==NULL|$password==NULL|$password2==NULL|$apellido==NULL|$nombre==NULL|$email==NULL) 
{      
     echo "un campo est&aacute; vacio.";
     formRegistro();      
  }
else
{          
 // ¿Coinciden las contrase&ntilde;as?
            if($password!=$password2) 
{               
 echo "Las contrase&ntilde;as no coinciden";   
             formRegistro();          
}
else
{               
 // Comprobamos si el nombre de usuario o la cuenta de correo ya exist&iacute;an           
     $checkuser = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario'");
     $usuario_exist = mysql_num_rows($checkuser);          
     $checkemail = mysql_query("SELECT * FROM usuario WHERE email='$email'");
     $email_exist = mysql_num_rows($checkemail);   
  
             if ($email_exist>0|$usuario_exist>0) 
{
                    echo "El nombre de usuario o la cuenta de correo estan ya en uso";              
      formRegistro();             
 }
else
{
                    $query = 'INSERT INTO usuario(usuario, password, nombre, apellido, email)    
                VALUES (\''.$usuario.'\',\''.$password.'\',\''.$nombre.'\',\''.$apellido.'\',\''.$email.'\')';                
                 mysql_query($query) or die(mysql_error());  
                  echo 'El usuario '.$usuario.' ha sido registrado de manera satisfactoria.<br />';  
                  echo 'Ahora puede entrar ingresando su usuario y su password <br />';
 } 
      ?>    
  <?php                  
 }
            }
        }    
else
{     
 formRegistro();
    }
?>       
    </div>
    <h2>Informacion</h2>
<p align="justify"><!-- end .content -->Esta sección del sistema es solo para el ingreso de usuarios  tipo administrador, Por medio de la opción Informes en el panel izquierdo se pueden consultar las horas de llegadas y salidas de los empleados, en la opción gestión permite registrar o eliminar empleados y en la opción Consultas puede ver las justificaciones de retrasos y actividades de los empleados.  </p>
</div>
  <div class="footer">
    <p align="center">En caso de tener problemas con el sistema favor notificarlos de inmediato al administrador, gracias.</p>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>