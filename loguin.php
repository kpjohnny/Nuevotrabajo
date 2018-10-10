
<!DOCTYPE html>
<html>
<head>	
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="estilos.css">
  <title>Sistema Bancario</title>
</head>
<body>
  <!--este es diseño que llama  a la base datos -->
<header>
    <nav>        
          <ul>
            <li><a href="Transacciones.php">Transacciones</a></li><!--retiro deposito -->
           <!-- <li> <a href=""> Usuarios</a></li> <!--usuario clave--> 
           <li> <a href="usuarios.php">Lista de Usuarios</a></li>
           <!--
            <li><a href="repuestos.php">Deposito</a></li>
            <li><a href="accesorios.php">Retiro</a></li>
            <li><a href="productos.php">Impuestos</a></li>-->
            <li><a href="">Plataformas</a></li>
          </ul>           
    </nav>
    </header>  
    <br>
    <br>
  
    <center>
        <h1>Registrate</h1><br>
     <form action="ABM.php" method="POST">
   <p> Nombre:           <input type="text" name="nombre" ><br><br></p>
  <p> Apellido:           <input type="text" name="apellido"><br><br></p>
  <p>  CI:               <input type="text" name="ci"><br><br></p>
  <p>  correo:           <input type="text" name="correo"><br><br></p>
  <p> Usuario:           <input type="text" name="usuario"><br><br></p>
<p>Repite clave:         <input type="password" name="clave"><br><br></p>
                      <input type="submit" name="registro" value="procesar">
                </form>  
                </center>    
</body>
</html>
