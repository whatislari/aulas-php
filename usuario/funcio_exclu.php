<?php
if($_POST)
{
if($_POST['txtacao']=='Excluir')
{
    include_once('conn.php');

    try 
    {
        $sql = $conn ->prepare('
            delete from funcionario where id_funcionario=:id_funcionario
            ');

        $sql->execute(array(
            ':id_funcionario'=> $_POST['txtid']
        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Cadastro excluido com sucesso</p>';
        }
    } 
    catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}
