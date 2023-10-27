<?php

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


switch ($acao) {
    case 'logar':
        include_once 'logar.php';
        break;
} 