
<?php
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$ci = $_REQUEST["ci"];
$correo = $_REQUEST["correo"];
$usuario = $_REQUEST["usuario"];
$clave = $_REQUEST["clave"];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"bancario");
mysqli_query($con,"insert into registros
	values ('$nombre',$apellido,'$ci',$correo,$usuario,$clave)");
header("location: usuarios.php");
?>