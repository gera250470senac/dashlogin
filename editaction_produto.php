<?php
            include_once("classes/Crud.php");
            include_once("classes/Validation.php");

            $crud = new Crud();
            $validation = new Validation();

                if(isset($_POST['update'])){
                    $id = $crud->escape_string($_POST['id']);

                    $nome_p = $crud->escape_string($_POST['nome_p']);
                    $code_p = $crud->escape_string($_POST['code_p']);
                    $qtd_p = $crud->escape_string($_POST['qtd_p']);
                    $p_compra = $crud->escape_string($_POST['p_compra']);
                    $p_venda = $crud->escape_string($_POST['p_venda']);

                    $msg = $validation->check_empty($_POST, array('nome_p', 'code_p', 'qtd_p', 'p_compra', 'p_venda'));

                    //checando campos vazios
                    if($msg){
                        echo $msg;
                        //link para a página anterior
                        //echo "<br/><a href='javascript:self.history.back();'>VOLTAR</a>";
                    
                    }
                    else{ 
                          //atualizando a tabela no DB
                          $result = $crud->execute("UPDATE produtos SET nome_p='$nome_p', code_p='$code_p', qtd_p='$qtd_p', p_compra='$p_compra', p_venda='$p_venda' WHERE id=$id");

                          //redireciona para o Dashboard
                          header("Location: administrativo.php");

                    }

                    

                }
        ?>