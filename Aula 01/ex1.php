<?
$soma=function( $a, $b):int {
return $a+$b;
};
echo "<BR/>";
var_dump($soma(5,6));
$soma2=fn(int $a,int $b):int => $a+$b;
echo "<BR/>";
var_dump($soma2(5,6));
?>