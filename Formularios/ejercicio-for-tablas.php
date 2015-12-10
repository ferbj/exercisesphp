<html>
	<table>
		<tr>
		<td bgcolor="#CCCCCC" align="center">Distancia</td>
		<td bgcolor="#CCCCCC" align="center">Costo</td>
		</tr>
		<?php 
		$distancia=50;
		
		/*while($distancia<=250){
			echo '<tr><td align="rigth">'. $distancia 
			. ' km</td>';

			echo '<td align="rigth">'. $distancia/10
			 .'</td></tr>';

			$distancia +=50;
		}*/

		for($distancia=50;$distancia<=250;$distancia +=50){
			echo '<tr><td align="rigth">'. $distancia 
			. ' km</td>';

			echo '<td align="rigth">'. $distancia/10
			 .'</td></tr>';
			 }



		?>
	</table>
</html>
