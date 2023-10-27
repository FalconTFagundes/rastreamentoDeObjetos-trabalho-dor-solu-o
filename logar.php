<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once 'func/func.php';

if (isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['senha']) and !empty($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $retornoLista = listarDadosDoisParametro('idusuario','usuario','usuario','senha',"$usuario","$senha");
    if($retornoLista!='Vazio'){
        $_SESSION['usuario'] = $usuario; /* criando a sessão */
    }else{
        session_destroy(); /* destroi a session caso seja igual a vazio (tentativa de acesso) */
        echo'Vazio';  /* retorno vazio para o Ajax */
    }

}
