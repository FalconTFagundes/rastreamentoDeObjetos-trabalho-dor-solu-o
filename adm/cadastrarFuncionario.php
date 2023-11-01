<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';

$nomeFunc = filter_input(INPUT_POST, 'nomeFunc', FILTER_SANITIZE_STRING);
$senhaFunc = filter_input(INPUT_POST, 'senhaFunc', FILTER_SANITIZE_STRING);
$setorFunc = filter_input(INPUT_POST, 'setorFunc', FILTER_SANITIZE_STRING);

if ($nomeFunc && $senhaFunc && $setorFunc) {
    $senhaCriptografadaFunc = md5($senhaFunc);
    try {
        $resultado = insertquatro('usuario', 'idsetores, usuario, senha, cadastro', $setorFunc, $nomeFunc, $senhaCriptografadaFunc, date('Y-m-d H:i:s'));

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
