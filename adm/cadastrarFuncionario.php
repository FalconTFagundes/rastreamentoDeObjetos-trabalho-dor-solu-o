<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$nomeFunc = filter_input(INPUT_POST, 'nomeFunc', FILTER_SANITIZE_STRING);
$senhaFunc = filter_input(INPUT_POST, 'senhaFunc', FILTER_SANITIZE_STRING);
$setorFunc = filter_input(INPUT_POST, 'setorFunc', FILTER_SANITIZE_STRING);

if ($nomeFunc && $senhaFunc && $setorFunc) {
    try {
        $resultado = inserttres('usuario', 'idsetores, usuario, senha', $setorFunc, $nomeFunc, $senhaFunc);

        if ($resultado === "Cadastrado") {
            echo 'Funcionário cadastrado com sucesso';
        } else {
            echo 'Erro ao cadastrar: ' . $resultado;
        }
    } catch (Exception $e) {
        echo 'Erro ao cadastrar: ' . $e->getMessage();
    }
} else {
    echo 'Valores do formulário não foram recebidos corretamente.';
}
?>