<form action="validar-registro.php" method="POST" ENCTYPE="multipart/form-data">
	Nombres: <input type="text" name="nombres"></br>
	Usuario: <input type="text" name="usuario"></br>
	Password: <input type="password" name="clave"></br>
	Sexo:
	<select name="sexo">
		<option value="M" selected>Masculino</option>
		<option value="F">Femenino</option>
	</select>
	</br>
	Colores favoritos:
	<INPUT TYPE="checkbox" NAME="color[]" VALUE="rojo" CHECKED>Rojo
<INPUT TYPE="checkbox" NAME="color[]" VALUE="amarillo">Amarillo
<INPUT TYPE="checkbox" NAME="color[]" VALUE="negro">Negro
<INPUT TYPE="checkbox" NAME="color[]" VALUE="azul">Azul
<INPUT TYPE="checkbox" NAME="color[]" VALUE="verde">Verde</br>
 <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
<INPUT TYPE="FILE" SIZE="44" NAME="imagen">
<input type="submit" name="validar" value="Validado">
</form>