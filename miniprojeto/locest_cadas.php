<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

      try {
        $sql = $conn ->prepare('
        insert into localesto
            (nome_localesto,obs_localesto)
        values
            (:nome_localesto,:obs_localesto) 
            
        ');

        $sql -> execute(array(

            ':nome_localesto'=> $_POST['txtnome'],
            ':obs_localesto' => $_POST['txtobs']

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Estoque cadastrado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
        }
        catch(PDOException $error) 
        {
            echo "". $error->getMessage();
        }
    }