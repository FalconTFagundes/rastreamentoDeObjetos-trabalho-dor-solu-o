<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once 'func/func.php';

if (isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['senha']) and !empty($_POST['senha'])) {
    $usuario = $_POST['usuario']; /* capturo salvando o usuario */
    $senha = $_POST['senha']; /* capturo salvando a senha */

    /* CRIPTOGRAFIA DPS!! */

    $retornoLista = listarDadosDoisParametro('idusuario', 'usuario', 'usuario', 'senha', "$usuario", "$senha");
    if ($retornoLista != 'Vazio') {
        $_SESSION['usuario'] = $usuario; /* criando a sessão */
    } else {
        /*  session_destroy(); /* destroi a session caso seja igual a vazio (tentativa de acesso) */
        echo 'Vazio';  /* retorno vazio para o Ajax */
    }
}

$retornoListaSetor = capturarIdSetores('idsetores', 'usuario', 'usuario', "$usuario"); /* CAPTURO O ID DO SETOR DO CLIENTE LOGADO COM BASE EM SEU NOME */
if ($retornoListaSetor != 'Vazio') {
    foreach ($retornoListaSetor as $itemSetor) {
        $idSetor = $itemSetor->idsetores;
        $_SESSION['setor'] = $idSetor;
    }
    /*  echo $idSetor; */
}
