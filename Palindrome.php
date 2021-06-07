<?php
function Palindromo ($string){
	if (
		strrev($string) == $string){
		return 1;

	}
	else 
	{
		return 0;
	}
}
$nome = "Pedro ";
echo "$nome";
if (Palindromo($nome)){
	echo "É um Palindromo";
}
else
{
	echo "Não é um Palindromo";
}
echo "<br>";
$nome = " ama ";
echo "$nome";
if (Palindromo($nome)){
	echo "É um Palindromo";
}
else
{
	echo "Não é um Palindromo";
}
echo "<br>";
$nome = "Samuel ";
echo "$nome";
if (Palindromo($nome)){
	echo "É um Palindromo";
}
else
{
	echo "Não é um Palindromo";
}
echo "<br>";
$nome = " ANA ";
echo "$nome";
if (Palindromo($nome)){
	echo "É um Palindromo";
}
else
{
	echo "Não é um Palindromo";
}
echo "<br>";
$nome = " abasedotetodesaba ";
echo "$nome";
if (Palindromo($nome)){
	echo "É um Palindromo";
}
else
{
	echo "Não é um Palindromo";
}
echo "<br>";


?>