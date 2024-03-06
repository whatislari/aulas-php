<?php

    if(isset($_POST['btoexcluir']))
    {

        try 
        {
            include_once('conn.php');
    
            $sql = $conn ->prepare('
            delete from localesto where id_localesto=:id_localesto
            ');

            $sql -> execute(array(

            ':id_localesto'=> $_POST['txtid']

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