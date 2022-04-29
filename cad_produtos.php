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
			if (document.form1.nome_p.value == '') {
				alert('Preencha o nome do Produto.');
				document.form1.nome_p.focus();				
				return false;
			}
			if (document.form1.qtd.value == '') {
				alert('Preencha a Quantidade.');
				document.form1.qtd.focus();
				return false;
			}
            if (document.form1.preco.value == '') {
				alert('Preencha o Preço.');
				document.form1.preco.focus();				
				return false;
			}
			return true;
		}
	</script>
  </head>

  <body>
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

      <form class="form-signin" method="POST" name="form1" action="valida_cad_produtos.php">
        <h2 class="form-signin-heading">Cadastrar Produtos</h2>

        <label for="inputNome_p" class="sr-only">Nome Produto</label>
        <input type="text" name="nome_p" id="inputNome_p" class="form-control" placeholder="Nome Produto" required autofocus>

		<label for="inputCode_p" class="sr-only">Código</label>
        <input type="text" name="code_p" id="inputCode_p" class="form-control" placeholder="Código Produto" required autofocus>
        
        <label for="inputQtd_p" class="sr-only">Quantidade</label>
        <input type="text" name="qtd_p" id="inputQtd_p" class="form-control" placeholder="Quantidade" required autofocus>
        
        <label for="inputP_compra" class="sr-only">Preço de Compra</label>
        <input type="text" name="p_compra" id="inputP_compra" class="form-control" placeholder="Preço de Compra" required>

		<label for="inputP_venda" class="sr-only">Preço de Venda</label>
        <input type="text" name="p_venda" id="inputP_venda" class="form-control" placeholder="Preço de Venda" required>
        
        <button class="btn btn-lg btn-danger btn-block" type="submit" name="Submit">Cadastrar</button>
      </form>
	  
    </div> <!-- /container -->
	<div class="footer"><center><p>Dashboard Login - Gera Silveira</p></center></div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>