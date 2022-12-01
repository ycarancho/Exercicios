<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias -->
    <form action="" method="POST">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" placeholder="Informe seu nome">
        </div>
        <div>
            <label for="nomeLivro">Nome do Livro: </label>
            <input type="text" name="nomeLivro" placeholder="Informe o nome do livro">
        </div>
        <div>
            <label for="identificacao">Nivel: </label>
            <select name="identificacao">
                <option value="">-- Identifique-se --</option>
                <option value="1">Professor</option>
                <option value="2">Aluno</option>
            </select>
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php
$data = $_POST;

function recibo($data)
{
    $identificacao = $data['identificacao'];
    $livro = $data['nomeLivro'];
    $nome = $data['nome'];
    define("professor", 1);
    define("aluno", 2);
    if ($identificacao == professor) {
        echo "Caro professor(a) $nome,<br> 
        o senhor está tomando emprestado o livro $livro <br> 
        a partir da presente data o senhor(a) terá 10 dias para devolve-lo.";
    } elseif ($identificacao == aluno) {
        echo "Caro Aluno(a) $nome ,<br> 
        o senhor está tomando emprestado o livro $livro <br> 
        a partir da presente data o senhor(a) terá 3 dias para devolve-lo.";
    } else {
        echo "identificação não valida !";
    }
}

recibo($data);
?>

</html>