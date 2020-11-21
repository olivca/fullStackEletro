<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
    ?> 
    
    
    <main>
        <h2>Nossas Lojas</h2>
    <hr>
    <div class="jumbotron jumbotron-fluid">
    <div class="row text-center p-3">

    <table border="0 width="100%" cellpadding="20">
        <tr>
            <td width="40%"><br>
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; andar</p>
                <p>Centro</p>
                <p>(21)3333-3333</P>
            </td>
            <td width="40%"><br>
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11)4444-4444</P>
            </td>
            <td width="403%">
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute; vila, 370</p>
                <p>Vila Mariana</p>
                <p>(21)3333-3333</P>
            </td>
        </tr>    
    </table>
    </div>
    </div>

    </main>
    <br><br>
    <br><br>

    <footer> 
    <?php
        include_once "./includes/rodape.php";
    ?>
    </footer>

</body>
</html>
