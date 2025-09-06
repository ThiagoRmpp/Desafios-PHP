<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;
            $ant = $numero - 1;
            $suc = $numero + 1;
            //Da fzr tbm concatenando no próprio echo

            echo "O número escolhido foi <strong>$numero</strong>";
            echo "<br>O seu antecessor é <strong>$ant</strong>.";
            echo "<br>O seu sucessor é <strong>$suc</strong>."
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button> <!--&#x é para colocar carcteres UNICODE no HTML, esse código é de uma SETA PARA ESQUERDA    
        E esse código em javascript é para abrir a página do html-->
    </main>
</body>
</html>