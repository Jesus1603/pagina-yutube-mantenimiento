<?php

$conexion=mysql_connect ("localhost","root","") or die ("no se ha podido conectar a la base de datos"); 
mysql_select_db("bdejemplo",$conexion) or die ("No existe la base de datos");

$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];

mysql_query("INSERT INTO registro(Nombre, Direccion,Correo) values ('$Nombre', '$Direccion', '$Correo')",$conexion);
echo "<h1 >Datos guardados correctamente </h1>";




?>
