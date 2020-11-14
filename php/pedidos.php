<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
?>

<div class="conteiner"  action="./actions/pedidos.php" method="POST">
    <div class="form-group"> 
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div class="form-group"> 
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco">
    </div>

    <div class="form-group"> 
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
    </div>
    
    <div class="form-group">     
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto">
    </div>
    
    <div class="form-group"> 
        <label for="vUnit">Valor Unitario</label>
        <input type="text" name="vUnit" id="vUnit">
    </div>

    <div class="form-group"> 
        <label for="qtd">Quantidade</label>
        <input type="text" name="qtd" id="qtd">
    </div>

    <div class="form-group"> 
        <label for="vTotal">Valor Total</label>
        <input type="text" name="vTotal" id="vTotal">
    </div>
        <button type="submit" class="btn btn-primary" name="cadastro">Cadatrar</button>
</div>

<?php
        include_once "./includes/rodape.php";
?>
