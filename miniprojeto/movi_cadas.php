<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

      try {
        $sql = $conn ->prepare('
        insert into mov
            (id_produto_mov,id_funcionario_mov,qtde_mov,tipo_mov,obs_produto)
        values
            (:id_produto_mov,:id_funcionario_mov,:qtde_mov,:tipo_mov,:obs_produto) 
            
        ');

        $sql -> execute(array(

            ':id_produto_mov'=> $_POST['txtidp'],
            ':id_funcionario_mov'=> $_POST['txtidf'],
            ':qtde_mov'=> $_POST['txtqtde'],
            ':tipo_mov'=> $_POST['txtmov'],
            ':obs_mov' => $_POST['txtobs']

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Movimentação com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
        }
        catch(PDOException $error) 
        {
            echo "". $error->getMessage();
        }
    }