<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
</style>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" setp="5" value="<?=$saque?>" required>
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        $resto = $saque;
        // Saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100; // o %= substitui o $resto = resto % ...
        // Saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        // Saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;
        // Saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="R$100" class="nota"><strong>x<?=$tot100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="R$50" class="nota"><strong>x<?=$tot50?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="R$10" class="nota"><strong>x<?=$tot10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="R$5" class="nota"><strong>x<?=$tot5?></strong></li>
        </ul>
    </section>
</body>
</html>