<?php 


#Variable numerica
$num = 25;
echo "Esto es una variable numerica: ".$num." <br>";
echo var_dump($num)."<br>";

#Variable Texto
$text = "Hola Mundo";
echo "Esto es una variable texto: ".$text." <br>";
echo var_dump($text)."<br>";

#Variable Boolean
$boleana=true;
echo "Esto es una variable boleana: ".$boleana."<br>";

#Variable Arreglo simple
$colores = array("azul", "amarillo", "rojo", "blanco");

echo "Esto es una variable arreglo posicion 0: ".$colores[0]."<br>";
echo "Esto es una variable arreglo posicion 1: ".$colores[1]."<br>";
echo "Esto es una variable arreglo posicion 2: ".$colores[2]."<br>";
echo "Esto es una variable arreglo posicion 3: ".$colores[3]."<br>";
echo var_dump($colores);
#Variable Arreglo con propiedades

$verduras = array(	"verdura1" => "lechuga",
					"verdura2" => "cebolla",
					"verdura3" => "apio");

echo "Esto es una variable arreglo propiedad verdura1: ".$verduras['verdura1']."<br>";
echo "Esto es una variable arreglo propiedad verdura2: ".$verduras['verdura2']."<br>";
echo "Esto es una variable arreglo propiedad verdura3: ".$verduras['verdura3']."<br>";
var_dump($verduras)."<br>";

#Variable Arreglo Objeto

$frutas = (object)[	"fruta1" => "pera",
					"fruta2" => "manzana",
					"fruta3" => "sandia"];

echo "Esto es una variable tipo objeto: ".$frutas->fruta1."<br>";
echo "Esto es una variable tipo objeto: ".$frutas->fruta2."<br>";
echo "Esto es una variable tipo objeto: ".$frutas->fruta3."<br>";

var_dump($frutas);

 ?>