<?php 

$num1 = 3;
$num2 = 4;

function sumar($n1, $n2){
	$resultado = $n1 + $n2;
	return $resultado;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Ejemplos PHP - HTML</h1>
	<hr>
	<br>
	<p class="suma" id="parrafo">
		<?php
			echo "El resultado de la suma es: ".sumar($num1, $num2);
		?>
	</p>


<script type="text/javascript" src="js/recursos.js"></script>
</body>
</html>