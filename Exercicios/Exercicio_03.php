<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA. -->
    <form action="" method="POST">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" placeholder="Informe seu nome">
        </div>
        <div>
            <label for="nome">Idade: </label>
            <input type="text" name="idade" placeholder="Informe sua idade">
        </div>
        <div>
            <label for="nome">Sexo: </label>
            <input type="text" name="sexo" placeholder="Informe seu Sexo">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>
<?php 
$data = $_POST;
$nome = $data['nome'];
$idade = $data['idade'];
$sexo = $data['sexo'];
define('admicaoIdade', 25);

function admicao($nome, $idade, $sexo){
    if ($idade <= admicaoIdade && $sexo == "feminino") {
        echo "A candidata $nome foi aceita";
    }else{
        echo "A candidata $nome não foi aceita";
    }
}

admicao($nome,$idade,$sexo);
?>
</html>