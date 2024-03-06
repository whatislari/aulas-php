<?php   

    include_once('conn.php');

    if(isset($_POST['btoalterar']))
    {
        try 
        {
            $sql = $conn->prepare('
            UPDATE produto SET
            nome_produto=:nome_produto,
            qtde_produto=:qtde_produto,
            vcusto_produto=:vcusto_produto,
            vvenda_produto=:vvenda_produto,
            obs_produto=:obs_produto,
            status_produto=:status_produto
            
            WHERE id_produto=:id_produto
            ');
        

            $sql -> execute(array(

            ':id_produto'=> $_POST['txtid'],
            ':nome_produto'=> $_POST['txtnome'],
            ':qtde_produto'=> $_POST['txtqtde'],
            ':vcusto_produto'=> $_POST['txtVvenda'],
            ':vvenda_produto'=> $_POST['txtVcusto'],
            ':status_produto' => $_POST['txtstatus'],
            ':obs_produto' => $_POST['txtobs']

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
    
    