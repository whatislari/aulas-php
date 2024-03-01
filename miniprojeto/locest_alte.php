<?php   

    include_once('conn.php');

    if(isset($_POST['btoalterar']))
    {
        try 
        {
            $sql = $conn->prepare('
            UPDATE localesto SET
            nome_localesto=:nome_localesto,
            obs_localesto=:obs_localesto,
            status_localesto=:status_localesto
            
            WHERE id_localesto=:id_localesto
            ');
        

            $sql -> execute(array(

            ':id_localesto'=> $_POST['txtid'],
            ':nome_localesto'=> $_POST['txtnome'],
            ':status_localesto' => $_POST['txtstatus'],
            ':obs_localesto' => $_POST['txtobs']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Dados alterados com sucesso</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }
    
    