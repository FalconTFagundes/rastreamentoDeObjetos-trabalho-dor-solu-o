<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Almoxarifado</title>

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
      margin-right: 1200px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="almoxarife.php">ALMOXARIFADO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#cadastrarProdAlmoxarifado">Recebimento de Material</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#saidaProdAlmoxarifado">Saída de Material</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="estoqueAlmoxarife.php">Estoque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../painel/logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </nav>





  <!-- MODAL DE RECEBIMENTO -->
  <div class="modal" tabindex="-1" role="dialog" id="cadastrarProdAlmoxarifado">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
          <h5 class="modal-title" style=" color: white;">Recebimento de Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="border border-dark p-3 mx-auto bg-white mt-2 rounded w-100" action="regisprodal.php" method="post">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="transportadora">Transportadora</label>
                <select id="transportadora" class="form-control" name="transport">
                  <option selected>Transportadora 1</option>
                  <option>Transportadora 2</option>
                  <option>Transportadora 3</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="produto">Produto</label>
                <select id="produto" class="form-control" name="produtoAl">
                  <option selected>amortecedor</option>
                  <option selected>carburador</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="quantidade">Quantidade solicitada</label>
                <input type="text" class="form-control" id="quantSolicitAl" name="quantSolicitAl">
              </div>

              <div class="form-group col-md-6">
                <label for="quantidade">Quantidade entregue</label>
                <input type="text" class="form-control" id="quantEntregueAl" name="quantEntregueAl">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="respSetor">Setor Responsável</label>
                <select id="respSetor" class="form-control" name="respSetorAl">
                  <option selected>Setor 1</option>
                  <option>Setor 2</option>
                  <option>Setor 3</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="solicitanteSetorAl">Solicitante</label>
                <input type="text" class="form-control" id="solicitanteSetorAl" name="solicitanteSetorAl">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6 mt-4">
                <label for="baixaProdAl">Baixa de produtos</label>
                <input type="text" class="form-control" id="baixaProdL" name="baixaProdAl">
              </div>

              <div class="form-group col-md-6">
                <label for="obsEntregAl">Observações</label>
                <textarea class="form-control" id="obsEntregAl" name="obsEntregAl"></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL DE SAÍDA -->
  <div class="modal" tabindex="-1" role="dialog" id="saidaProdAlmoxarifado">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black;">
          <h5 class="modal-title" style=" color: white;">Saída de Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="border border-dark p-3 mx-auto bg-white " action="cadsaidaprod.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="produto">Produto enviado</label>
                <select id="produto" class="form-control" name="prodsaida">
                  <option>amortecedor</option>
                  <option>carburador</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="quantsaidaprod">Quantidade de envio</label>
                <input type="text" class="form-control" id="quantsaidaprod" name="quantsaidaprod">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="quantidade">Data de envio</label>
                <input type="date" class="form-control" id="dataenvprod" name="dataenvprod">
              </div>

              <div class="form-group col-md-6">
                <label for="quantidade">Respnsável pelo envio</label>
                <input type="text" class="form-control" id="respenvprod" name="respenvprod">
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="setorsaidaprod">Setor de recebimento</label>
                <select id="setorsaidaprod" class="form-control" name="setorsaidaprod">
                  <option selected>Setor 1</option>
                  <option>Setor 2</option>
                  <option>Setor 3</option>
                </select>
              </div>


              <div class="form-group col-md-6">
                <label for="obsenvprod">Observações</label>
                <textarea class="form-control" id="obsenvprod" name="obsenvprod"></textarea>
              </div>
            </div>




            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

          </form>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>