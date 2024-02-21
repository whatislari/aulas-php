<?php   

    include_once('conn.php');

    try 
    {
        $sql = $conn-> query('SELECT * FROM usuario');

        foreach($sql as $linha)
            {
                echo'<pre>';
                    print_r($linha);
                echo'<pre>';

                echo 'Nome: '.$linha['nome_usuario'].'<br>';
                echo 'Nome: '.$linha['1'].'<br>';

            }   
    }
    catch (Exception $e) 
    {
        echo 'ERRO'. $e->getMessage() .'';
    }
