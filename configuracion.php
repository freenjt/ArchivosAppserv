<?php 
$username="root";
$password="root";
$hostname="127.0.0.1";
$baseDatos="persona";
$conexion=mysql_connect($hostname,$username, $password)
or die("Error en la la conexion");
$conexionBaseDatos=mysql_select_db($baseDatos, $conexion)
or die("Error al conectar con la base de datos");
/*$resultado=mysql_query("select * from persona");
$filas=mysql_fetch_array($resultado);*/

/**
* 
*/
class Operaciones
{
	//public $num1, $num2;
	function suma($n1, $n2)
	{
		return ($n1+$n2);
	}

	function resta($n1, $n2){
		return ($n1-$n2);
	}

	function multiplicacion($n1, $n2){
		return ($n1*$n2);
	}

	function division($n1, $n2){
		return ($n1/$n2);
	}
}
?>