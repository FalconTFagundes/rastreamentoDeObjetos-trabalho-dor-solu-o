<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $prodfinalsaida = filter_input(INPUT_POST, 'prodfinalsaida', FILTER_SANITIZE_STRING);
    $quantsaidaprodfinal = filter_input(INPUT_POST, 'quantprodsaida', FILTER_SANITIZE_STRING);
    $datasaidaprodfinal = filter_input(INPUT_POST, 'dataenvprodfinal', FILTER_SANITIZE_STRING);
    $respsaidaprodfinal = filter_input(INPUT_POST, 'respenvprodfinal', FILTER_SANITIZE_STRING);
   

$conn = conectar(); 

$conn = conectar(); // Certifique-se de que a função conectar() esteja definida e funcional no seu código

// Chamar a função para diminuir a quantidade do produto no almoxarifado
$resultadoDiminuicao = controleSaidaProduto($conn, 'prodfinal', $prodfinalsaida, $quantsaidaprodfinal);

if ($resultadoDiminuicao !== "Quantidade atualizada na tabela 'prodfinal'.") {
    // Se houver um erro na diminuição da quantidade, exibir a mensagem de erro
    echo "Erro ao diminuir a quantidade do produto: " . $resultadoDiminuicao;
} else {

$resultado = insertquatro('saidaprodfinal', 'prodfinalsaida, quantprodfinal,datasaidaprodfinalrespenvprodfinal', 
$$prodfinalsaida  , $quantsaidaprodfinal, $datasaidaprodfinal,  $respsaidaprodfinal);


if ($resultadoInsercao === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados na tabela 'saidapecas': " . $resultadoInsercao;
}

}


header("Location: estoqueprodfinal.php");
exit;
