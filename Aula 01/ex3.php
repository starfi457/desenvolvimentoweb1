<?php
$dadosProdutos=array(
array('nome'=>'Jujuba','preço'=>11.81,'fabricante'=>' Fini') ,
array('nome'=>'Jiló', 'preço'=>8.10,'fabricante'=>'feira') ,
array('nome'=>'Margarina','preço'=>5.29,'fabricante'=>'Qualy')
)
?>
<html>
<head>
</head>
<body>
<?php
$montaTabela = function($dados): string{
    $retorno="<table><tr><th>Nome</th><th>Preço</th><th>Fabricante</th></tr>";
    foreach($dados as $c){
        $retorno.= "<tr><td>".$c['nome']. "</td>";
        $retorno.= "<td>".$c['preço']."</td>";
        $retorno.= "<td>".$c['fabricante']."</td></tr>";
    }
    $retorno .="</table>";
    return $retorno;
};
 echo $montaTabela( $dadosProdutos);
?>
</body>
</html>
