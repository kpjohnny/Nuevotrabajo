<!DOCTYPE html>
<html>
<head>
	<title>Listado</title>
</head>
<body>
	<center>
		<h1>Lista de Usuarios</h1>
<table border="3">
	<tr>
		<th>id_cliente</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>CI</th>
		<th>sexo</th>
		<th>edad</th>
		<th>Correo</th>
		<th>Fecha_Na</th>
		<th>Usario</th>
		<th>Clave</th>
		<th>Editar</th>
		<th>Eliminar</th>
	</tr>
</center>
</body>
</html>
<?php
require 'conexion.class.php';
			$db=new Conexion();
			$query="SELECT * FROM registro";
			$res=$db->query($query);			
			$table='';
			while($row=mysqli_fetch_array($res)){
				$table.="<tr>";	
				$table.="<td>$row[cod_registro]</td>";
				$table.="<td>$row[nombre]</td>";
				$table.="<td>$row[apellido]</td>";
				$table.="<td>$row[ci]</td>";	
				$table.="<td>$row[sexo]</td>";
				$table.="<td>$row[edad]</td>";
				$table.="<td>$row[correo]</td>";
				$table.="<td>$row[Fecha_Nacimiento]</td>";
				$table.="<td>$row[usuario]</td>";
				$table.="<td>$row[clave]</td>";
				$table.="<td><a href =\"editar.php?cod_registro=$row[cod_registro]\">Editar</a></td>";
				$table.="<td><a href =\"eliminar.php?cod_registro=$row[cod_registro]\">Eliminar</a></td>";	
				$table.="</tr>";
			}
			echo $table;
  ?>