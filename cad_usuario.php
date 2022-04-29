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
        <script type="text/javascript">
		function validate() {
			if (document.form1.nome.value == '') {
				alert('Preencha o nome.');
				document.form1.nome.focus();				
				return false;
			}
			if (document.form1.email.value == '') {
				alert('Preencha o e-mail.');
				document.form1.email.focus();
				return false;
			}
            if (document.form1.senha.value == '') {
				alert('Preencha a senha.');
				document.form1.senha.focus();				
				return false;
			}
			return true;
		}
	</script>
	</head>

	<body role="document">

    <div class="logo"><center><a href="administrativo.php"><img src="img/logo_dashboard.png"></a></center></div>
    <div class="navbar">
        <div class="topnav" id="myTopnav">
			<a href="cad_produtos.php">Cadastrar Produtos</a>
            <a href="administrativo.php">Listar Produtos</a>
			<a href="cad_usuario.php">Cadastrar Usuários</a>
            <a href="administrativo.php">Listar Usuários</a>
            <a href="sair.php">Sair</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
	
	<div class="container">

        <form class="form-signin" method="POST" name="form1" action="valida_cad_usuarios.php">
            <h2 class="form-signin-heading">Cadastrar Usuário</h2>

            <label for="inputNome" class="sr-only">Nome</label>
            <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" required autofocus>

			<label for="inputTelefone" class="sr-only">Telefone</label>
            <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="Telefone" required autofocus>

            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            
            <label for="inputSenha" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required>
            
            <button class="btn btn-lg btn-danger btn-block" type="submit" name="Submit">Cadastrar</button>
        </form>
		
	</div>
	<div class="footer"><center><p>Dashboard Login - Gera Silveira</p></center></div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>