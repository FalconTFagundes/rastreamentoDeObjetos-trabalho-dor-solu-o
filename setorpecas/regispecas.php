<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php

    $prodpecas = filter_input(INPUT_POST, 'prodpecas', FILTER_SANITIZE_STRING);
    $quantprodpecas = filter_input(INPUT_POST, 'quantprodpecas', FILTER_SANITIZE_STRING);
    $datarecpecas = filter_input(INPUT_POST, 'datarecpecas', FILTER_SANITIZE_STRING);
    $resprecebpecas = filter_input(INPUT_POST, 'resprecebpecas', FILTER_SANITIZE_STRING);
   



$resultado = insertquatro('pecas', 'produto, quantentregue,datarecebpecas,resprecebpecas', $prodpecas, $quantprodpecas, $datarecpecas , $resprecebpecas );


if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}
header("Location: setorpecas.php");
exit;
