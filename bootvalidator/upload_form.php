<!DOCTYPE html>
<html>
<head>
	<title>Subida de Imagenes - Curso de desarrollo web </title>
	<!-- Boostrap Recursos -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- Estilos locales -->
	<style>
	body{margin:0;padding:0; background: #eee; }
	form{
		border: 3px solid #ccc;
		margin: 20px auto;
		max-width: 400px;
		padding: 15px;
		background: #fff;
		border-radius: 5px;
		-moz-border-radius: 5px;
		-ms-border-radius: 5px;
	}
	</style>
	
</head>
<body>
	
	<div class="container">
	
		<form role="form" method="POST" action="./upload_action.php" enctype="multipart/form-data">
			
			<div class="file-group">
			
				<label>Subir una imagen al servidor:</label>
				<input type="file" name="imagen" id="imagen" accept="image/*">
			
			</div>
			
			<hr>
			
			<div class="form-group">
			
				<button class="btn btn-primary" id="sendFile" type="submit" name="sendFile">Subir imagen</button>
				
			</div>
			
		</form>
	
	</div>

	

</body>
</html>
