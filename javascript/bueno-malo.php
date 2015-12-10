<html>
<head>
<title>Ejemplo</title>
<script language="JavaScript">
<!--// ocultar...
function prueba( pregunta ) {	
	var resul=eval( pregunta );
	var salida=pregunta+" es?";	
	var correc='<img src="bueno.png">';
	var incorrec='<img src="malo.png">';
	var resp=prompt( salida, "0" );
	return( resp==resul )? correc:incorrec;
	}//deja de ocultar -->
	</script>
	</head>
<body>
<script language="JavaScript">
<!-- //ocultar
	var res=prueba( "10 + 10" );
	document.write( res );
	//deja de ocultar -->
	</script>
	</body>
</html>
