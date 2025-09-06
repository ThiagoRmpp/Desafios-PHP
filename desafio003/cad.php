<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado da Conversão</h1>
        <?php
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $cotação = 5.41;
            $real = $_REQUEST["din"] ?? 0;
            $dolar = $real / $cotação;

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javacript:history.go(-1)">Voltar</button>
    </main>
</body>