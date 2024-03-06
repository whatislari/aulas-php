<?php

    $id="";
    $idp="";
    $data="";
    $qtde="";
    $obs="";
    $status="";

    if(isset($_POST['btoPesquisar']))
    {
        include_once("conn.php");

        try
        {
            $sql = $conn->query('select * from os where id_os='.$_POST['txtid']);

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $id=$linha[0];
                    $idp=$linha[1];
                    $data= $linha[2];
                    $data = substr($data, 0, 10);
                    $qtde=$linha[3];
                    $obs=$linha[4];
                    $status=$linha[5];

                }
            }else{
                echo '<script>alert("Ordem de serviço não encontrada")</script>';
                $mensagem = "Ordem de serviço não encontada";
            }           
        }
        catch(PDOException $erro)
        {
            echo $erro->getMessage();
        }   
    }
