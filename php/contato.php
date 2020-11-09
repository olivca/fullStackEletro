<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php 
    include_once "./includes/cabecalho.php";
    
    include_once "./includes/menu.php";
    ?> 
    
    <main>
    <h2>Nossos Contatos</h2>
    <hr>
    <table border=0 width="100%" cellpadding="20">
        <tr>
            <td width="50%" align="center">
                <img width="14%" src="../imagens/email.png" width="40px"><br>
                contato@fullstackeletro.com
            </td>
            <td width="50%" align="center">
                <img src="../imagens/whatsapp.jpg" width="80px"><br>
                (11) 99999-9999
            </td>
        </tr>

    </table>
    </main>
    <form>
        <h4>Nome: </h4>
        <input type="text" style="width: 400px;">
        <h4>Mensagem: </h4>
        <textarea style="width: 400px;"></textarea>
        
        <input type="submit" value="Enviar">

    </form>
    <br><br>
    <br><br>

    <footer> 
    <?php
        include_once "./includes/rodape.php";
    ?>
    </footer>

</body>
</html>
