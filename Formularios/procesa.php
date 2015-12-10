<?php
if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
{
   $nombreDirectorio = "img/fotos/";
   $idUnico = time();
   $nombreFichero = $idUnico . "-" . $_FILES['imagen']['name'];

   move_uploaded_file ($_FILES['imagen']['tmp_name'],
      $nombreDirectorio . $nombreFichero);
      print ("fichero subido con exito\n");
}
else
   print ("No se ha podido subir el fichero\n");
