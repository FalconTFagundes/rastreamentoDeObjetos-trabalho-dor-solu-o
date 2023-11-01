<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $prodsaidacomponents = filter_input(INPUT_POST, 'prodsaidacomponents', FILTER_SANITIZE_STRING);
    $quantsaidacomponents = filter_input(INPUT_POST, 'quantsaidacomponents', FILTER_SANITIZE_STRING);
    $datasaidacomponents = filter_input(INPUT_POST, 'dataenvcomponents', FILTER_SANITIZE_STRING);
    $respsaidacomponents = filter_input(INPUT_POST, 'respenvcomponents', FILTER_SANITIZE_STRING);
   

$conn = conectar(); 

$conn = conectar(); // Certifique-se de que a função conectar() esteja definida e funcional no seu código

// Chamar a função para diminuir a quantidade do produto no almoxarifado
$resultadoDiminuicao = controleSaidaProduto($conn, 'components', $prodsaidacomponents, $quantsaidacomponents);

if ($resultadoDiminuicao !== "Quantidade atualizada na tabela 'components'.") {
    // Se houver um erro na diminuição da quantidade, exibir a mensagem de erro
    echo "Erro ao diminuir a quantidade do produto: " . $resultadoDiminuicao;
} else {

$resultado = insertquatro('saidacomponents', 'prodsaidacomponents, quantsaidacomponents,dataenvcomponents,respenvcomponents', 
$prodsaidacomponents , $quantsaidacomponents, $datasaidacomponents ,  $respsaidacomponents);


if ($resultadoInsercao === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados na tabela 'saidapecas': " . $resultadoInsercao;
}

}


header("Location: estoquecomponents.php");
exit;
