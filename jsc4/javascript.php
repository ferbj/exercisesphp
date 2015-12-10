<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
	<script type="text/javascript">
	document.writeln("Bienvenido Usuario");
	var Nombre = prompt('Escribe tu Nombre:','');
	document.write(Nombre);
	</script>
</head>
<body class="container">
    
<script type="text/javascript">
	function Operaciones(){
	var num1=prompt('Ingrese primer numero','')	;
	var num2=prompt('Ingrese segundo numero','');
	var suma=parseInt(num1)+parseInt(num2);
	var resta=parseInt(num1)-parseInt(num2);
	var multiplicacion=parseInt(num1)*parseInt(num2);
	var division=parseInt(num1)/parseInt(num2);
	document.write('La suma es :');
	document.writeln(suma);
	document.write('La resta es :');
	document.writeln(resta);
	document.write('La multiplicacion es :');
	document.writeln(multiplicacion);
	document.write('La division es :');
	document.writeln(division);
	confirm("Presione el boton Ok para continuar");
	location.reload();
	}
	function Factorial(){
		var numero=prompt('Introduce un numero y se mostrara su factorial','');
		var resultado=1;
		for(var i=1; i<=numero; i++) {
 		 resultado *= i;
		}		
		alert(resultado);
	}
	function TablaMult(){
		var y=prompt('Genera Tabla de Multiplicar','');
		y=parseInt(y);
 		for (var x = 1; x <= 12; x++) {
		r=y*x;
		document.write(y+"x"+x+"="+ r + "<br>");
		}
	}
	function Comparar(){
		var x=prompt('Escribe una cadena','');
		var y=prompt('Escribe otra cadena','');
		
		if (x==y){
			alert('Las cadenas son iguales');
		}
		else
		{
			alert('Las cadenas son diferentes');
		}
	}
	
	function Etiqueta(){
		var cuerpo= document.getElementsByTagName('body')[0];
		for (var i=1; i<=3;i++){
			var obj=document.createElement("a");
			var text=document.createTextNode("Mi enlace");
			a.appendChild(text);
			a.href="http://www.google.com";
			document.body.appendChild(a);
		}
	}
	function Prom(){
		var n1=prompt('Escribe Numero 1','');
		var n2=prompt('Escribe Numero 2','');
		n1=parseInt(n1);
		n2=parseInt(n2);
		var p= (n1+n2)/2;
		document.write('El promedio es:');
		document.write(p);
		confirm('Presione el boton Ok para continuar');
		location.reload();
	}

</script>
<br>
<br><div class="form-group">
	<input type="button" value="Operaciones Basicas"  class="btn btn-primary btn-sm"  onclick="Operaciones()"><br><br>
	<input type="button" value="Factorial" class="btn btn-primary btn-sm" onclick="Factorial()"><br><br>
	<input type="button" value="Tabla multiplicar" class="btn btn-primary btn-sm" onclick="TablaMult()"><br><br>
	<input type="button" value="Compara 2 cadenas" class="btn btn-primary btn-sm" onclick="Comparar()"><br><br>
	<input type="button" value="Crea Hipervinculo" class="btn btn-primary btn-sm" onclick="Etiqueta()"><br><br>
	<input type="button" value="Promedio" class="btn btn-primary btn-sm" onclick="Prom()"><br><br>
</div>
</body>
</html>
