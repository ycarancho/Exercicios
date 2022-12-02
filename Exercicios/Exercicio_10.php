<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Entrar com 20 números e imprimir a soma
dos positivos e o total de números negativos -->
    <form action="" method="POST">
        <h1>Informe 20 numeros entre positivos e negativos</h1>
        <div style="display:grid; gap:5px; width:50px">
            <label for="">Informe 20 numeros</label>
            <input type="text" name="numero1">
            <input type="text" name="numero2">
            <input type="text" name="numero3">
            <input type="text" name="numero4">
            <input type="text" name="numero5">
            <input type="text" name="numero6">
            <input type="text" name="numero7">
            <input type="text" name="numero8">
            <input type="text" name="numero9">
            <input type="text" name="numero10">
            <input type="text" name="numero11">
            <input type="text" name="numero12">
            <input type="text" name="numero13">
            <input type="text" name="numero14">
            <input type="text" name="numero15">
            <input type="text" name="numero16">
            <input type="text" name="numero17">
            <input type="text" name="numero18">
            <input type="text" name="numero19">
            <input type="text" name="numero20">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;

function somaPositivo($data)
{
    $arrayPositivo = [];
    $arrayNegativo = [];
    foreach ($data as $key => $value) {
        ($value >= 0) ? $arrayPositivo[] = $value : $arrayNegativo[] = $value;
    }

    $sumTotal = array_sum($arrayPositivo);
    $totalNegativos = count($arrayNegativo);
    print_r("Total da soma dos positivos = " . $sumTotal . "<br>");
    print_r("Total de numeros negativos = " . $totalNegativos . "<br>");
}
somaPositivo($data)
?>

</html>