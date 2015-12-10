<!DOCTYPE html>
<html>
<body>

<p>Ejercicio 03</p>
<form action="procesa.php" method="POST" enctype="multipart/form-data">
<fieldset style="width:200px">
<legend>Ingrese los siguientes datos:</legend>
<table>
		<tr>
			<td><label>Nombres:</label></td>
			<td><input type="text" name="nombre" size="40"></td>
		</tr>	
		<tr>
			<td><label>Correo:</label></td>
			<td><input type="email" name="correo" size="30"></td>
		</tr>	
				<td><label>Sexo:</label></td>
			<td><input type="radio" name="sexo[]" value="M">Masculino
			<input type="radio" name="sexo[]" value="F">Femenino</td>
		</tr>	
		<tr>
			<td><label>Select</label></td>
			<td>
			<select name="opcion">
				<option value="">Seleccione una Opcion</option>
				<option value="Reclamo">Reclamo</option>
				<option value="Abuso">Abuso</option>
				<option value="Spam">Spam</option>
				<option value="Felicidades">Felicidades</option>
			</select>	
			</td>
		</tr>
		<tr>
			<td><label>Descripcion:</label></td>			
			<td>
				<textarea cols="40" rows="20" name="descripcion"></textarea>
			</td>
		</tr>
		 <tr>
			<td><label>Archivo:</label></td>
			<td><input type="hidden" name="max_file_size" value="205000" ></td>
		</tr>
		<tr>
		<td><td><input type="file" name="fichero"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Enviar"></td>
		</tr>
</table>
</fieldset>
</form>

</body>
</html>


<?php


?>

