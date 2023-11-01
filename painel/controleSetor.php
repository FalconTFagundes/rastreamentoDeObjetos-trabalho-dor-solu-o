<?php
include_once('../config/constantes.php');

if (!empty($_SESSION['usuario']) and !empty($_SESSION['setor'])) {
   /*  echo 'existe ' . $_SESSION['usuario'] . ' setor: ' . $_SESSION['setor']; verificando existencia - requer remoção dos IF's abaixo!*/

    // Redirecionamento com base no cargo do usuário
    if ($_SESSION['setor'] == 1) {
        header("Location: ../almoxarife/almoxarife.php");
    } else if ($_SESSION['setor'] == 2) {
        header("Location: ../setorpecas/setorpecas.php");
    } else if ($_SESSION['setor'] == 3){
        header("Location: ../setorcomponentes/setorcomponents.php");
    } else if ($_SESSION['setor'] == 4){
        header("Location: ../produtofinalizado/setorprodfinal.php");
    } else if ($_SESSION['setor'] == 5){
        header("Location: ../expedicao/exped.php");
    }
} else {
?>
    <meta http-equiv="refresh" content="1;url=../index.php">
<?php
}
?>