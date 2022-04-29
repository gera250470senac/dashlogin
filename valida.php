<?php
    session_start();
    //conecta DB
    include_once("conexao.php");
    //valida email e senha
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        //buscar na tabela usuário email e senha
        $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        header("Location: administrativo.php");

    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos.";

        header("Location: logar.php");
    }
?>