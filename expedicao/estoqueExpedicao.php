<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
include_once 'exped.php';

try {
    // Establish a connection to the database using PDO
    $conn = conectar();

    // List products and quantities in the table
    $produto_count = listarProdutosEQuantidades($conn, 'expedicao');
?>
    <br><br>
    <div class="container-fluid">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produto_count as $produto => $quantidade) {
                ?>
                    <tr>
                        <td><?php echo $produto; ?></td>
                        <td><?php echo $quantidade; ?></td>
                    <?php } ?>
            </tbody>
        </table>


    <?php
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    