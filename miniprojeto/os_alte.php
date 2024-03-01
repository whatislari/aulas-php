<?php   

    include_once('conn.php');

    if(isset($_POST['btoalterar']))
    {
        try 
        {
            $sql = $conn->prepare('
            UPDATE os SET
            id_produto_os=:id_produto_os
            qtde_os=:qtde_os,
            obs_os=:obs_os,
            status_os=:status_os
            
            WHERE id_os=:id_os
            ');
        

            $sql -> execute(array(
            ':id_os' => $_POST['txtid'],
            ':id_produto_os'=> $_POST['txtidp'],
            ':qtde_os'=> $_POST['txtqtde'],
            ':status_os' => $_POST['txtstatus'],
            ':obs_os' => $_POST['txtobs']

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
    
    