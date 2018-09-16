<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha=$_POST['fecha'];
if(isset($nombre) && !empty($nombre) &&
isset($apellido) && !empty($apellido)){

	$con=mysql_connect("localhost","root","") or die ("problemas al conectar con el servidor");
	mysql_select_db("proyectoprogramcion3",$con);
	mysql_query("INSERT INTO empleado (name,last) VALUES ('$nombre','$apellido)",$con);
}
else{
	echo "problemas al insertar datos";
}
?>