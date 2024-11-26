<?php $numero1= 3;
   $numero2= 2;
function somar2(int ...$numeros){
    $total= 0.0;
    foreach($numeros as $n)
        $total += $n;
    return $total;
}
echo "<br\>";
var_dump(somar2($numero1, $numero2 , 38 , 47 , 26));

?>