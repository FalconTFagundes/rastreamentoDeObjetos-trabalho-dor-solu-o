<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
include_once 'almoxarife.php';

try {
    $conn = conectar(); 
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
                $produto_count = listarProdutosEQuantidades($conn, 'almoxarife');

                foreach ($produto_count as $produto => $quantidade) {
                ?>
                    <tr>
                        <td><?php echo $produto; ?></td>
                        <td><?php echo $quantidade; ?></td>
                    <?php } ?>
            </tbody>
        </table>

    </div>



<?php
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>