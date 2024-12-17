<?php
    $Tiposcategoria = array(
        "M"=> array("Ser Humano","Cachorro","Gato"),
        "A"=> array("Bem-te-vi","Maritaca","Sabiá laranjeira"),
        "B"=> array("Cianobacterias", "Lactobacilos","Cocos")
    );
    if(!(empty($_POST["categoria"]))){
        echo json_encode($Tiposcategoria[$_POST["categoria"]]);
    }
?>