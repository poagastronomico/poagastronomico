<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="descontoqrc.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            text-align:center;
            
        }
    </style>
    <h1>QR Code</h1>
    <?php
    $nome=$_GET["nome"];
    $restaurante=$_GET["restaurante"];

    echo"Olá, seja bem vindo $nome.";
    echo "<br>O seu desconto para o estabelecimento $restaurante está validado. Apresente no local e garante 10% de desconto. <br> Válido por 30 dias.";
    echo "<br> <img src='codigo.png'>";
    ?>
    <style>
        img{ margin-left: 20px;
            background-color:#b58d6f ;
        }
    </style>
</body>
</html>