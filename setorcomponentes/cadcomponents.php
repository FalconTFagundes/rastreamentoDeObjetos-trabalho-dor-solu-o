<?php include_once 'setorcomponents.php' ?>

<div class="bg-white w-75 mx-auto mt-3 ">
    <div class=" bg-secondary p-3">
        <h2 class="text-center  text-white">Cadastrar Produtos</h2>
        <form class="border border-dark p-3 mx-auto bg-white"  action="regiscomponents.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produto">Produto recebido</label>
                    <select id="produto" class="form-control" name="prodcomponents">
                        <option selected>Banco (corolla-2022)</option>
                        <option>Painel (Nissan Versa-2020)</option>
                        <option>Volante (Honda-Civic)</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="quantidade">Quantidade recebida</label>
                    <input type="text" class="form-control" id="quantentregue" name="quantentregue">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="data">Data de recebimento</label>
                    <input type="date" class="form-control" id="datareccomponents" name="datarecebcomponents">
                </div>

                <div class="form-group col-md-6">
                    <label for="responsavel">Responsável pelo recebimento</label>
                    <input type="text" class="form-control" id="rresprecebcomponents" name="resprecebcomponents">
                </div>
            </div>



            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>
</div>