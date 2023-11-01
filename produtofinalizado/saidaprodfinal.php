
<?php include_once 'setorprodfinal.php' ?>
<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h3 class="text-center text-white">Cadastrar saída de produtos</h3>
        <form class="border border-dark p-3 mx-auto bg-white"  action="cadsaidaprodfinal.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prodfinalsaida">Produto enviado</label>
                    <select id="prodfinalsaida" class="form-control" name="prodfinalsaida">
                        <option selected>Polo 2024</option>
                        <option>Toyota Hillux 2021</option>
                        <option>Gol 2022</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantprodsaida">Quantidade de envio</label>
                    <input type="text" class="form-control" id="quantprodsaida" name="quantprodsaida">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dataenvprodfinal">Data de envio</label>
                    <input type="date" class="form-control" id="dataenvprodfinal" name="dataenvprodfinal">
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Respnsável pelo envio</label>
                    <input type="text" class="form-control" id="respenvcomponents" name="respenvprodfinal">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>
</div>