<?php

$formulario = array(
    "id" => "formCadastro",
    "tipo_submit" => "POST",
    "url_submit" => "cadastro.php",
    "itens" => array(
        "nome" => array("tipo" => "text", "id" => "nome", "label" => "Nome", "placeholder" => "Informe seu nome."),
        "idade" => array("tipo" => "number", "id" => "idade", "label" => "Idade", "placeholder" => "Informe sua idade.", "funcao_validacao" => "validaIdade"),
        "sexo" => array("tipo" => "radio", "id" => "sexo", "label" => "Sexo", "opcoes" => array("M" => "Masculino", "F" => "Feminino", "O" => "Outros")),
<<<<<<< HEAD
=======
        "esporte_preferido" => array("tipo" => "checkbox", "id" => "esporte_preferido", "label" => "Esporte Pref.", "opcoes" => array("F" => "Futebol", "V" => "Vôlei", "N" => "Natação", "O" => "Outros"), "obrigatorio" => false),
>>>>>>> 494fb744c1828b5814137a85423b4b12dda962df
        "cidade_nascimento" => array("tipo" => "text", "id" => "cidade", "label" => "Cidade de Nasc.", "placeholder" => "Informe a cidade que você nasceu."),
        "estado_nascimento" => array("tipo" => "select", "id" => "estado_nascimento", "label" => "Estado de Nasc.", "opcoes" => array("RJ" => "Rio de Janeiro", "SP" => "São Paulo", "ES" => "Espírito Santo", "MG" => "Minas Gerais", "O" => "Outros")),
        "cpf" => array("tipo" => "number", "id" => "cpf", "label" => "CPF", "placeholder" => "Informe seu CPF.", "funcao_validacao" => "validaCpf"),
        "botao_enviar" => array("tipo" => "submit", "id" => "enviar", "label" => "Enviar"),
        "botao_limpar_form" => array("tipo" => "reset", "id" => "reset", "label" => "Limpar Formulário"),
    )
);
//função para criar o formulario

function criarFormulario($formulario)
{
    echo "<form action='" . $formulario["url_submit"] . "  method='" . $formulario["tipo_submit"] . "'  id='" . $formulario["id"] . "'>\n";
    foreach ($formulario["itens"] as $chave => $valor) {
        criaCampo($chave, $valor);
    }
    echo "</form>";
};
//função pra criar campo

function criaTextoNumero($chave, $valor)
{
    echo "<div class='itemWrapper'>\n";
    echo "<label for='" . $valor['id'] . "'>" . $valor['label'] . ": </label>\n";
    echo "<input type='" . $valor['tipo'] . "' id='" . $chave . "' placeholder='" . $valor['placeholder'] . "'></input>\n";
    echo "</div>\n";
}
function criaTextarea($chave, $valor)
{
    echo "<div class='itemWrapper'>\n";
    echo "<label for='" . $valor['id'] . "'>" . $valor['label'] . ": </label>\n";
    echo "<textarea id='" . $chave . "' placeholder='" . $valor['placeholder'] . "'></textarea>\n";
    echo "</div>\n";
}
function criaResetSubmitButton($chave, $valor)
{
    echo "<div class='itemWrapperBTNsSubmitReset'>\n"; 
    echo "<button type='" . $valor['tipo'] . "' id='" . $chave . "' name='" . $valor['id'] . "'>" . $valor['label'] . "</button>\n";
    echo "</div>\n";
}
function criaSelect($chave, $valor)
{
    echo "<div class='itemWrapper'>\n";
    echo "<label for='" . $valor['id'] . "'>" . $valor['label'] . ": </label>&nbsp;&nbsp;\n";
    echo "<select id='" . $chave . "' name='" . $valor['id'] . "' required>\n";
    foreach ($valor["opcoes"] as $chavinha => $valorzin) {
        echo "<option value='" . $chavinha . "' >" . $valorzin . "</option>\n";
    }
    echo "</select>\n";
    echo "</div>\n";
}
function criaCheckboxRadio($chave, $valor){
    echo "<div class='itemWrapper'>\n";
    echo "<label>".$valor["label"].":</label>\n";
    foreach($valor["opcoes"] as $chave_check => $valor_check){
        echo "<input type='".$valor["tipo"]."' id='".$chave."_".$chave_check."' name='".$chave."' value='".$chave_check."'>&nbsp;\n";
        echo "<label for='".$chave."_".$chave_check."'>".$valor_check."</label>&nbsp;&nbsp;\n";
    }
    echo"</div>\n";
}


function criaCampo($chave, $valor)
{
    if ($valor['tipo'] == 'number' || $valor['tipo'] == 'text') {
        criaTextoNumero($chave, $valor);
    }
    if ($valor['tipo'] == 'textarea') {
        criaTextarea($chave, $valor);
    }
    if ($valor['tipo'] == 'reset' || $valor['tipo'] == 'submit' || $valor['tipo'] == 'button') {
        criaResetSubmitButton($chave, $valor);
    }
    if ($valor['tipo'] == 'select') {
        criaSelect($chave, $valor);
    }
    if ($valor['tipo'] == 'checkbox' || $valor['tipo'] == 'radio' ) {
        criaCheckboxRadio($chave, $valor);
    }
}
echo "<html lang='pt-BR'>\n<head>\n<meta charset='UTF-8'>\n<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
echo "<title>Criação automática de Formulário</title>\n";
echo "</head>\n<body>\n";
echo criarFormulario($formulario);
<<<<<<< HEAD
echo"\n</body>\n</html>";
=======
echo"\n</body>\n</html>";
>>>>>>> 494fb744c1828b5814137a85423b4b12dda962df
