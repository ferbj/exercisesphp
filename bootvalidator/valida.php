<?php
$num=count($_POST);
$etiquetas=array_keys($_POST);
$valores=array_values($_POST);
for($i=0;$i<$num;$i++)
	{ 
		echo("<br>POST[".$etiquetas[$i]."]=".$valores[$i]); 
		echo " <strong>valores son correctos</strong>";
	}
		
?>