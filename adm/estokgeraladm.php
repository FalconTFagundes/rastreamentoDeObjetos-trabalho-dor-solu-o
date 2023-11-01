<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
    include_once '../estilo/bootstrap.php';
    ?>
  
  <?php
try {
    // Estabeleça a conexão com o banco de dados usando PDO
    $conn = conectar(); // Supondo que a função conectar() já esteja definida em func.php

    ?>
   
    <div class="border border-dark border-5 bg-secondary  mx-auto mt-3 ">
    <h2 class="text-center  text-white ">Estoque geral</h2>
    <table class="table table-bordered  mx-auto text-center bg-white mt-3 w-100 h-100 ">
    
        <thead >
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $produto_count = listarProdutosEQuantidades($conn, 'almoxarife'); 

            foreach ($produto_count as $produto => $quantidad) {
            ?>
                <tr >
                    <td><?php echo $produto; ?></td>
                    <td><?php echo $quantidad; ?></td>
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

// Não é necessário fechar a conexão com o banco de dados usando PDO
?>

