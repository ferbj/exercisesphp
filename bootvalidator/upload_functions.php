<?php
function getImageExt( $nombreImagen ){
	
	//imagen.jpg.gif --> .gif
	//return ".jpg"
	$ext = strrchr( $nombreImagen, "." );
	
	return $ext;
	
}

function generarNombreArchivo( $ext ){
	
	$uniq_name = md5(uniqid(time()*mt_rand()));
	
	//uniq_name = xyz
	//.gif, .png, .jpg
	return $uniq_name.$ext; //xyz.gif, xyz.png
	
}
