<html lang='pt-BR'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Criação automática de Formulário</title>
<script src="script.js" type="text/javascript"></script>
</head>
<body>
<form action='tabela.php'  method='POST'  id='formCadastro'>
<div class='itemWrapper'>
<label for='nome' >Nome: </label>
<input type='text' id='nome' placeholder='Informe seu nome.' name="nome" value="<?= isset($_POST["nome"])?$_POST["nome"]: "" ?>"></input>
</div>
<div class='itemWrapper'>
<label for='idade'>Idade: </label>
<input type='number' id='idade' placeholder='Informe sua idade.' name="idade" value="<?= isset($_POST["idade"])?$_POST["idade"]: "" ?>"></input>
</div>

<div class='itemWrapper'>
<label for='estado_nascimento'>Estado de Nasc.: </label>&nbsp;&nbsp;
<select id='estado_nascimento' name='estado_nascimento' required onchange="carregaCidades(this)">
<option value=""></option>
<?php
$cidadesEstados = array(
    "AC" => array("Rio Branco", "Cruzeiro do Sul", "Sena Madureira", "Tarauacá"),
    "AL" => array("Maceió", "Arapiraca", "Palmeira dos Índios", "Rio Largo"),
    "AP" => array("Macapá", "Santana", "Laranjal do Jari", "Oiapoque"),
    "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
    "BA" => array("Salvador", "Feira de Santana", "Vitória da Conquista", "Camaçari"),
    "CE" => array("Fortaleza", "Caucaia", "Juazeiro do Norte", "Sobral"),
    "DF" => array("Brasília"),
    "ES" => array("Vitória", "Vila Velha", "Serra", "Cariacica"),
    "GO" => array("Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde"),
    "MA" => array("São Luís", "Imperatriz", "Timon", "Caxias"),
    "MT" => array("Cuiabá", "Várzea Grande", "Rondonópolis", "Sinop"),
    "MS" => array("Campo Grande", "Dourados", "Três Lagoas", "Corumbá"),
    "MG" => array("Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora"),
    "PA" => array("Belém", "Ananindeua", "Santarém", "Marabá"),
    "PB" => array("João Pessoa", "Campina Grande", "Santa Rita", "Patos"),
    "PR" => array("Curitiba", "Londrina", "Maringá", "Ponta Grossa"),
    "PE" => array("Recife", "Jaboatão dos Guararapes", "Olinda", "Caruaru"),
    "PI" => array("Teresina", "Parnaíba", "Picos", "Floriano"),
    "RJ" => array("Rio de Janeiro", "São Gonçalo", "Duque de Caxias", "Nova Iguaçu"),
    "RN" => array("Natal", "Mossoró", "Parnamirim", "Caicó"),
    "RS" => array("Porto Alegre", "Caxias do Sul", "Pelotas", "Santa Maria"),
    "RO" => array("Porto Velho", "Ji-Paraná", "Ariquemes", "Vilhena"),
    "RR" => array("Boa Vista", "Rorainópolis", "Caracaraí", "Alto Alegre"),
    "SC" => array("Florianópolis", "Joinville", "Blumenau", "Chapecó"),
    "SP" => array("São Paulo", "Campinas", "Guarulhos", "Santos"),
    "SE" => array("Aracaju", "Nossa Senhora do Socorro", "Lagarto", "Itabaiana"),
    "TO" => array("Palmas", "Araguaína", "Gurupi", "Porto Nacional")
);
foreach($cidadesEstados as $chave=>$cidades) {
    echo "<option value=\"$chave\"";
        if(isset($_POST["estado_nascimento"]) && $chave == $_POST["estado_nascimento"]) {
            echo " selected";
        }
    echo">$chave</option>";
}
?>
</select>
</div>
<div class='itemWrapper'>
<label for='cidade'>Cidade de Nasc.: </label>
<select id='cidade_nascimento' name='cidade_nascimento' required>
     <option value=""></option>
<?php
if (isset($_POST["estado_nascimento"])){
    foreach($cidadesEstados[$_POST["estado_nascimento"]] as $chave=>$valor){
        echo "<option value=\"$valor\"";
        if(isset($_POST["cidade_nascimento"]) && $valor == $_POST["cidade_nascimento"]) {
            echo " selected";
        }
        echo">$valor</option>";
    }
}

?>
</div>
<div class='itemWrapperBTNsSubmitReset'>
<button type='submit' id='botao_enviar' name='Filtrar'>Filtrar</button>
</div>
<div class='itemWrapperBTNsSubmitReset'>
<button type='reset' id='botao_limpar_form' name='reset'>Limpar Formulário</button>
</div>
</form>
</body>
</html>