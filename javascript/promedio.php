<script type="text/javascript">
	function calcular(){
		var strnum1= window.prompt('num1','0');
		var strnum2= window.prompt('num2','0');
		var strnum3= window.prompt('num3','0');
		num1= parseFloat(strnum1);
		num2= parseFloat(strnum2);
		num3= parseFloat(strnum3);
		var prom=(num1+num2+num3)/3;
		alert("El promedio es : "+prom);
	}
</script>
<form  method="get" onsubmit="calcular()">
	<input type="submit" value="calcular">
</form>