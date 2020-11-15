<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
?>
    
    <div class="conteiner">
            <ul>
            <h4 onclick="exibir_todos()">Produtos(12)</h4>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupa')">Lavadoura de roupas (2)</li>
            <li onclick="exibir_categoria('lavalouca')">Lava-ouças (2)</li>
            </ul>
    </div>    
    
    <div class="conteiner">

        <div class="row">
            <?php
            require_once "./actions/db_connect.php";

            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($connect, $sql);

            while($row=mysqli_fetch_assoc($resultado)){
            ?> 
            
            <div class="box_produto" id="geladeira" style="display:block;">
            <img srcset="../imagens/produtos/<?php echo $row['imagem']; ?> ">
            <figcaption class="legenda">
            <p><?php echo $row['descricao']; ?></p>
            <p><?php echo $row['preco_venda']; ?></p>
        </div>

    <?php
        }
    ?>
    </div>
    
    <?php
        include_once "./includes/rodape.php";
    ?>

 