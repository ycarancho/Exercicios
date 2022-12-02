<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Criar um algoritmos que imprima a tabuada
de um número-->
    <form action="" method="POST">
        <h1>Informe um numero e o modelo da taboada para receber o resultado</h1>
        <div>
            <label for="">Informe um numero inteiro</label>
            <input type="text" name="numero">
        </div>
        <div>
            <label for="">Informe o modelo</label>
            <select name="taboada">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php

$data = $_POST;
$modelo = $data['taboada'];
$numero = $data['numero'];
$listaNumeros = [
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10"
];

for ($i = 0; $i < count($listaNumeros); $i++) {
    switch ($modelo) {
        case '+':
            echo $numero . " + " . $listaNumeros[$i] . " = ";
            echo $numero + $listaNumeros[$i]  . "<br>";
            break;

        case '-':
            echo $numero . " - " . $listaNumeros[$i] . " = ";
            echo $numero - $listaNumeros[$i]  . "<br>";
            break;
        case '/':
            echo $numero . " / " . $listaNumeros[$i] . " = ";
            echo $numero / $listaNumeros[$i]  . "<br>";
            break;
        case '*':
            echo $numero . " * " . $listaNumeros[$i] . " = ";
            echo $numero * $listaNumeros[$i]  . "<br>";
            break;

        default:

            break;
    }
}
?>

</html>