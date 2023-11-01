<?php include_once 'setorpecas.php' ?>

<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h3 class="text-center text-white">Cadastrar saída de produtos</h3>
        <form class="border border-dark p-3 mx-auto bg-white"  action="cadsaidapecas.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produto">Produto enviado</label>
                    <select id="produto" class="form-control" name="prodsaidapecas">
                        <option selected>amortecedor</option>
                        <option>farol</option>
                        <option>pedal do acelerador(fox-2023)</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Quantidade de envio</label>
                    <input type="text" class="form-control" id="quantsaidapecas" name="quantsaidapecas">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quantidade">Data de envio</label>
                    <input type="date" class="form-control" id="dataenvpecas" name="dataenvpecas">
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Respnsável pelo envio</label>
                    <input type="text" class="form-control" id="respenvpecas" name="respenvpecas">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>
</div>