<?php
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
?>