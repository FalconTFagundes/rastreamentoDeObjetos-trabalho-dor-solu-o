<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $transportadora = filter_input(INPUT_POST, 'transport', FILTER_SANITIZE_STRING);
    $produto = filter_input(INPUT_POST, 'produtoAl', FILTER_SANITIZE_STRING);
    $quantidadeSolicitada = filter_input(INPUT_POST, 'quantSolicitAl', FILTER_SANITIZE_STRING);
    $quantidadeEntregue = filter_input(INPUT_POST, 'quantEntregueAl', FILTER_SANITIZE_STRING);
    $setorResponsavel = filter_input(INPUT_POST, 'respSetorAl', FILTER_SANITIZE_STRING);
    $solicitante = filter_input(INPUT_POST, 'solicitanteSetorAl', FILTER_SANITIZE_STRING);
    $baixaProdutos = filter_input(INPUT_POST, 'baixaProdAl', FILTER_SANITIZE_STRING);
    $observacoes = filter_input(INPUT_POST, 'obsEntregAl', FILTER_SANITIZE_STRING);


// Chame a função insertquatro para inserir os dados
$resultado = insertoito('almoxarife', 'transportadora, produto, quantsolicitada, quantentregue, setor, solicitante, baixaprod, observacao', $transportadora, $produto, $quantidadeSolicitada, $quantidadeEntregue, $setorResponsavel, $solicitante, $baixaProdutos, $observacoes);

// Verifique o resultado da inserção
if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}
header("Location: almoxarife.php");
exit;




