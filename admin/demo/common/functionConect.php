<?php 
include('config.php');
function conectar()
{
$server=DB_HOSTNAME;
$user=DB_USERNAME;
$pass=DB_PASSWORD;
$DB=DB_DATABASE;
if (!$conexion=mysql_connect($server,$user,$pass))
{
echo "Error al conectar a la base de datos ".mysql_error();;	
exit();
}
 if (!@mysql_select_db($DB,$conexion)) 
			{
		   echo "Error al seleccionar la base de datos ".mysql_error();;  
		   exit();
			}
}
?>