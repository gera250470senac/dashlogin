<?php
    include_once("classes/Crud.php");
    $crud = new Crud();
    //obtendo id dos dados do url
    $id = $crud->escape_string($_GET['id']);

    //excluindo o registro da tabela
    $result = $crud->delete($id, 'produtos');

    if($result){
        header("Location: administrativo.php");
    }

?>