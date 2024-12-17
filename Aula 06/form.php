<!DOCTYPE html>
<html>
<head>
    <title>Aula 6</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Aula do dia 17/12</h1>
    <fieldset>
        <legend>Filtro</legend>
        <form action="tabela.php" method="get" id="filtro">
            <label for="categoria">Categoria:</label>
            <br>
            <select id="categoria" name="categoria" >
            <option value="">Escolha a sua categoria</option>
                <?php
                    $tipos = array(
                        "M" => "Mamíferos",
                        "A" => "Aves",
                        "B" =>"Bacterias"
                    );
                    foreach($tipos as $chave => $valor){
                        if($chave == $_GET['categoria']){
                            echo "<option value ='" . $chave ."' selected>" . $valor . "</option>";
                        }
                        else{
                            echo "<option value ='" . $chave ."'>" . $valor . "</option>";
                        }
                    }
                    ?>
                    </select>
                    <br>
                    <label for="tipos">Tipos:</label>
                    <br>
                    <select id="tipos" name="tipos">
                    <?php
                       $Tiposcategoria = array(
                        "Mamíferos"=> "Ser Humano","Cachorro","Gato",
                        "Aves"=> "Bem-te-vi","Maritaca","Sabiá laranjeira",
                        "Bacterias"=> "Cianobacterias", "Lactobacilos","Cocos"
                    );
                        echo "<option value=''>Escolha tipo da sua categoria</option>";
                        $TiposCategoriaSelecionados = $TiposCategoria[$_GET['categoria']];
                        foreach($TiposCategoriaSelecionados as $valor){
                            echo "<option value ='" . $valor ."'>" . $valor . "</option>";
                        }
                    ?>
                    </select>
                    <br>
                    <br>
                    <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>
                </form>
            </fieldset>
        </body>
        </html>