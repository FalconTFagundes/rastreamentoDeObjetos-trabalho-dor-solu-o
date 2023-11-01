<?php
    include_once '../config/conexao.php';
    include_once '../config/constantes.php';
    include_once '../func/func.php';
   ?>


<?php include_once 'almoxarife.php'?>

<div class="bg-white w-75 mx-auto mt-3 ">
  <div class=" bg-secondary p-3">
  <h2 class="text-center  text-white">Cadastrar Produtos</h2>
<form class="border border-dark p-3 mx-auto bg-white mt-2 rounded w-100"  action="regisprodal.php" method="post">

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