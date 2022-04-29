<?php
    include_once("classes/Crud.php");
    include_once("classes/Validation.php");

    $crud = new Crud();
    $validation = new Validation();

    if(isset($_POST['update'])){
        $id = $crud->escape_string($_POST['id']);

        $nome = $crud->escape_string($_POST['nome']);
        $telefone = $crud->escape_string($_POST['telefone']);
        $email = $crud->escape_string($_POST['email']);
        $senha = $crud->escape_string($_POST['senha']);

        $msg = $validation->check_empty($_POST, array('nome', 'telefone', 'email', 'senha'));
        $check_email = $validation->is_email_valid($_POST['email']);

        //checando campos vazios
        if($msg){
            echo $msg;
        }elseif(!$check_email){
            echo "E-mail inválido.";
        }else{
            $result = $crud->execute("UPDATE usuarios SET nome='$nome', telefone='$telefone',email='$email', senha='$senha' WHERE id=$id");

            //redireciona para o Dashboard
            header("Location: administrativo.php");
        }

    }
?>