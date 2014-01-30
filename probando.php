<!doctype>
<html>
<head>
<title>Funciones matematicas</title>
<style type="text/css">
.tabla{
	border: double;
	background-color: rgb(233,240,210);
}		
</style>
<script type="text/javascript">
	
function escribir(valor){
var area=document.getElementById('areaResultado');
var op=document.getElementById('opera');
if(area.value=='+' || area.value=='-' || area.value=='*' || area.value=='/' || area.value=='exp'){
	op.value=area.value;
	area.value=valor;
}
else
area.value=area.value+valor;
}

function reescribir(valor){
	var area=document.getElementById('areaResultado');
	var pv=document.getElementById('primerValor');
	pv.value=area.value;
	area.value=valor;
}	
function borrar(){
	var area=document.getElementById('areaResultado');
	area.value="";
}
</script>
</head>	
<body>
<?php
$p_num1=$_POST["primerValor"];
$p_num2=$_POST["areaResultado"];
$operador=$_POST["opera"];
if($operador=="vacio")
$resultado="+";
	else{
switch ($operador) {
	case "+":
		$resultado="".($p_num1+$p_num2);
		break;
	case "-":
		$resultado="".($p_num1-$p_num2);
		break;
	case "*":
		$resultado="".($p_num1*$p_num2);
		break;	
	case "/":
		$resultado="".($p_num1/$p_num2);
		break;
	case "exp":
		$resultado="".pow($p_num1,$p_num2);
		break;	
	default:
		echo "Fuera de rango";
		break;
}
	}
	//echo "resultado= ".$resultado;
  ?>
<form id="calculadora" method="post">
<table class="tabla">
	<tr><td colspan="4"><textarea readonly="true" id="areaResultado" name="areaResultado" ><?php echo $resultado; ?></textarea>
	<input type="hidden" name="primerValor" id="primerValor">
	<input type="hidden" name="opera" id="opera" value="vacio">
	</td></tr>
	<tr align="center">
	<td><input type="button" id="num1" name="num1" value="1" onclick="escribir(1)"></td>
	<td><input type="button" id="num2" name="num2" value="2" onclick="escribir(2)"></td>
	<td><input type="button" id="num3" name="num3" value="3" onclick="escribir(3)"></td>
	<td><input type="button" id="mas" name="mas" value="+" onclick="reescribir('+')"></td>
	</tr>
		<tr align="center">
	<td><input type="button" id="num4" name="num4" value="4" onclick="escribir(4)"></td>
	<td><input type="button" id="num5" name="num5" value="5" onclick="escribir(5)"></td>
	<td><input type="button" id="num6" name="num6" value="6" onclick="escribir(6)"></td>
	<td><input type="button" id="menos" name="menos" value="-" onclick="reescribir('-')"></td>
	</tr>
		<tr align="center">
	<td><input type="button" id="num7" name="num7" value="7" onclick="escribir(7)"></td>
	<td><input type="button" id="num8" name="num8" value="8" onclick="escribir(8)"></td>
	<td><input type="button" id="num9" name="num9" value="9" onclick="escribir(9)"></td>
	<td><input type="button" id="dividido" name="dividio" value="/" onclick="reescribir('/')"></td>
	</tr>
		<tr align="center">
		<td><input type="button" id="expo" name="expo" value="exp" onclick="reescribir('exp')"></td>
	<td><input type="button" id="num0" name="num0" value="0" onclick="escribir(0)"></td>
	<td><input type="button" id="asterisco" name="asterisco" value="*" onclick="reescribir('*')"></td>
	<td><input type="submit" id="igual" name="igual" value="="></td>
	</tr>
</table>	
<br/>
<input type="button" value="borrar" onclick="borrar()">
</form>
</body>
</html>