<?php

function celsiusParaFahrenheit($c)
{
    $temperatura = $c * 9;
    $temperatura = $temperatura / 5;
    $temperatura = $temperatura + 32;

    return $temperatura;
}

function fahrenheitParaCelsius($f)
{
    $temperatura = $f - 32;
    $temperatura = $temperatura * 5;
    $temperatura = $temperatura / 9;

    return $temperatura;
}

$valor = $_POST['temperatura'];
$escala = $_POST['escala'];
$destino = $_POST['destino'];
$resultado = $valor;

if (($escala !== 'celsius' && $escala !== 'fahrenheit') || ($destino !== 'celsius' && $destino !== 'fahrenheit')) {
    exit('Escala inválida. Volte ao formulário e tente novamente.');
}

if ($escala === 'celsius' && $destino === 'fahrenheit') {
    $resultado = celsiusParaFahrenheit($valor);
}

if ($escala === 'fahrenheit' && $destino === 'celsius') {
    $resultado = fahrenheitParaCelsius($valor);
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da conversão</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <p><strong>Temperatura original:</strong> <?php echo number_format($valor, 2, ',', '.'); ?> <?php echo strtoupper($escala); ?></p>
        <p><strong>Temperatura convertida:</strong> <?php echo number_format($resultado, 2, ',', '.'); ?> <?php echo strtoupper($destino); ?></p>

        <a href="index.html">Nova conversão</a>
    </main>
</body>

</html>