<!DOCTYPE html>
<?php
    include_once "processa2.php";
    $processa2 = isset($_GET['processa2']) ? $_GET['processa2'] : "";
    if ($processa2 == 'editar'){
        $idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : "";
    if ($idUsuario > 0)
        $dados = buscarDados($idUsuario);
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

        <h3>Insira os dados</h3><hr>
            <form method="post" action="processa2.php">
                
            <p>ID:</p>
                <input class="form-control btn-sm" readonly  type="text" name="idUsuario" id="idUsuario" value="<?php if ($processa2 == "editar") echo $dados['idUsuario']; else echo 0; ?>"><br>

            <p>Nome:</p>
                <input class="form-control btn-sm" name="nome" id="nome" type="text" required="true" value="<?php if ($processa2 == "editar") echo $dados['nome']; ?>"><br>         
            
            <p>Login:</p>
                <input class="form-control btn-sm" name="login" id="login" type="text" required="true" value="<?php if ($processa2 == "editar") echo $dados['login']; ?>"><br>

            <p>Senha:</p>
            <input class="form-control btn-sm" name="senha" id="senha" type="text" required="true" value="<?php if ($processa2 == "editar") echo $dados['senha']; ?>"><hr>
            <button name="processa2" value="salvar" id="processa2" type="submit" class="btn btn-outline-info">Salvar</button>
            </form>
</div>
</div>
</body>
</html>