<?php   

    include_once('conn.php');

    if(isset($_POST['btoalterar']))
    {
        try 
        {
            $sql = $conn->prepare('
            UPDATE movi SET

            id_produto_mov=:id_produto_mov,
            id_funcionario_mov=:id_funcionario_mov,
            qtde_mov=:qtde_mov,
            tipo_mov=:tipo_mov,
            obs_mov=:obs_mov,
            status_mov=:status_mov

            WHERE id_mov=:id_mov
            ');
        

            $sql -> execute(array(

            ':id_produto_mov'=> $_POST['txtidp'],
            ':id_funcionario_mov'=> $_POST['txtidf'],
            ':qtde_mov'=> $_POST['txtqtde'],
            ':tipo_mov'=> $_POST['txtmov'],
            ':status_mov' => $_POST['txtstatus'],
            ':obs_mov' => $_POST['txtobs']

            ));

            if($sql->rowCount() > 0)
            {
                $mensagem = '<p>Movimentação alterada com sucesso</p>';
            }
        }
        catch(PDOException $error)
        {
            echo "". $error->getMessage();
        }   
    }
    
    