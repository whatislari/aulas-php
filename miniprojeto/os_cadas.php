<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

      try {
        $sql = $conn ->prepare('
        insert into os
            (id_produto_os,qtde_os,obs_produto)
        values
            (:id_produto_os,:qtde_os,:obs_produto) 
            
        ');

        $sql -> execute(array(

            ':id_produto_os'=> $_POST['txtidp'],
            ':qtde_os'=> $_POST['txtqtde'],
            ':obs_os' => $_POST['txtobs']

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Ordem de serviço cadastrada com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
        }
        catch(PDOException $error) 
        {
            echo "". $error->getMessage();
        }
    }