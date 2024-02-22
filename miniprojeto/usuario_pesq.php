<?php

    $id="";
    $nome="";
    $login="";
    $senha="";
    $data="";
    $obs="";
    $status="";


    if(isset($_POST['btopesquisar']))
    {

        include_once('conn.php');

        try
        {
            $sql = $conn->query('select * from usuario where id_usuario='.$_POST['txtid']);

            if($sql->rowCount()>0)
            {
                foreach($sql as $linha)
                {
                    $id=$linha[0];
                    $nome=$linha[1];
                    $login=$linha[2];
                    $senha= $linha[3];
                    $data=$linha[4];
                    $Data = substr($Data, 0, 10);
                    $obs=$linha[5];
                    $status=$linha[6];
                }
            }else{
                echo '<script>alert("Usuário não encontrado")</script>';
                $mensagem = "Usuário não encontado";
            }
            
        }
        catch(PDOException $erro)
        {
            echo $erro->getMessage();
        }   
    }
