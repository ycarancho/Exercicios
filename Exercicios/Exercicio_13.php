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
        <h1>Informe numeros aleatorios</h1>
        <div style="display:grid; gap:5px; width:50px">
            <label for="">Digite numeros</label>
            <input type="text" name="num1">
            <input type="text" name="num2">
            <input type="text" name="num3">
            <input type="text" name="num4">
            <input type="text" name="num5">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;

function verificaNumero($data)
{
    $count = [];
    foreach ($data as $key => $value) {
        if ($value != 0) {
            ($value > 100) && ($value < 200) ? $count[] = $value : '';
        }else{
            $total = count($count);
            print_r($total . ' é o Total de numeros entre 100 e 200 <br>');
            echo "Programa encerrado 0 encontrado" ;
            return;
        }
    }
    $total = count($count);
    print_r($total . ' é o Total de numeros entre 100 e 200 <br>');
};

verificaNumero($data)
?>

</html>