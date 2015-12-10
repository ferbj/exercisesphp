<?php
if ($_POST){
$nombres=$_POST["nombre"];
$correo=$_POST["email"];
$sexo=$_POST["sexo"];
$opcion=$_POST["opcion"];
$descripcion=$_POST["descripcion"];
$archivo=$_FILES['archivo']['name'];
}
echo "Los datos insertados son los siguientes"."<br>";
echo "El Nombre es:" .$nombres."<br>";
echo "El Correo es:" .$correo."<br>";

foreach ($sexo as $s) {
	echo "El Sexo es:" .$s."<br>";
}
echo "La Opcion es:" .$opcion."<br>";
echo "La Descripcion es:" .$descripcion."<br>";

if (is_uploaded_file ($_FILES['archivo']['tmp_name']))
{
   $nombreDirectorio = "img/";
   $idUnico = time();
   $nombreFichero = $idUnico . "-" . $_FILES['archivo']['name'];

   move_uploaded_file ($_FILES['archivo']['tmp_name'],
      $nombreDirectorio . $nombreFichero);
   echo "Fichero subido con exito";
}
else
   print ("No se ha podido subir el fichero\n");


echo "<a href='valida.php'>Validar</a>";

?>