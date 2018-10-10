<?php  

 	require 'conexion.class.php';
 	
	if(isset($_GET['cod_registro']))
	{
		$db=new conexion();
		$id_cliente=$_GET['cod_registro'];
	//echo $id;

		if(!is_numeric($id_cliente)){	
			die('la informacion es incorrecta!');
		}
		$query="SELECT * FROM registro WHERE cod_registro=$id_cliente";
		//echo $query;s
		$res=$db->query($query);
		$datos=mysqli_fetch_array($res);		
	}
	else{
		header("location:editar.php");

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


 <center>		
 <form  action="validacion.php" method="POST">
 Nombre:      <input type="text" name="name" value="<?php echo $datos[1]?>"><br><br>
 apellido:    <input type="text" name="apellido" value="<?php echo $datos[2] ?>"><br><br>
 CI:          <input type="text" name="ci"   value="<?php echo $datos[3]  ?>"><br><br>
 sexo:          <input type="text" name="sexo"   value="<?php echo $datos[4]?>"><br><br>
 edad:          <input type="text" name="edad"   value="<?php echo $datos[5]?>"><br><br>
 Correo:      <input type="text" name="correo"  value="<?php echo $datos[6] ?>"><br><br>
 fecha_Na:          <input type="text" name="fecha_Na"   value="<?php echo $datos[7]  ?>"><br><br>
 Usuario:     <input type="text" name="usuario"  value="<?php echo $datos[8]  ?>"><br><br>
 Clave:       <input type="password" name="clave"  value="<?php echo $datos[9]  ?>"><br><br>
 <input type="submit" name="editar"  value = 'Guardar'>
</center>
</form>
</body>
</html>