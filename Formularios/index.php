<html>
<head>
<head>
<body>
	<form action="order.php" method="POST">
		<table>
			<tr bgcolor="#cccccc">
				<td width="150">Item</td>
				<td width="150">Cantidad</td>
			</tr>
			<tr>
				<td>NEUMATICOS</td>
				<td align="center"><input type="text" 
				name="neumaticos" size="3"
				maxlength="3"></td>
			</tr>
			<tr>
			<td>BUJIAS</td>
				<td align="center"><input type="text" 
				name="bujia" size="3"
				maxlength="3"></td>
			</tr>
			<tr>
				<td>ACEITE</td>
				<td align="center"><input type="text" 
				name="aceite" size="3"
				maxlength="3"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input 
				type="submit"
				value="Submit Order"></td>
			</tr>


<tr>
	<td>
		 COmo se enterO <br/>de nuestro negocio :
	</td>
		<td>
                    <select name="encontrar">
				<option value="a">Soy cliente habitual
				</option>
				<option value="b">Publicidad por TV
				</option>
				<option value="c">Directorio telefOnico
				</option>
				<option value="d">Un amigo me lo comentO
				</option>
			</select>
		</td>
		</tr>
			

		</table>

	</form>
</body>
</html>