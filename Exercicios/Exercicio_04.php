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
        <div>
            <label for="num1">Primeiro Numero</label>
            <input type="text" name="numero1" placeholder="Primeiro numero">
        </div>
        <div>
            <label for="num2">Segundo Numero</label>
            <input type="text" name="numero2" placeholder="Segundo numero">
        </div>
        <div>
            <label for="num3">Terceiro Numero</label>
            <input type="text" name="numero3" placeholder="Terceiro numero">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php 

$data = $_POST;

function Decrescente($array){
    $arrayDec = array();
    foreach ($array as $key => $value) {
        $arrayDec[$key] = $value;
    }
    array_multisort($arrayDec, SORT_ASC, $array);

    print_r($array);
}

Decrescente($data);
?>
</html>