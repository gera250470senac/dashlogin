<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<title>Dashboard Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/topnav.css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
        <script src="js/topnav.js"></script>
    
    <title>Dashboard - Login</title>
</head>
<body>
<div class="logo"><center><a href="#"><img src="img/logo_dashboard.png"></a></center></div>
    <div class="navbar">
        <div class="topnav" id="myTopnav">
            <a href="index.php">Listar Produtos</a>
            <a href="logar.php">Logar</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <form class="form-signin" method="POST" action="valida.php">
            <h2 class="form-signin-heading">Área Restrita</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputSenha" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required>
            <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
        </form>
        <p class="text-center text-danger">
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
            ?>
        </p>

        <p class="text-center text-success">
            <?php
                if(isset($_SESSION['logindeslogado'])){
                    echo $_SESSION['logindeslogado'];
                    unset($_SESSION['logindeslogado']);
                }
            ?>
        </p>

    </div>
    <div class="footer"><center><p>Dashboard Login - Gera Silveira</p></center></div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>