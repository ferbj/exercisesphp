<?php

 $conexion= mysqli_connect("localhost","root","","biblioteca");
   if(mysqli_connect_errno())
	{
		echo mysqli_connect_error();
	}else
	{
		echo "Se ha realizado la conexión<br>";
	}
  if($_POST)
  {
  	$nombrecompleto= $_POST['nombrecompleto'];
    $cuota= $_POST['cota'];
	$cedula= $_POST['cedula'];
	$fecha= $_POST['fecha'];
	$descripcion= $_POST['descripcion'];
 	$usuario= $_POST['usuario'];
 	$existencia= 10;

 	//mysql_select_db("biblioteca",$conexion);	

	//busco en la tabla devolucion si el cliente devolvio el libro ,
        $buscarnombrecompleto = "SELECT * FROM devolucion WHERE nombrecompleto ='$nombrecompleto'";

        $result = $conexion->query($buscarnombrecompleto);

        $count = mysqli_num_rows($result);

        if ($count == 1){
         echo "El Senor  $nombrecompleto 'no ha hecho la devolucion" . '<br>';

        header('Refresh: 5; URL=medio.php');

 		}

        else{
		
	// QUiero actualizar la existencia del libro pedido
	 $actualizar="UPDATE libro SET existencia='$existencia-1' WHERE cuota= '$cuota'";
	 if($conexion->query($actualizar))
	 {
	 	echo "se actualizo";

	 }
	 else 
	 {
	 	echo $actualizar."<br>";
	 	echo "error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	 }

	 //ingreso los datos en la tabla prestamo
$insertar="INSERT INTO prestamo(nombrecompleto,cuota,cedula,fecha,descripcion,usuario VALUES '$nombrecompleto','$cuota','$cedula','$fecha','$usuario'";
if($conexion->query($insertar))	
	{
	//me lleva a la pagina medio.
		echo "se inserto";
	//header('Refresh:5;url=medio.php');
	
	}
	else
	{
	echo $insertar."<br>";
	 	echo "error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;	
	}
}
}
	mysqli_close($conexion);
	
	
?>