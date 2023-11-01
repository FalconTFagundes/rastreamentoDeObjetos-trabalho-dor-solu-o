<?php include_once 'exped.php' ?>


<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h3 class="text-center text-white">Cadastrar saída de produtos</h3>

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
        </form>
    </div>
</div>
</div>