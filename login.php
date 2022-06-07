<!DOCTYPE html>
<?php
     session_start();

     include_once "conf/default.inc.php";
     require_once "conf/Conexao.php";
     include_once "classe/usuario.class.php";
  
     $login = isset($_POST["login"]) ? $_POST["login"] : "";     
     $senha = isset($_POST["senha"]) ? $_POST["senha"] : ""; 
     $title = "Login";
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
            <form method="post" action="login.php?acao=login">
            <p>Login:</p>
                <input class="form-control btn-sm" name="login" id="login" type="text" required="true"><br>
            <p>Senha:</p>
            <input class="form-control btn-sm" name="senha" id="senha" type="text" required="true"><hr>
            <button value="logar" type="submit" class="btn btn-outline-info">Login</button>
            </form>
            <?php
            error_reporting(0);
            if($_GET['acao'] == 'login'){
                $log = new Usuario("","","","");
                if ($log->efetuarLogin($login, $senha) == true){
                    echo "Login efetuado com sucesso";
                }else if($_SESSION['nome'] == null){
                    echo "Erro";
                }
            }
        ?>
</div>
</div>
</body>
</html>