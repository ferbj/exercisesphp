<script type="text/javascript">
	var num=5;
	num+=6;
	//document.writeln(num);
	var nombre="Luis";
	nombre =window.prompt("Ingrese nombre","");
	//alert((nombre == "Luis" ) ? "Hola, Jefe" : "Hola, extranio");
	//if(nombre == "Luis"){
		document.writeln(despNombre( nombre ));
	//}else
	//{
		//document.writeln("Hola, Extra&ntilde;o");
	//}
function despNombre( nombre ) {
	return "<hr>tu nombre es <b>"+ nombre + "</b><hr>";
}

</script>