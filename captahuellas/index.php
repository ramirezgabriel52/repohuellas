<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CNE Merida</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C; /*COLOR DE LOS BORDES LATERALES*/
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
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; 
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}
/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; 
}
a:visited {
	color: #6E6C64;  /*COLR DE LA LETRA DE LA DIV IZQUIERDA*/
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}
/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */
.container { /*PARTE CENTRAL DE LA PAGINA NOTOCARRRR*/
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
}
/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
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
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
}
/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: #f0f8ff; /*COLOR DEL CONTENEDOR DE LAS DIV IZQUIERDO*/
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #ADB96E;
	color: #FFF;
}
/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background-color: #f0f8ff;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
}
/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
</head>
<body>
<div class="container">
  <div class="header">
    <div align="center" class="container">
      <table width="949" height="108">
        <tr>
          <th width="169" scope="col"><img src="img/simple.jpg" width="237" height="148" alt="logo" /></th>
          <th width="589" scope="col"><em><marquee><h2>Sistema de control de asistencia de empleados CNE Merida.</h2></marquee></em></th>
          <th width="169" scope="col"></td>&nbsp;</th>
        </tr>
      </table>
    </div> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="pag/login_administrador.php">Ingreso Administrador</a></li>
      <li><a href="pag/login_empleados.php">Ingreso Empleado</a></li>
      <li><a href="http://www.cne.gov.ve/web/index.php">Pagina Oficial CNE</a></li>
      <li><a href="img/PAGINA-EN-CONSTRUCCION-PEQU.png">Vínculo cuatro</a></li>
    </ul>
    <p>&nbsp;</p>
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1 align="center">Bienvenido</h1>
    <p align="justify">Bienvenido al sistema de control de asistencia de empleados  del CNE Mérida, para acceder al sistema seleccione entre las opciones ofrecidas  en el panel izquierdo, debe ingresar usando su nombre de usuario y su  contraseña; si no está registrado en el sistema por favor comuníquese con el  administrador del mismo.</p>
<h2>Informacion</h2>
<p align="justify"> El sistema registrar las horas de entrada y salida de los  empleados; teniendo en cuenta las horas de salida al medio día, el retorno y la  salida definitiva; con estos datos el sistema puede generar un reporte de retrasos  y horas extra trabajadas por el empleado; también permite que el empleado  consulte sus horas de llegada, salida y justifique sus retrasos. Los informes  emitidos por el sistema no pueden ser modificados por ningún usuario.</p>
<p align="justify">  Solo los usuarios registrados en el sistema pueden ingresar  al mismo; para ser un usuario registrado debe comunicarse con el administrador  del sistema ya que es la única persona que puede agregar o eliminar usuarios.
    <!-- end .content --></p>
  </div>
  <div class="footer">
    <p align="center">En caso de tener problemas con el sistema favor notificarlos de inmediato al administrador, gracias.</p>
  <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>