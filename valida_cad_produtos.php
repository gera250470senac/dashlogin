<?php
//CLASSES QUE CARREGAM A CONEXÃO E VALIDAÇÃO
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['Submit'])) {	
	$nome_p = $crud->escape_string($_POST['nome_p']);
	$code_p = $crud->escape_string($_POST['code_p']);
	$qtd_p = $crud->escape_string($_POST['qtd_p']);
    $p_compra = $crud->escape_string($_POST['p_compra']);
	$p_venda = $crud->escape_string($_POST['p_venda']);
		
	$msg = $validation->check_empty($_POST, array('nome_p', 'code_p', 'qtd_p', 'p_compra', 'p_venda'));
	
	
	// CHECANDO CAMPOS VAZIOS
	if($msg != null) {
		echo $msg;		
		//LINK PARA PÁGINA ANTERIOR
		//echo "<br/><a href='javascript:self.history.back();'>VOLTAR</a>";
	
	} 	
	else { 
		// se todos os campos estiverem preenchidos (não vazio) 
			
		//INSERINDO REGISTRO NO DB	
		$result = $crud->execute("INSERT INTO produtos(nome_p, code_p, qtd_p, p_compra, p_venda) VALUES('$nome_p', '$code_p', '$qtd_p', '$p_compra', '$p_venda')");
					
        header("Location: administrativo.php");
    }
}
?>