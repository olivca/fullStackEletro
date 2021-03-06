<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
?>
      
    <div class="conteiner-fluid">
        <div class="row"> 

            <div class="col-md-4">
            <ul>
            <h4 onclick="exibir_todos()">Produtos(12)</h4>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaroupa')">Lavadoura de roupas (2)</li>
            <li onclick="exibir_categoria('lavalouca')">Lava-ouças (2)</li>
            </ul>
            </div>    

            <?php
            require_once "./actions/db_connect.php" ;

            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($connect, $sql);
            $n = 0;

            while($row=mysqli_fetch_assoc($resultado)){
            ?> 
            
            <div class="row text-center p-5">
            <div class="col md-3 p-5">      
            <div class="box_produto" id="<?php echo $row['categoria']?>" style="display:block-inline;">
            <img srcset="../imagens/produtos/<?php echo $row['imagem']; ?>" width="120px" class='img'  onmouseover="zoom(<?php echo $n;?>);"  onmouseout="zoom(<?php echo $n;?>)">
            <figcaption class="legenda">
            <p><?php echo $row['descricao']; ?></p>
            <p><?php echo $row['preco_venda']; ?></p>
            <hr>
            </div>  
            </div>  
            </div>

    <?php
        $n++;
    }   
    ?>

        </div>
        </div>

    <?php
        include_once "./includes/rodape.php";
    ?>