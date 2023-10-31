<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once 'func/func.php';

if (isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['senha']) and !empty($_POST['senha'])) {
    $usuario = $_POST['usuario']; /* capturo salvando o usuario */
    $senha = $_POST['senha']; /* capturo salvando a senha */

    /* CRIPTOGRAFIA DPS!! */

    $retornoListaSetor = capturarIdSetores('idsetores', 'usuario', 'usuario', "$usuario"); /* CAPTURO O ID DO SETOR DO CLIENTE LOGADO COM BASE EM SEU NOME */
    if($retornoListaSetor != 'Vazio'){
       foreach($retornoListaSetor as $itemSetor){
        $idSetor = $itemSetor -> idsetores;
       }
      /*  echo $idSetor; */
    }


    $retornoLista = listarDadosDoisParametro('idusuario', 'usuario', 'usuario', 'senha', "$usuario", "$senha");
    if ($retornoLista != 'Vazio') {
        $_SESSION['usuario'] = $usuario; /* criando a sessão */
    } else {
        /*  session_destroy(); /* destroi a session caso seja igual a vazio (tentativa de acesso) */
        echo 'Vazio';  /* retorno vazio para o Ajax */
    }
}

// Redirecionamento com base no cargo do usuário
/* switch ($cargo_usuario) {
    case "almoxarife":
        header("Location: ./almoxarife/almoxarife.php");
        exit();
    case "gerente_de_pecas":
        header("Location: setorpecas/setorpecas.php");
        exit();
    case "gerente_de_componentes":
        header("Location: setorcomponents/setorcomponents.php");
        exit();
    case "gerente_de_produto_final":
        header("Location: produtofinalizado/setorprodfinal.php");
        exit();
    case "gerente_de_expedicao":
        header("Location: expedicao/exped.php");
        exit();
    case "gerente_de_expedicao":
        header("Location: expedicao/exped.php");
        exit();
}
 */