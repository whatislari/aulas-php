<?php
    if(isset($_POST['btoPesquisar']))
    {
        include_once("conn.php");

        try
        {
            $sql = $conn->query('select * from produto where id_produto='.$_POST['txtid']);

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $id=$linha[0];
                    $nome=$linha[1];
                    $data= $linha[2];
                    $data = substr($data, 0, 10);
                    $qtde=$linha[3];
                    $vcusto=$linha[4];
                    $vvenda=$linha[5];
                    $obs=$linha[6];
                    $status=$linha[7];
                    $img=$linha[8];

                }
            }else{
                echo '<script>alert("Produto não encontrado")</script>';
                $mensagem = "Produto não encontado";
            }           
        }
        catch(PDOException $erro)
        {
            echo $erro->getMessage();
        }   
    }
