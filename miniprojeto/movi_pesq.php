<?php

    $id="";
    $idp="";
    $idf="";
    $qtde="";
    $data="";
    $tipo="";
    $obs="";
    $status="";

    if(isset($_POST['btoPesquisar']))
    {
        include_once("conn.php");

        try
        {
            $sql = $conn->query('select * from movi where id_mov='.$_POST['txtid']);

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $id=$linha[0];
                    $idp=$linha[1];
                    $idf= $linha[2];
                    $qtde=$linha[3];
                    $data=$linha[4];
                    $data = substr($data, 0, 10);
                    $tipo=$linha[5];
                    $obs=$linha[6];
                    $status=$linha[7];

                }
            }else{
                echo '<script>alert("Movimentação não encontrada!")</script>';
                $mensagem = "Movimentação não encontrada!";
            }           
        }
        catch(PDOException $erro)
        {
            echo $erro->getMessage();
        }   
    }
