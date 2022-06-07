
<!DOCTYPE html>
<?php
    $idTabuleiro = isset($_GET['idTabuleiro']) ? $_GET['idTabuleiro'] : 0;
    $Tablado = isset($_GET['Tablado']) ? $_GET['Tablado'] : 0;
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
                include_once "classe/tabuleiro.class.php";
                $tab = new Tabuleiro($idTabuleiro, $Tablado);
                echo $tab;
                echo $desenho = $tab->desenha();
            }
            ?>
          
       
    </fieldset>
    <br><button type="submit" class="btn btn-outline-info"><a href="tabuleiro.php">Voltar</a></button>
    <br>
        </div>
        </div>
        
</body>
</html>



