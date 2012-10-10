
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

      	 while ($fila = odbc_fetch_object($rs_access)){ 

         	 echo "<br>" . $fila->USERID . $fila->CHECKTIME; 
      	 } 
   	}else{ 
      	 echo "Error al ejecutar la sentencia SQL"; 
   	} 
} else{ 
   	echo "Error en la conexión con la base de datos"; 

}
//cierra la conexion
<table width="200" border="1">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
 
?>