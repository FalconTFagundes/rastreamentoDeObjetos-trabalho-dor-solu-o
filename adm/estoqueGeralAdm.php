<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
include_once '../estilo/bootstrap.php';
?>

<?php
try {

    $conn = conectar();

?>
    <!-- ESTOQUE ALMOXARIFE -->
    <br><br>
    <h4 style="text-align: center; background-color: gray;">ESTOQUE DO ALMOXARIFADO</h4>
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

    <!-- TABELA EXPEDICAO -->
    <?php
    $produto_count = listarProdutosEQuantidades($conn, 'expedicao');
    ?>
    <br><br>
    <h4 style="text-align: center; background-color: gray;">ESTOQUE DA EXPEDIÇÃO</h4>
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

    </div>

    <!-- ESTOQUE PRODUTO FINALIZADO  -->
    <br><br>
    <h4 style="text-align: center; background-color: gray;">ESTOQUE DE PRODUTOS FINALIZADOS</h4>
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
                $produto_count = listarProdutosEQuantidades($conn, 'prodfinal');
                foreach ($produto_count as $produto => $quantidade) {
                ?>
                    <tr>
                        <td><?php echo $produto; ?></td>
                        <td><?php echo $quantidade; ?></td>
                    <?php } ?>
            </tbody>
        </table>

    </div>

    <!-- ESTOQUE COMPONENTES -->


    <br><br>
    <h4 style="text-align: center; background-color: gray;">ESTOQUE DE COMPONENTES</h4>
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
                $produto_count = listarProdutosEQuantidades($conn, 'components');

                foreach ($produto_count as $produto => $quantidade) {
                ?>
                    <tr>
                        <td><?php echo $produto; ?></td>
                        <td><?php echo $quantidade; ?></td>
                    <?php } ?>
            </tbody>
        </table>

    </div>

    <!-- ESTOQUE DE PEÇAS -->

    <br><br>
    <h4 style="text-align: center; background-color: gray;">ESTOQUE DE PEÇAS</h4>


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
                $produto_count = listarProdutosEQuantidades($conn, 'pecas');
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

// Não é necessário fechar a conexão com o banco de dados usando PDO
?>