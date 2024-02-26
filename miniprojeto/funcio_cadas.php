<?php   

    include_once('conn.php');

    if(isset($_POST['btocadastrar']))
    {

        $sql = $conn ->prepare('
        insert into funcionario
        (id_funcionario,nome_funcionario,nasc_funcionario,data_funcionario,cpf_funcionario,logradouro_funcionario,
        numero_funcionario,comp_funcionario,cep_funcionario,bairro_funcionario,cidade_funcionario,uf_funcionario,telefone1_funcionario,
        telefone2_funcionario,obs_funcionario)        
        values
        (:id_funcionario,:nome_funcionario,:nasc_funcionario,:data_funcionario,:cpf_funcionario,:logradouro_funcionario,
        :numero_funcionario,:comp_funcionario,:cep_funcionario,:bairro_funcionario,:cidade_funcionario,:uf_funcionario,
        :telefone1_funcionario,:telefone2_funcionario,:obs_funcionario)    
        ');

        $sql -> execute(array(

            ':nome_usuario'=> $_POST['txtnome'],
            ':login_usuario'=> $_POST['txtlogin'],
            ':senha_usuario'=> $_POST['txtsenha'],
            ':obs_usuario'=> $_POST['txtobs']
            

        ));

        if($sql->rowCount() > 0)
        {
            $mensagem = '<p>Cadastro realizado com sucesso</p> - '.$sql->rowCount();
            $mensagem = $mensagem.'<p>ID Gerado:'.$conn->lastInsertId().'</p>';
        }
    }

