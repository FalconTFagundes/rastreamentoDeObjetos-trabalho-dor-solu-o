<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $prodcomponents = filter_input(INPUT_POST, 'prodcomponents', FILTER_SANITIZE_STRING);
    $quantcomponents = filter_input(INPUT_POST, 'quantentregue', FILTER_SANITIZE_STRING);
    $datacomponents = filter_input(INPUT_POST, 'datarecebcomponents', FILTER_SANITIZE_STRING);
    $respcomponents = filter_input(INPUT_POST, 'resprecebcomponents', FILTER_SANITIZE_STRING);
   

// Chame a função insertquatro para inserir os dados
$resultado = inserquatro('components', 'produto,  quantentregue, datarecebimento, resprecebimento',
$prodcomponents, $quantcomponents, $datacomponents, $respcomponents);

// Verifique o resultado da inserção
if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}
header("Location: setorcomponents.php");
exit;



