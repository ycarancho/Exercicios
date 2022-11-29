<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Informe os 3 lados de um triangulo para obter a sua classificação</h1>
        <div>
            <label for="lado">Primeiro lado</label>
            <input type="text" name="numero1" placeholder="AB">
        </div>
        <div>
            <label for="lado2">Segundo lado</label>
            <input type="text" name="numero2" placeholder="BC">
        </div>
        <div>
            <label for="lado3">Terceiro lado</label>
            <input type="text" name="numero3" placeholder="AC">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>

<?php
$data = $_POST;

function classificacaoTriangulo($data)
{
    $A = $data['numero1'];
    $B = $data['numero2'];
    $C = $data['numero3'];
    if (($A + $B > $C) && ($C + $B > $A) && ($C + $A > $B)) {
        if ($A == $B && $C == $B) {
            echo "Classificação Triângulo Equilátero !";
        } elseif ($A == $B && $B != $C) {
            echo "Classificação Triângulo Isósceles !";
        } elseif ($A != $B && $B != $C) {
            echo "Classificação Triângulo Escaleno !";
        }
    }
}

classificacaoTriangulo($data);
?>

</html>