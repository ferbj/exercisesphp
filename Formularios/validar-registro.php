<?php
if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
{
   $nombreDirectorio = "img/";
   $idUnico = time();
   $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name'];

   move_uploaded_file ($_FILES['imagen']['tmp_name'],
      $nombreDirectorio . $nombreFichero);
      print ("fichero subido con exito\n");
}
else
   print ("No se ha podido subir el fichero\n");

$nombres=$_POST['nombres'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$sexo=$_POST['sexo'];
$colores=$_POST['color'];
echo "Nombre: $nombres</br>";
echo "Usuario: $usuario</br>";
echo "Clave: $clave</br>";
echo "Sexo: $sexo</br>";
echo "Colores:</br>";
foreach ($colores as $color) {
	echo $color."</br>";
}
