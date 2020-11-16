<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
?>

<div class="conteiner" action="./actions/pedidos.php" method="POST">
    <div class="col-lg-10">
        <div class="col-6 mx-auto pt-5 bg-light">

        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco">
        </div>

        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
        </div>
    
        <div class="form-group col-4 mx-auto pt-4 ">     
            <label for="nome_produto">Nome do Produto</label>
            <input type="text" name="nome_produto" id="nome_produto">
        </div>
    
        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="vUnit">Valor Unitario</label>
            <input type="text" name="vUnit" id="vUnit">
        </div>

        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="qtd">Quantidade</label>
            <input type="text" name="qtd" id="qtd">
        </div>

        <div class="form-group col-4 mx-auto pt-4 "> 
            <label for="vTotal">Valor Total</label>
            <input type="text" name="vTotal" id="vTo    tal">

            <button type="submit" class="btn btn-primary" name="cadastro">Cadatrar</button>
        </div>
       
    </div>
</div>

<?php
        include_once "./includes/rodape.php";
?>
