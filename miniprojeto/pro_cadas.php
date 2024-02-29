<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

      try {
        $sql = $conn ->prepare('
        insert into produto
            (nome_produto,qtde_produto,vcusto_produto,vvenda_produto,obs_produto)
        values
            (:nome_produto,:qtde_produto,:vcusto_produto,:vvenda_produto,:obs_produto) 
            
        ');

        $sql -> execute(array(

            ':nome_produto'=> $_POST['txtnome'],
            ':qtde_produto'=> $_POST['txtqtde'],
            ':vcusto_produto'=> $_POST['txtVvenda'],
            ':vvenda_produto'=> $_POST['txtVcusto'],
            ':obs_produto' => $_POST['txtobs']

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Produto cadastrado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
        }
        catch(PDOException $error) 
        {
            echo "". $error->getMessage();
        }
    }