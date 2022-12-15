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
            <label for="">Insira a Massa do Material: </label>
            <input type="text" name="massa">
        </div>
        <div>
            <input type="submit" placeholder="Enviar">
        </div>
    </form>
</body>

<?php
$data = $_POST;
function calcMassa($data){

    $massa = $data['massa'];
    $massafinal = 0.10;
    $count= 0;
    if($massa > $massafinal){
        while ($massa > $massafinal) {
            $massa -= ($massa*0.25);
            $count+=30;
        }

        echo "A massa levará $count segundos para ficer menor que 0.10";
    }
}

calcMassa($data)
?>
</html>