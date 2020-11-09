<?php
    require_once "db_connect.php";

    if(isset($_POST['cadastro'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco']; 
        $telefone = $_POST['telefone']; 
        $nome_produto = $_POST['nome_produto']; 
        $vUnit = $_POST['vUnit'];
        $qtd = $_POST['qtd']; 
        $vTotal = $_POST['vTotal']; 

    $sql = "INSERT INTO pedidos VALUES(null,'$nome', '$endereco', '$telefone', '$nome_produto', '$vUnit', '$qtd', '$vTotal');";
    
    mysqli_query($connect, $sql);
    
    }    
?>
    