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
        <h1>Informe sua altura e quanto você cresce por ano para sabermos em quanto tempo ira ultrapassar a altura de Chico, que tem 1.50M</h1>
        <div>
            <label for="nome">Nome :</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="altura">Altura :</label>
            <input type="text" name="altura">
        </div>
        <div>
            <label for="crescimentoAnual">Centimetros: </label>
            <input type="text" name="centimetros" placeholder="CM por ano">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;
function comparacao($data)
{
    $alturaChico = 150;
    $nome = $data['nome'];
    $variacaoAnual = 2;
    $anos = 0;
    $alturaPessoa = $data['altura'] * 100;
    $variacaoPessoa = $data['centimetros'];
    if ($alturaPessoa < $alturaChico ) {
        while ($alturaChico > $alturaPessoa) {
            $alturaChico += $variacaoAnual;
            $alturaPessoa += $variacaoPessoa;
            $anos++;
        }
        echo "Levara $anos anos para $nome ultrapassar a altura de Chico <br> sua altura depois de $anos anos será de $alturaPessoa e a de chico será $alturaChico";
    }else{
        echo "A sua altura já é maior ou igual a de Chico";
    }
}
comparacao($data);
?>

</html>