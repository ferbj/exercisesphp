<?php
echo "<h4>Serie Fibonnaci</h4>";
function fibonacci($n) 
{ 
if($n<2) 
return $n."<br>"; 
else 
return fibonacci($n-1) + fibonacci($n-2); 
} 

$n = 10; 

for($i=1;$i<$n;$i++) 
{ 
	if($i<($n-1)) 
	echo fibonacci($i).'<br>'; 
else 
	echo fibonacci($i); 
}


function multiplicar($tabla){
		echo "<h4>Tabla de multiplicar del $tabla</h4>";	
		$i=0;
		while ($i<=12){
			echo "$i x $tabla = " . ($i*$tabla) . "<br>";
			$i++;
		}
}
	multiplicar(10);
echo "<br>";
echo "<h4>Bucle disminucion</h4>";

function bucle(){
	for ($i=100;$i>=10;$i=$i-6)
	{
		echo $i."<br>";
	}

}	
bucle();
?>