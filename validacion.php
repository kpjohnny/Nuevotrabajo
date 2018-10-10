<?php
require 'conexion.class.php';
$db=new Conexion();

if(isset($_POST['Enviar']))
{

		$nom = $_POST['nombre'];
		$ape = $_POST['apellido'];
		$ci= $_POST['ci'];
		$edad = $_POST['edad'];
		$sexo = $_POST['sexo'];
		$correos = $_POST['correo'];
		$fecha = $_POST['Fecha_Na'];
		$usu = $_POST['usuario'];
		$clav = $_POST['clave3'];
                    $query="INSERT INTO registro(cod_registro,idcli,nombre,apellido,edad,sexo,Fecha_Nacimiento,correo,usuario,clave) VALUES (4,'$ci','$nom','$ape','$edad','$sexo','$fecha',$usu','$csorreos','$clav')";
		$result=$db->query($query);
		if($db->affected_rows<0)
		{
			header("location: Lista.php?error=Hubo un problema");
		}
		else
		{
			header("location:Lista.php");
		}
		
	}
/*
$db=new Conexion();

	if(isset($_POST['editar'])){	
		$nombre = $_POST['nombre'];		
		$apellido=$_POST['apellido'];
		$ci=$_POST['ci'];
		$sexo = $_POST['sexo'];
		$edad = $_POST['edad'];
		$correo=$_POST['correo'];
		$fecha = $_POST['Fecha_Na'];
		$usuario=$_POST['usuario'];	
		$clave=$_POST['clave'];
		$query= "UPDATE registro set nombre = '$nombre',apellido = '$apellido',ci = '$ci',sexo = '$sexo',edad = '$edad',correo = '$correo', fecha_Nacimiento = '$fecha',usuario = '$usuario', clave = '$clave' WHERE nombre = '$nombre'";
		$result=$db->query($query);

		if($db->affected_rows>0)
		{
			header("location: Lista.php?error=Hubo un problema");
			imap_alerts("correcto");
		}else
		{
			header("location: Lista.php");
		}

	}
*/
$db=new Conexion();
	session_start();	
	if(isset($_POST['procesar'])){
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];	
	$db=new Conexion();
	$query="SELECT * FROM administrador WHERE usuario='$usuario' and clave='$clave'";
	$res=$db->query($query);
	$filas = $res->num_rows;
	if($filas>0){
		$_SESSION['usuario']=$cuenta;
		$_SESSION['clave']=$clave;
		header("location:admi.php");
	}else{
		echo "error en la autentificación";
	}
	//liberar el espacio de la consulta y cerra la conexion
	$db->close();
}
$db=new Conexion();
	session_start();	
	if(isset($_POST['procesar'])){
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];	
	$db=new Conexion();
	$query="SELECT * FROM registro WHERE usuario='$usuario' and clave='$clave'";
	$res=$db->query($query);
	$filas = $res->num_rows;
	if($filas>0){
		$_SESSION['usuario']=$cuenta;
		$_SESSION['clave']=$clave;
		header("location:transacciones.php");
	}else{
		echo "error en la autentificación";
	}
	//liberar el espacio de la consulta y cerra la conexion
	$db->close();








}

$db=new Conexion();
	if(isset($_POST['cuenta'])){	
	
		$cuenta = $_POST['cuenta'];
		$pin = $_POST['pin'];
		$query = "SELECT cuenta, pin from cuenta set cuenta = $cuenta, pin = $pin";

		/*
		$query= "UPDATE cuenta set fecha_Nacimiento = '$fecha',usuario = '$usuario', clave = '$clave' WHERE nombre = '$nombre'";	
		*/																
		$result=$db->query($query);

		if($db->affected_rows>0)
		{
			header("location: cuenta.php?error=Hubo un problema");
			imap_alerts("correcto");
		}else
		{
			header("location: cuenta.php");
		}

	}
