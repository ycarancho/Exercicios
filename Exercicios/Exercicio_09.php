<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Entrar com o número de vezes que se deseja
imprimir a palavra SOL e imprimir -->
    <form action="" method="POST">
        <div>
            <h1>Informe um numero inteiro para imprimir a palavra SOL de acorodo com o numero</h1>
            <label for="">Informe um numero :</label>
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
function imprimir($numero)
{
    $i = 0;
    while ($i < $numero) {
        echo "SOL" . "<br>";
        $i++;
    }
}
imprimir($numero);
?>

</html>