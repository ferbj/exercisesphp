<html>
 <head>
 <title> prog10.html </title>
 <script language="JavaScript1.2">


  function init() // HTML vía DOM
  {
	var body = document.getElementsByTagName("body")[0];
	for( i=1; i<9; i++ )
	{
	  var obj = document.createElement("form");
	  var txt = document.createTextNode("hola #"+i);
	  obj.style.color = "#"+i+"00";
	  obj.style.font  = 'bold italic '+(8+2*i)+'pt Georgia';
	  obj.appendChild(txt);
	  body.appendChild(obj);
	}
  }
 </script>
 </head>
 <body onLoad="init()">
 <!-- Documento Vacío -->
 </body>
</html>