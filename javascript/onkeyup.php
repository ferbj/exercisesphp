<script type="text/javascript">
	function validar(){
		var text1=document.getElementById("texto1").value;
		var text2=document.getElementById("texto2").value;
		if(text1==text2){
		document.getElementById("texto2").style.backgroundColor='green';
		}else{
		document.getElementById("texto2").style.backgroundColor='red';
		}

	}
</script>
<input type="text" id="texto1" onkeyup="validar()">
<input type="text" id="texto2" onkeyup="validar()">