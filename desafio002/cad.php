<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aletórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "<p>Gerando um núemro aleatório entre $min e $max... <br>O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
        <!--Esse código do javacript é para recarregar a pág
        E esse código unicode é o emoji de REVERSÃO-->
    </main>
</body>
</html>