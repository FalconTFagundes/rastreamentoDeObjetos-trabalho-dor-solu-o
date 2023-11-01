<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$prodfinal = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantentregue = filter_input(INPUT_POST, 'quantentregue', FILTER_SANITIZE_STRING);
$datarprodfinal = filter_input(INPUT_POST, 'datarecprod', FILTER_SANITIZE_STRING);
$respprodfinal = filter_input(INPUT_POST, 'resprodfinal', FILTER_SANITIZE_STRING);

// Verifique se os valores foram preenchidos corretamente
if (empty($prodfinal) || empty($quantentregue)  || empty($datarprodfinal) || empty($respprodfinal)) {
    echo "Todos os campos devem ser preenchidos.";
    exit;
}

// Chame a função de inserção (supondo que você tenha uma função chamada insertcinco)
$resultado = insertquatro('prodfinal', 'produto, quantentregue, datarecprod, resprecprodfinal', 
$prodfinal, $quantentregue, $datarprodfinal, $respprodfinal);

if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}

header("Location: setorprodfinal.php");
exit;
