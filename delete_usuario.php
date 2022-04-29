<?php
    include_once("classes/Crud.php");

    $crud = new Crud();

    //obter id da url
    $id = $crud->escape_string($_GET['id']);

    //excluir o registro da tabela
    $result = $crud->delete($id, 'usuarios');

    if($result){
        header("Location: administrativo.php");
    }

?>