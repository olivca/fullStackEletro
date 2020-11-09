<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
?>
<form class="form-pedidos" action="./actions/pedidos.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" id="endereco">
    
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone">
    
    <label for="nome_produto">Nome do Produto</label>
    <input type="text" name="nome_produto" id="nome_produto">
    
    <label for="vUnit">Valor Unitario</label>
    <input type="text" name="vUnit" id="vUnit">
    
    <label for="qtd">Quantidade</label>
    <input type="text" name="qtd" id="qtd">
    
    <label for="vTotal">Valor Total</label>
    <input type="text" name="vTotal" id="vTotal">

    <button type="submit" name="cadastro">Cadatrar</button>
</form>

<?php
        include_once "./includes/rodape.php";
?>
