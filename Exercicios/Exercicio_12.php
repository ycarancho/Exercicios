<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO-->
    <form action="" method="POST">
        <div>
            <h1>Informe uma plavra, para ser exibida na tela</h1>
            <label for="">Informe uma palavra</label>
            <input type="text" name="palavra">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;
$palavra = $data['palavra'];
function exibirPalavra($palavra)
{
    $count = strlen($palavra);
    for ($i = 0; $i < $count; $i++) {
        echo '<br>';
        for ($x = 0; $x < $i; $x++) {
            echo $palavra . ' ';
        }
    }
}

exibirPalavra($palavra);
?>

</html>