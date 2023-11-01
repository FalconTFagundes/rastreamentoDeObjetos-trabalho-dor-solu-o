<?php include_once 'exped.php' ?>


<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h2 class="text-center  text-white">Cadastrar Produtos</h2>
        <form class="border border-dark p-3 mx-auto bg-white"  action="regisprodexped.php" method="post">
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