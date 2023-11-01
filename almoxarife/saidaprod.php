<?php
include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../func/func.php';
?>


<?php include_once 'almoxarife.php' ?>

<div class="bg-white w-75 mx-auto mt-3 ">
  <div class=" bg-secondary p-3">
  <h3 class="text-center text-white">Cadastrar saída de produtos</h3>
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