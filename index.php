<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/funcoes.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <?php 
    include_once "php/includes/cabecalho.php";
    
    include_once "php/includes/menuIndex.php";
    ?> 

    <main>
    <div class="conteiner">
    <h1> Seja Bem Vindo</h1>
    </div>
    <div class="container-fluid">
    <p  id="welcome">Aqui em nossa loja, programadores tem desconto nos produtos para sua casa. </p>
    </div> 
    </main> 
    <hr>


    <footer> 
    <?php
        include_once "php/includes/rodape.php";
    ?>
    </footer>
    
</body>
</html>
