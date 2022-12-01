<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número -->
    <form action="" method="POST">
        <div>
            <h1>Informe um numero inteiro entre 1 e 12 para saber o mês correspondente</h1>
            <label for="mes">Mês</label>
            <input type="text" name="mes" placeholder="Informe um numero inteiro">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;
$numeroMes = $data['mes'];

$lista = [
    "1" => "Janeiro",
    "2" => "Fevereiro",
    "3" => "Março",
    "4" => "Abril",
    "5" => "Maio",
    "6" => "Junho",
    "7" => "Julho",
    "8" => "Agosto",
    "9" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
];

function verificaMes($numeroMes, $lista)
{
    if ($numeroMes <= 12) {
        foreach ($lista as $key => $value) {
            if ($numeroMes == $key) {
                echo "O mês referente ao numero $numeroMes é $value";
            }
        }
    }else {
        echo "O numero não corresponde a um mês pois o ano possui apenas 12 mês e não $numeroMes";
    }

}
verificaMes($numeroMes, $lista);

?>

</html>