<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel Administrador</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Seu CSS */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 0 0 0 10px;
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh);
            padding-top: 20px;
            overflow-y: auto;
        }

        a {
            color: white;
        }

        body::before {
            content: "";
            background-image: url('../images/adm.png');
            background-repeat: repeat;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
        }

        /* Estilos para o botão de fechar */
        #fecharIframe {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 999;
        }

        .frametable {
            max-width: 900px;

        }

        .navbar-nav .nav-item .nav-link {
            margin-right: 20px;
        }

        .navbar-brand {
            margin-right: 870px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="exped.php">Área Adm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="estoqueGeralAdm.php">Estoque Geral</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#cadastrarUsuario">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../painel/logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- MODAL DE CADASTRO -->
    <div class="modal" tabindex="-1" role="dialog" id="cadastrarUsuario">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                    <h5 class="modal-title" style=" color: white;">Cadastrar Funcionário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="border border-dark p-3 mx-auto bg-white" action="cadastrarFuncionario.php" method="post">
                        <div class="form-group">
                            <label for="nomeFunc">Digite o Nome de Acesso do Funcionário</label>
                            <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Nome">
                            <small id="nomeFunc" class="form-text text-muted">Evite utilizar apelidos, estamos em um ambiente formal.</small>
                        </div>
                        <div class="form-group">
                            <label for="senhaFunc">Informe o Setor de Atuação do Funcionário</label>
                            <div class="form-group">
                                <select name="setorFunc">
                                    <option select value="1">Almoxarifado</option>
                                    <option value="2">Setor de Peças</option>
                                    <option value="3">Setor de Componentes</option>
                                    <option value="4">Setor de Produtos Finais</option>
                                    <option value="5">Expedição</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label for="senhaFunc">Digite a Senha de Acesso do Funcionário</label>
                            <input type="password" class="form-control" id="senhaFunc" name="senhaFunc" placeholder="Senha">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar Novo Funcionário</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>