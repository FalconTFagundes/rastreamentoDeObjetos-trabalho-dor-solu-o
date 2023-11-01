<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$prodsaidaexped = filter_input(INPUT_POST, 'prodexpedsaida', FILTER_SANITIZE_STRING);
$quantsaidaexped = filter_input(INPUT_POST, 'quantprodexpedsaida', FILTER_SANITIZE_STRING);
$datasaidaexped = filter_input(INPUT_POST, 'setorenvresp', FILTER_SANITIZE_STRING);
$respsaidaexped = filter_input(INPUT_POST, 'dataenvprodexped', FILTER_SANITIZE_STRING);
$setorsaidaexped = filter_input(INPUT_POST, 'destinoenvprod', FILTER_SANITIZE_STRING);
$detinosaidaexped = filter_input(INPUT_POST, 'respenvprodexped', FILTER_SANITIZE_STRING);


$conn = conectar(); 


$resultadoDiminuicao = controleSaidaProduto($conn, 'expedicao', $prodsaidaexped, $quantsaidaexped);

if ($resultadoDiminuicao !== "Quantidade atualizada na tabela 'expedicao'.") {
    
    echo "Erro ao diminuir a quantidade do produto: " . $resultadoDiminuicao;
} else {
    
    $resultadoInsercao = insertseis(
        'saidaexpedcao',
        'prodexpedsaida, quantsaida, setor_resp, dataenvexp, respenvprod, destinoenvprod',
        $prodsaidaexped, $quantsaidaexped, $setorsaidaexped, $datasaidaexped, $respsaidaexped, $detinosaidaexped
    );

    if ($resultadoInsercao === "Cadastrado") {
        echo "Dados cadastrados com sucesso!";
    } else {
        echo "Erro ao cadastrar os dados na tabela 'saidapecas': " . $resultadoInsercao;
    }

}
header("Location: estoquexped.php");
exit;

?>
