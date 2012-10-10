<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php

 //$Usuario = strtolower(htmlentities($HTTP_POST_VARS["Usuario"], ENT_QUOTES));
//$Usuario = htmlentities($HTTP_POST_VARS["Usuario"], ENT_QUOTES);
// conecion a la base de datos

$conn_access = odbc_connect ("captahuellas", "", "");

$rs_access = odbc_exec ($conn_access, "select USERID, CHECKTIME from CHECKINOUT ");//where USERID= '$Usuario'

if ($conn_access = odbc_connect ( "captahuellas", "", "")){ 
   	echo "Conectado correctamente";

   	$ssql = "select USERID, CHECKTIME from CHECKINOUT"; // where USERID=?"

//$Usuario = htmlentities($HTTP_POST_VARS["Usuario"], ENT_QUOTES);
//$Usuario = $_GET['USERID'];
//$stmt = odbc_prepare($db_conn, $ssql);
//$res = odbc_execute($stmt, $Usuario);

   	if($rs_access = odbc_exec ($conn_access, $ssql)){ 
      	 echo "La sentencia se ejecutó correctamente"; 

      	 while ($fila = odbc_fetch_object($rs_access))
		 { 
       	echo "<br>" . $fila->USERID; // . $fila->CHECKTIME; 
		echo "<br>" . $fila->CHECKTIME;
      	 } 
   	}else{ 
      	 echo "Error al ejecutar la sentencia SQL"; 
   	} 
} else{ 
   	echo "Error en la conexión con la base de datos"; 

}

//cierra la conexion
?>

<table width="200" border="1">
  <tr>
    <th scope="col">&nbsp;
    echo . $fila->USERID;
    </th>
    <th scope="col">&nbsp;
    echo . $fila->CHECKTIME;
    </th>
  </tr>
</table>

<body>
</body>
</html>