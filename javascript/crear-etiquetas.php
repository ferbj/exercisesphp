<!DOCTYPE html>
<html>
<head>
	<title>Creando Etiquetas</title>
<script type="text/javascript">
	function ini(){
		var body = document.getElementsByTagName("body")[0];
		for(var i=1; i<9;i++){
			var obj= document.createElement("p");
			var texto= document.createTextNode("Hola #"+i);
			obj.style.font='bold italic '+(8+2*i)+'pt Georgia';

			obj.appendChild(texto);
			body.appendChild(obj);
		}
		var obj= document.createElement("input");
			obj.style.font='bold italic '+(8+2*i)+'pt Georgia';
			obj.value="Hola";
			body.appendChild(obj);

			var obj= document.createElement("textarea");
			obj.style.font='bold italic '+(8+2*i)+'pt Georgia';
			obj.value="Hola";
			body.appendChild(obj);
	}
</script>
</head>
<body onload="ini()">
</body>
</html>