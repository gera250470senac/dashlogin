<?php
	session_start();
	
	include_once("classes/Crud.php");
	
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
    
	
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<br>
			<center><h3>Produtos</h3></center>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome Produto</th>
							<th>Código</th>
							<th>Quantidade</th>
                            <th>Preço Compra</th>
                            <th>Preço Venda</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$crud = new Crud();

						//buscando dados em ordem decrescente
						$query = "SELECT * FROM produtos ORDER BY id DESC";
						$result = $crud->getData($query);
						foreach($result as $key => $res){
						echo "<tr>";
							echo "<td>" . $res['id'] . "</td>";
							echo "<td>" . $res['nome_p'] . "</td>";
							echo "<td>" . $res['code_p'] . "</td>";
                            echo "<td>" . $res['qtd_p'] . "</td>";
                            echo "<td>" . $res['p_compra'] . "</td>";
                            echo "<td>" . $res['p_venda'] . "</td>";

						echo "</tr>"; 
						}
						?>             
					</tbody>
				</table>
			</div>
		</div>
		
		
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
