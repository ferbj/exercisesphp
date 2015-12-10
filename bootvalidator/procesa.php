<?php

$nombres=$_POST["nombre"];
$correo=$_POST["email"];
$sexo=$_POST["sexo"];
$opcion=$_POST["tipo"];
$descripcion=$_POST["descripcion"];
$archivo=$_FILES['archivo']['name'];
echo "El Nombre es:" .$nombres."<br>";
echo "El Correo es:" .$correo."<br>";

foreach ($sexo as $s) {
	echo "El Sexo es:" .$s."<br>";
}

switch ($opcion){
	case 1:
	echo "La opcion elegida es: Reclamo<br>";
	break;
	case 2:
	echo "La opcion elegida es: Abuso<br>";
	break;
	case 3:
	echo "La opcion elegida es: Spam<br>";
	break;
	case 4:
	echo "La opcion elegida es: Felicitaciones<br>";
	break;
	case 5:
	echo "La opcion elegida es: Saber Mas<br>";
	break;
	default:
	echo "No ha seleccionado nada<br>";
	break;
}

echo "La Descripcion es:" .$descripcion."<br>";

if ($_FILES['archivo']['size']>3000000){
	echo "No se puede subir archivo mayor a 3 megas<br>";
	}
else{
if (is_uploaded_file ($_FILES['archivo']['tmp_name']))
{

   $nombreDirectorio = "img/";
   $idUnico = time();
   $nombreFichero = $idUnico . "-" . $_FILES['archivo']['name'];

   move_uploaded_file ($_FILES['archivo']['tmp_name'],
      $nombreDirectorio . $nombreFichero);
   echo "Fichero subido con exito<br>";

}
else
{
   print ("No se ha podido subir el fichero\n");
}
}
echo "<form name='valida' action='valida.php' method='post'>";
echo "<input type=hidden name='nomb' value=$nombres>";
echo "<input type=hidden name='mail' value=$correo>";
echo "<input type=hidden name='sex' value=$sexo>";
echo "<input type=hidden name='tip' value=$opcion>";
echo "<input type=hidden name='desc' value=$descripcion>";
echo "<input type=hidden name='arch' value=$archivo>";
echo "<input type='submit' value='validar'>";
echo "</form>";
?>