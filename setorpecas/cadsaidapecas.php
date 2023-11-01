<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $prodsaidapecas = filter_input(INPUT_POST, 'prodsaidapecas', FILTER_SANITIZE_STRING);
    $quantsaidapecas = filter_input(INPUT_POST, 'quantsaidapecas', FILTER_SANITIZE_STRING);
    $datasaipecas = filter_input(INPUT_POST, 'dataenvpecas', FILTER_SANITIZE_STRING);
    $respsaidapecas = filter_input(INPUT_POST, 'respenvpecas', FILTER_SANITIZE_STRING);
   

$conn = conectar(); 



$resultado = insertquatro('saidapecas', 'prodsaidapecas, quantsaidapecas,dataenvpecas,respenvpecas', 
$prodsaidapecas , $quantsaidapecas, $datasaipecas ,  $respsaidapecas );


if ($resultado === "Cadastrado") {
    $resultadoDiminuicao = controleSaidaProduto($conn, 'pecas', $prodsaidapecas,  $quantsaidapecas);
    if ($resultadoDiminuicao !== "Quantidade atualizada na tabela 'pecas'.") {
        // Se houver um erro na diminuição da quantidade, exibir a mensagem de erro
        echo "Erro ao diminuir a quantidade do produto: " . $resultadoDiminuicao;
    }
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}


header("Location: estoquepecas.php");
exit;
