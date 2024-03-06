<?php

    $id="";
    $nome="";
    $data= "";
    $obs="";
    $status="";

    if(isset($_POST['btoPesquisar']))
    {
        include_once("conn.php");

        try
        {
            $sql = $conn->query('select * from localesto where id_localesto='.$_POST['txtid']);

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $id=$linha[0];
                    $nome=$linha[1];
                    $data= $linha[2];
                    $data = substr($data, 0, 10);
                    $obs=$linha[3];
                    $status=$linha[4];
                }
            }else{
                echo '<script>alert("Estoque não encontrado")</script>';
                $mensagem = "Estoque não encontado";
            }           
        }
        catch(PDOException $erro)
        {
            echo $erro->getMessage();
        }   
    }
