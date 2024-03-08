<?php
if(!isset($_POST['txtacao']))
{
    return;
}

if($_POST or $_GET)
{
if(isset($_POST['txtacao']) or isset($_GET['IDUsuario']))
{

    include_once('conn.php');

    $idUsuario="";
    
    if(isset($_POST['txtacao']))
    {
        if($_POST['txtacao']=='Pesquisar')
        {
            $idUsuario=$_POST['txtid'];
        }
        else
        {
            return;
        }
    }
    elseif(isset($_GET['IDUsuario']))
    {        
        $idUsuario=$_GET['IDUsuario'];
    }

    try
    {
        

        $sql = $conn->query('select * from usuario where id_usuario='.$idUsuario);

        if($sql->rowCount()>0)
        {
            foreach($sql as $linha)
            {
                $id=$linha[0];
                $nome=$linha[1];
                $login=$linha[2];
                $senha= $linha[3];
                $data=$linha[4];
                $data = substr($data, 0, 10);
                $Oobs=$linha[5];
                $status=$linha[6];
                $img=$linha[7];
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
}
?>