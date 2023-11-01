<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
include_once 'exped.php';

try {
    // Establish a connection to the database using PDO
    $conn = conectar();

    // Check if the form was submitted and process the data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $prodexped = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
        $quantentregue = filter_input(INPUT_POST, 'quantentregue', FILTER_SANITIZE_STRING);
        $setorexped = filter_input(INPUT_POST, 'setorexped', FILTER_SANITIZE_STRING);
        $datarecexped = filter_input(INPUT_POST, 'datarecexped', FILTER_SANITIZE_STRING);
        $respexped = filter_input(INPUT_POST, 'respexped', FILTER_SANITIZE_STRING);

        $resultado = insertcinco(
            'expedicao',
            'produto, quantentregue, setorexped, dataexped, respexped',
            $prodexped,
            $quantentregue,
            $setorexped,
            $datarecexped,
            $respexped
        );


        if ($resultado === "Cadastrado") {
            echo "Dados cadastrados com sucesso!";
        } else {
            echo "Erro ao cadastrar os dados: " . $resultado;
        }
    }

    // List products and quantities in the table
    $produto_count = listarProdutosEQuantidades($conn, 'expedicao');
?>
    <div class="border border-dark border-5 bg-secondary w-75 mx-auto p-1 mt-3">
        <h2 class="text-center  text-white ">Estoque expedição</h2>
        <table class="table table-bordered bg-white mx-auto text-center">
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
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>