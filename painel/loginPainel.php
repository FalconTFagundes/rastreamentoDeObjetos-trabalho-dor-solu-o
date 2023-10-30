<?php
include_once('../config/constantes.php');

if(!empty($_SESSION['usuario'])){
echo'existe '. $_SESSION['usuario'];
echo"<a href='logout.php'>sair</a>";
}else{
    ?>
    <meta http-equiv="refresh" content="1;url=../index.php">
    <?php
}
?>

