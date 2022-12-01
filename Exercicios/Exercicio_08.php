<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto. -->
    <form action="" method="POST">
        <div>
            <label for="numero">Numero: </label>
            <input type="text" name="numero" placeholder="Informe um numero inteiro">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php 
$data = $_POST;
$numero = $data['numero'];

function imprimirNumeros($numero){
    echo "Imprime todos os numero de 1 ate $numero". "<br>";
    for ($i=1; $i <= $numero ; $i++) { 
        echo "$i <br>";
    }
    echo "Imprime o produto de $numero". "<br>";
    for ($i=1; $i <= $numero ; $i++) { 
        if ($numero %$i == 0) {
            echo "$i*" . ($numero/$i) . " = $numero" . "<br>";
        }
    }
}
imprimirNumeros($numero);
?>
</html>