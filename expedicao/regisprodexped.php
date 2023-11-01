<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$prodexped = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantentregue = filter_input(INPUT_POST, 'quantentregue', FILTER_SANITIZE_STRING);
$setorexped = filter_input(INPUT_POST, 'setorexped', FILTER_SANITIZE_STRING);
$datarecexped = filter_input(INPUT_POST, 'datarecexped', FILTER_SANITIZE_STRING);
$respexped = filter_input(INPUT_POST, 'respexped', FILTER_SANITIZE_STRING);

// Verifique se os valores foram preenchidos corretamente
if (empty($prodexped) || empty($quantentregue) || empty($setorexped) || empty($datarecexped) || empty($respexped)) {
    echo "Todos os campos devem ser preenchidos.";
    exit;
}

// Chame a função de inserção (supondo que você tenha uma função chamada insertcinco)
$resultado = insertcinco('expedicao', 'produto, quantentregue, setorexped, dataexped, respexped', 
$prodexped, $quantentregue, $setorexped, $datarecexped, $respexped);

if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}

header("Location: exped.php");
exit;
