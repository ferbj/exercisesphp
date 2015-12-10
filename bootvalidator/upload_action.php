<?
//$_FILES es una variable superglobal, o global automatica... no es necesario global $var;
//bytes < 1024; kb < 1048576 (size/1024); size/1048576
//directorio creado con permisos de escritura, => se guardaran las imagenes
//apply bname
//verificar que el directorio exista al igual que el archivo
//valid image type
//valid size 
//continue upload file
// require_once, include_once

// Manejar errores -->
error_reporting( E_ALL );
ini_set('display_errors', 1);

// Varible global 
$G = new stdClass();
$G->dirSave = "uploads";
$G->maxSize = "500000"; //500kb // 0.5 mb
$G->fileID = "imagen";
$G->dir = dirname( __FILE__ ); // /var/www/html/cursophp/
$G->allowExts = array( ".jpg", '.jpeg', '.gif', '.png', 'image/jpg', 'image/png', 'image/gif', 'image/jpeg');

//Incluimos al archivo de funciones --UNA SOLA VEZ--
require_once ("upload_functions.php");

//Obtener los datos del fichero o imagen a subir -->
if( !empty( $_FILES[$G->fileID]['tmp_name'] ) ){
	
	//Validar si nuestro directorio existe; sino lo creamos con la funcion mkdir y le damos permisos con chmod();
	if( !is_dir( $G->dir.'/'.$G->dirSave ) )
		mkdir( $G->dir.'/'.$G->dirSave );
	
	// Dar permisos al folder donde se guardaran las imagenes
	chmod( $G->dir.'/'.$G->dirSave, 0777 ); //permisos de escritura, lectura, modificacion//
	
	//../../imagen.jpg.php => "../../"
	//../passwd
	
	//Declaramos nuestra propiedad con los datos del archivo a subir -->
	$G->fileData = $_FILES[$G->fileID]; // array("type", "size", "name", "tmp_name")
	$G->fileData['name'] = basename($G->fileData['name']);
	
	//Obtener la extension de la imagen -->
	$extension = getImageExt( $G->fileData['name'] );
	
	//Validar que el fichero a subir, sea una imagen -->
	if( in_array( $extension, $G->allowExts) ){
		
		// Verificamos el size o tamanio del archivo -->
		if( $G->fileData['size'] < $G->maxSize ){
			
			//Generar el nombre de la imagen -->
			$nombreImagen = generarNombreArchivo( $extension );
			
			//Validar el archivo no exista aun en el servidor!
			if( !file_exists( $G->dir.'/'.$G->dirSave.'/'.$nombreImagen ) ){
				
				//Subir la imagen al servidor -->
				if( move_uploaded_file( $G->fileData['tmp_name'], $G->dir.'/'.$G->dirSave.'/'.$nombreImagen ) ){
					echo "1: Imagen subida correctamente!";
				}else{
					echo "0: La imagen no se ha podido subir!";
				}
				
			}else{
				echo "0: La imagen ya existe en el servidor!";
			}
			
		}else{
			echo "0: El tama&ntilde;o maximo de la imagen es 0.5 mb";
		}
		
	}else{
		echo "0: Solo se permiten imagenes .gif, .png, .jpg";
	}
	
}else{
	
	echo "0: Porfavor, selecciona un archivo o una imagen!";
	
}

?>
