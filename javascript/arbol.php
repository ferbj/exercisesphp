<html>
 <head>
  <title> prog08.html </title>
  <script language="JavaScript1.2">


   function init() // Arbol DOM
   {
	obj=document.getElementById("A");
	alert("H1("+obj.offsetLeft+","+obj.offsetTop+")");
	alert("H1.innerText:"+obj.innerText);
	obj.style.color="red";
	p=document.getElementsByTagName("p")[0];
	b=p.children[0];
	alert("P.children:"+b.tagName);
	alert("B.innerText:"+b.innerText);
   }
  </script>
 </head>
 <body onLoad="init()">
	<h1 id="A"> Titulo </h1>
	<hr/>
	<p>
	   <b> Hola </b>
	</p>
 </body>
</html>