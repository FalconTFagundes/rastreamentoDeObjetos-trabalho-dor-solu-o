<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Expedição</title>

    <style>
        body::before {
            content: "";
            background-image: url('../images/bgPecas.jpg');
            background-repeat: repeat;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
        }

        .navbar-nav .nav-item .nav-link {
            margin-right: 20px;
        }

        .navbar-brand {
            margin-right: 1210px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="exped.php">EXPEDIÇÃO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#recebimentoDeMaterialExpedicao">Recebimento de Material</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#saidaDeMaterialExpedicao">Saída de Material</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estoqueExpedicao.php">Estoque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../painel/logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>




    <!-- MODAL DE RECEBIMENTO -->
    <div class="modal" tabindex="-1" role="dialog" id="recebimentoDeMaterialExpedicao">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                    <h5 class="modal-title" style=" color: white;">Recebimento de Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="border border-dark p-3 mx-auto bg-white" action="regisprodexped.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="produto">Produto recebido</label>
                                <select id="produto" class="form-control" name="produto">
                                    <option selected>Renout Clio 2022</option>
                                    <option>Porta de corolla 2021</option>
                                    <option>Motor Pálio 2023</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="quantidade">Quantidade</label>
                                <input type="text" class="form-control" id="quantentregue" name="quantentregue">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pedidoSetor">Setor Responsável</label>
                                <select id="pedidoSetor" class="form-control" name="setorexped">
                                    <option selected>Setor 1</option>
                                    <option>Setor 2</option>
                                    <option>Setor 3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="datarecexped">Data de recebimento</label>
                                <input type="date" class="form-control" id="datarecexped" name="datarecexped">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="respexped">Responsável pelo recebimento</label>
                            <input type="text" class="form-control" id="respexped" name="respexped">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- MODAL DE SAÍDA -->
    <div class="modal" tabindex="-1" role="dialog" id="saidaDeMaterialExpedicao">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                    <h5 class="modal-title" style=" color: white;">Saída de Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="border border-dark p-3 mx-auto bg-white" action="cadsaidaexped.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="prodexpedsaida">Produto enviado</label>
                                <select id="prodexpedsaida" class="form-control" name="prodexpedsaida">
                                    <option selected>Renout Clio 2022</option>
                                    <option>Porta de corolla 2021</option>
                                    <option>Motor Pálio 2023</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="quantprodexpedsaida">Quantidade de envio</label>
                                <input type="text" class="form-control" id="quantprodexpedsaida" name="quantprodexpedsaida">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="prodexpedsaida">Setor responsavel</label>
                                <select id="setorenvresp" class="form-control" name="setorenvresp">
                                    <option selected>setor 1</option>
                                    <option>setor 2</option>
                                    <option>setor 3</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="quantidade">Respnsável pelo envio</label>
                                <input type="text" class="form-control" id="respenvprodexped" name="respenvprodexped">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dataenvprodexped">Data de envio</label>
                                <input type="date" class="form-control" id="dataenvprodexped" name="dataenvprodexped">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="destinoenvprod">Destino de envio</label>
                                <select id="destinoenvprod" class="form-control" name="destinoenvprod">
                                    <option selected>destino 1</option>
                                    <option>destino 2</option>
                                    <option>destino 3</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>