<?php

    if(isset($_POST['btoexcluir']))
    {

        try 
        {
            include_once('conn.php');
    
            $sql = $conn ->prepare('
            delete from produto where id_produto=:id_produto
            ');

            $sql -> execute(array(

            ':id_produto'=> $_POST['txtid']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Produto excluido com sucesso!!!!!!!!!!</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }   