<?php include_once 'setorcomponents.php' ?>

<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h3 class="text-center text-white">Cadastrar saída de produtos</h3>
        <form class="border border-dark p-3 mx-auto bg-white"  action="cadsaidacomponents.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prodsaidacomponents">Produto enviado</label>
                    <select id="prodsaidacomponents" class="form-control" name="prodsaidacomponents">
                        <option selected>Banco (corolla-2022)</option>
                        <option>Painel (Nissan Versa-2020)</option>
                        <option>Volante (Honda-Civic)</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Quantidade de envio</label>
                    <input type="text" class="form-control" id="quantsaidacomponents" name="quantsaidacomponents">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quantidade">Data de envio</label>
                    <input type="date" class="form-control" id="dataenvcomponents" name="dataenvcomponents">
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Respnsável pelo envio</label>
                    <input type="text" class="form-control" id="respenvcomponents" name="respenvcomponents">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>
</div>