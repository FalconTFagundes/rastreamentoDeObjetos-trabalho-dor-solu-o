<?php include_once 'setorpecas.php' ?>

<<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h2 class="text-center  text-white">Cadastrar Produtos</h2>
        <form class="border border-dark p-3 mx-auto bg-white"   action="regispecas.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produto">Produto recebido</label>
                    <select id="produto" class="form-control" name="prodpecas">
                        <option selected>amortecedor</option>
                        <option>farol</option>
                        <option>pedal do acelerador(fox-2023) </option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Quantidade recebida</label>
                    <input type="text" class="form-control" id="quantprodpecas" name="quantprodpecas">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quantidade">Data de recebimento</label>
                    <input type="date" class="form-control" id="datarecpecas" name="datarecpecas">
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Respnsável pelo recebimento</label>
                    <input type="text" class="form-control" id="resprecebpecas" name="resprecebpecas">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>
    </div>