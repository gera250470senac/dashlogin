<?php
        
    include_once("classes/Crud.php");
    include_once("classes/Validation.php");

    $crud = new Crud();
    $validation = new Validation();


    //valida email e senha
    if(isset($_POST['Submit'])){
        $nome = $crud->escape_string($_POST['nome']);
        $telefone = $crud->escape_string($_POST['telefone']);
        $email = $crud->escape_string($_POST['email']);
        $senha = $crud->escape_string($_POST['senha']);

        $msg = $validation->check_empty($_POST, array('nome', 'telefone', 'email', 'senha'));
        $check_email = $validation->is_email_valid($_POST['email']);

        if($msg != null){
            echo $msg;
        }elseif(!$check_email){
            echo 'Preencha o e-mail.';
        }else{
            $result = $crud->execute("INSERT INTO usuarios (nome, telefone, email, senha) VALUES('$nome', '$telefone', '$email', '$senha')");
            header("Location: administrativo.php");
        }
        
    }
?>