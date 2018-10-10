
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body background bgcolor="red"> <br><br><br><br><br><br><br>
    <center>
  <form action="validacion.php" method="post">
    <h2>loguin</h2>
    <input type="text" placeholder="&#128272; Usuario" name="usuario" style="width: 300px; height: 20px; font-size: 20px; color: green"><br>
    <input type="password" placeholder="&#128272; Contrasena"  name="clave" style="width: 300px; height: 20px; font-size: 20px; color: green"><br>
    <input type="submit" name="procesar"  value="Iniciar Session" style="width: 300px; height: 20px; color: red">
  </form>

  
<form action="pagina.php" method="POST">
<input type="submit" name="rel" value="Registrate" a href="http://localhost/exposicion/pagina.php" style="width: 300px; height: 20px; color: red"></a>
</form>
</center>  
<!--
    <center>
        <h1>Registrate</h1><br>
     <form action="validacion.php" method="POST">
  <p>Nombre:               <input type="text" name="nombre" value="Marcos"><br><br></p>
  <p>Apellido:             <input type="text" name="apellido" value="Fernadez"><br><br></p>
  <p>CI:                   <input type="text" name="ci" value="9165024"><br><br></p>
  <p>sexo:                 <input type="text"name="sexo" value="masculino"><br><br></p>
  <p>edad:                 <input type="text" name="edad" value="20"><br><br></p>
  <p>correo:               <input type="text" name="correo" value="Marco@gmail.com"><br><br></p>
  <p>Fecha_Na:             <input type="text" name="Fecha_Na" value="1998/10/1"><br><br></p>
  <p>Usuario:              <input type="text" name="usuario" value="marcos"><br><br></p>
  <p>Clave:                <input type="password" name="clave3" value="1234"><br><br></p>   
                      <input type="submit" name="Enviar" value="Ok">
                </form>  
                </center>  
-->
</body>
</html>