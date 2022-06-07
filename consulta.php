
<!DOCTYPE html>
<?php
    $idQuadrado = isset($_GET['idQuadrado']) ? $_GET['idQuadrado'] : 0;
    $lado = isset($_GET['lado']) ? $_GET['lado'] : 0;
    $cor = isset($_GET['cor']) ? $_GET['cor'] : "";
    $idTab = isset($_GET['idTab']) ? $_GET['idTab'] : 0;
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta do Quadrado></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    
</head>
<style>
    body{
        background-image: url("./img/img1.png");
    }
</style>
<body>
<div class="margem">
    <div class="form">
    <fieldset>
        <?php  
            if ($acao = "salvar") {
                include_once "classe/quadrado.class.php";
                $quad = new Quadrado($idQuadrado, $lado, $cor,$idTab);
                echo $quad;
                echo $desenho = $quad->desenha();
            }
            ?>

            <div></div>
    </fieldset>
    
    <div></div><br><button type="submit" class="btn btn-outline-info"><a href="quadrado.php">Voltar</a></button>
    <br>
</body>
</html>



