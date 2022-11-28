<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes-->
<form action="" method="POST">
        <div>
            <label for="numero1">Numero</label>
            <input type="text" name="numero1" placeholder="Digite um numero">
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
<?php
$numero = $_POST;
$num = $numero['numero1'];

function divisible($number){
    if ($number % 5 == 0 || $number % 10 == 0 || $number % 2 == 0) {
        if ($number % 5 == 0) {
            echo "O numero $number é divisivel por 5" . "</br>";
         }
         if($number % 10 == 0){
             echo "O numero $number é divisivel por 10". "</br>" ;
         }
         if($number % 2 == 0){
             echo "O numero $number é divisivel por 2" . "</br>";
         }
    }else{
        echo "O numero $number não é divisivel pelas opções";
    }
}

echo "Verificar se o numero $num é divisivel por 5, 10 ou 2"."<br>";
divisible($numero['numero1']);
?>
</html>