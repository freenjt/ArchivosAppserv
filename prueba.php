<?php
setcookie("galleta", "hola mundo");
  ?>
<!doctype>
<HTML>
<HEAD>
<TITLE>Numeros</TITLE>
<script type="text/javascript">
	function validar(){
		var oc=document.getElementById('oculto');
		oc.value="enviado";
	}
</script>
juhkjhkjjh
</HEAD>
<BODY>
<form id="formulario" name="formulario" action="probando.php" method="post">
Escribir cookie:<input type="text" name="ejemplo" id="ejemplo">
<input type="hidden" name="oculto" id="oculto" />
<input type="submit" value="Enviar cookie">
</form>
<div id="contenido"></div>
</BODY>
</HTML>