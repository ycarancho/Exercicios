<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5 --> 
    <form action="" method="POST">
        <div>
            <label for="numero1">Numero 1</label>
            <input type="text" name="numero1" placeholder="Digite o primeiro numero">
        </div>
        <div>
            <label for="numero2">Numero 2</label>
            <input type="text" name="numero2" placeholder="Digite o segundo numero">
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
<?php

$numero = $_POST;
$soma = $numero['numero1'] + $numero['numero2'];
define('num20', 20);


if ($soma > num20) {
    $soma += 8;
    echo $soma;
}else if ($soma <= num20) {
   $soma -= 5;
   echo $soma;
}{

}
?>

</html>