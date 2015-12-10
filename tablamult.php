<?php 
function multiplicar($tabla){
		echo "<h4>Tabla de multiplicar del $tabla</h4>";	
		$i=0;
		while ($i<=12){
			echo "$i x $tabla = " . ($i*$tabla) . "<br>";
			$i++;
		
		}
			
		

	}

	multiplicar(10);
?>