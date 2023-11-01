<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
include_once 'setorpecas.php';

try {
    $conn = conectar();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $prodpecas = filter_input(INPUT_POST, 'prodpecas', FILTER_SANITIZE_STRING);
        $quantprodpecas = filter_input(INPUT_POST, 'quantprodpecas', FILTER_SANITIZE_STRING);
        $datarecpecas = filter_input(INPUT_POST, 'datarecpecas', FILTER_SANITIZE_STRING);
        $resprecebpecas = filter_input(INPUT_POST, 'resprecebpecas', FILTER_SANITIZE_STRING);

        $resultado = insertquatro(
            'pecas',
            'produto, quantentregue, datarecebpecas, resprecebpecas',
            $prodpecas,
            $quantprodpecas,
            $datarecpecas,
            $resprecebpecas
        );

        if ($resultado === "Cadastrado") {
            echo "Dados cadastrados com sucesso!";
        } else {
            echo "Erro ao cadastrar os dados: " . $resultado;
        }
    }


    $produto_count = listarProdutosEQuantidades($conn, 'pecas');
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

    </div>

<?php
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>