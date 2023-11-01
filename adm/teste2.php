<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="formNovoProduto">
    <input type="text" id="nomeProduto" placeholder="Nome do Produto">
    <!-- Adicione mais campos para os detalhes do produto, como descrição, preço, etc. -->

    <button type="button" onclick="cadastrarNovoProduto()">Cadastrar Produto</button>
</form>


<select id="selectProdutos">
    <!-- Aqui você pode ter as opções iniciais preenchidas a partir do banco de dados -->
    <option value="produto1">Produto 1</option>
    <option value="produto2">Produto 2</option>
    <!-- ... -->
</select>
<script>

function cadastrarNovoProduto() {
    // Aqui você faria a requisição para enviar os dados do novo produto para o servidor (pode ser com AJAX, por exemplo)
    // Coletar os dados do formulário
    const novoProduto = document.getElementById('nomeProduto').value;

    // Simular uma requisição assíncrona para o servidor
    // Suponha que você fará um POST para um arquivo PHP que lidará com o banco de dados
    // Aqui, o exemplo apenas adiciona a nova opção após um pequeno intervalo simulando o processamento no servidor
    setTimeout(() => {
        // Adicionar o novo produto à lista de opções
        const select = document.getElementById('selectProdutos');
        const option = document.createElement('option');
        option.value = novoProduto;
        option.textContent = novoProduto;
        select.appendChild(option);

        // Limpar o campo de input após adicionar o novo produto
        document.getElementById('nomeProduto').value = "";
    }, 1000); // Simulando 1 segundo de atraso na resposta do servidor
}

</script>
</body>
</html>