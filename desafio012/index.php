<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--
    1 min = 60 seg
    1 h = 3600 seg
    1 dia = 86.400 seg
    1 semana = 604.800 seg
    -->
    <?php 
        $total = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total se segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total;
        // Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // Total de Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        // Total de Segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><strong><?=$semana?></strong> semanas</li>
            <li><strong><?=$dia?></strong> dias</li>
            <li><strong><?=$hora?></strong> horas</li>
            <li><strong><?=$minuto?></strong> minutos</li>
            <li><strong><?=$segundo?></strong> segundos</li>
        </ul>
    </section>
</body>
</html>