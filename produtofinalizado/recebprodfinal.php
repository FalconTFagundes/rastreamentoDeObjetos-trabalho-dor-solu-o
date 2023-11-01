<?php include_once 'setorprodfinal.php' ?>

<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
    <h2 class="text-center  text-white">Cadastrar Produtos</h2>
        <form class="border border-dark p-3 mx-auto bg-white"  action="regisprodfinal.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produto">Produto recebido</label>
                    <select id="produto" class="form-control" name="produto">
                        <option selected>Polo 2024</option>
                        <option>Toyota Hillux 2021</option>
                        <option>Gol 2022</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Quantidade recebida</label>
                    <input type="text" class="form-control" id="quantentregue" name="quantentregue">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quantidade">Data de recebimento</label>
                    <input type="date" class="form-control" id="prodfinalenv" name="datarecprod">
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Respnsável pelo envio</label>
                    <input type="text" class="form-control" id="resprodfinal" name="resprodfinal">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
        <div>
        </div>