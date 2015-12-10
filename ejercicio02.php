<?php
function operaciones($n1,$n2,$op){

	switch ($op) {
		case '+':
			$suma=$n1+$n2;
			echo "La suma es : $suma"."<br>";
			break;
		case '-':
			$resta=$n1-$n2;
			echo "La resta es : $resta"."<br>";		
			break;
		case '*':	
			$multiplicacion=$n1*$n2;
			echo "La multiplicacion es: $multiplicacion"."<br>";	
			break;
		case '/':	
			$division=$n1/$n2;
			echo "La division es: $division"."<br>";		
			break;
		}
	
	
}
operaciones(50,10,'+');
operaciones(50,10,'-');
operaciones(50,10,'*');
operaciones(50,10,'/');

?>