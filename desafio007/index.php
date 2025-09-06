<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantidade de Salários Mínimos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $minimo = 1518;
            $salario = $_GET['sal'] ?? $minimo;
        ?>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Sálario (R$)</label>
        <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
        <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um sálario de <strong>R\$". number_format($salario, "2", ",", ".") . "</strong> ganha <strong>$tot salários mínimos</strong> + <strong>R\$ ". number_format($dif, "2", ",", "."). "</strong></p>";
        ?>
    </section>
</body>
</html>