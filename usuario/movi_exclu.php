<?php

    if(isset($_POST['btoexcluir']))
    {

        try 
        {
            include_once('conn.php');
    
            $sql = $conn ->prepare('
            delete from movi where id_mov=:id_mov
            ');

            $sql -> execute(array(

            ':id_mov'=> $_POST['txtid']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Movimanteção excluida com sucesso!!!!!!!!!!</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }   