<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$prodsaidaprod = filter_input(INPUT_POST, 'prodsaida', FILTER_SANITIZE_STRING);
$quantsaidaprod = filter_input(INPUT_POST, 'quantsaidaprod', FILTER_SANITIZE_STRING);
$datasaidaprod = filter_input(INPUT_POST, 'dataenvprod', FILTER_SANITIZE_STRING);
$respsaidaprod = filter_input(INPUT_POST, 'respenvprod', FILTER_SANITIZE_STRING);
$setorsaidaprod = filter_input(INPUT_POST, 'setorsaidaprod', FILTER_SANITIZE_STRING);
$obsaidaprod = filter_input(INPUT_POST, 'obsenvprod', FILTER_SANITIZE_STRING);

// Conectar ao banco de dados
$conn = conectar(); // Certifique-se de que a função conectar() esteja definida e funcional no seu código

// Chamar a função para diminuir a quantidade do produto no almoxarifado
$resultadoDiminuicao = controleSaidaProduto($conn, 'almoxarife', $prodsaidaprod, $quantsaidaprod);

if ($resultadoDiminuicao !== "Quantidade atualizada na tabela 'almoxarife'.") {
    // Se houver um erro na diminuição da quantidade, exibir a mensagem de erro
    echo "Erro ao diminuir a quantidade do produto: " . $resultadoDiminuicao;
} else {
    // Se a diminuição da quantidade for bem-sucedida, inserir os dados na tabela 'saidapecas'
    $resultadoInsercao = insertseis(
        'saida_almoxarife',
        'produto, quantsaida, datasaida, respsaida, setorsaida, obsvsaida',
        $prodsaidaprod, $quantsaidaprod, $datasaidaprod, $respsaidaprod, $setorsaidaprod, $obsaidaprod
    );

    if ($resultadoInsercao === "Cadastrado") {
        echo "Dados cadastrados com sucesso!";
    } else {
        echo "Erro ao cadastrar os dados na tabela 'saidapecas': " . $resultadoInsercao;
    }

}
header("Location: estoque.php");
exit;

?>
