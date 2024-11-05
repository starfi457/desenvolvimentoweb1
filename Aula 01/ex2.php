
<?php
$dadosFuncionarios=array(
array('nome'=>'João','idade'=>23,'cidade'=>'Nova Friburgo') ,
array('nome'=>'José', 'idade'=>22,'cidade'=>'Nova Friburgo') ,
array('nome'=>'Maria','idade'=>22,'cidade'=>'Bom Jardim')
)
?>
<html>
<head>
</head>
<body>
<?php
$montaTabela = function($dados): string{
    $retorno="<table><tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr>";
    for($i=0;$i<count($dados);$i++){
        $retorno.= "<tr><td>".$dados[$i]['nome']. "</td>";
        $retorno.= "<td>".$dados[$i]['idade']."</td>";
        $retorno.= "<td>".$dados[$i]['cidade']."</td></tr>";
    }
    $retorno .="</table>";
    return $retorno;
};
 echo $montaTabela($dadosFuncionarios);
?>
</body>
</html>