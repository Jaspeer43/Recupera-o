<!DOCTYPE html>
<?php
    include_once "processa.php";
    $processa = isset($_GET['processa']) ? $_GET['processa'] : "";
    if ($processa == 'editar'){
        $idQuadrado = isset($_GET['idQuadrado']) ? $_GET['idQuadrado'] : "";
    if ($idQuadrado > 0)
        $dados = buscarDados($idQuadrado);
}
    $title = "Cadastro";
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title><?php echo $title ?></title>
</head>
<style>
    body{
        background-image: url("./img/img1.png");
    }
</style>
<body>
<center>
<ul class="menu">
        <li class="menu1"><a href="tabuleiro.php" class="menu1">TABULEIROS</a></li>
        <li class="menu2"><a href="quadrado.php" class="menu2">QUADRADOS</a></li>
        <li class="menu2"><a href="usuario.php" class="menu2">USUÁRIO</a></li> 
</ul>
</center>

<div class="margem">
    <div class="form">


        <h3>Insira os dados</h3>
            <form method="post" action="processa.php">
                
            <label>ID:</label>
                <input class="form-control btn-sm" readonly  type="text" name="idQuadrado" id="idQuadrado" value="<?php if ($processa == "editar") echo $dados['idQuadrado']; else echo 0; ?>"><br>
            <label>Lado:</label>
                <input class="form-control btn-sm" name="lado" id="lado" type="text" required="true" value="<?php if ($processa == "editar") echo $dados['lado']; ?>"><br>         
            <label>Cor:</label>
                <input class="form-control btn-sm" name="cor" id="cor" type="color" required="true" value="<?php if ($processa == "editar") echo $dados['cor']; ?>"><br>

                <select name="idTab" id="idTab" class="form-select btn-sm">     
               <?php 
                    require_once("utils.php");
                    echo lista_tabuleiro(0);
               ?>
                </select><br>
            <button name="processa" value="salvar" id="processa" type="submit" class="btn btn-outline-info">Salvar</button>
            </form>
</div>
</div>
</body>
</html>