<?php

    $id="";
    $idp="";
    $idl="";
    $data="";
    $obs="";
    $sts="";


    if ($_POST) {
        include_once("conn.php");

          //cadastro
          if (isset($_POST["cad"])) {
            try {
        
                $sql = $conn -> prepare('
                    insert into itemestoque
                        (id_produto_itemesto,id_localEstoque_itemesto,obs_itemesto)
                    values
                        (:id_produto_itemesto,:id_localEstoque_itemesto,:obs_itemesto)
                ');
            
                $sql -> execute(array(
                    ':id_produto_itemesto' => $_POST['txtidp'],
                    ':id_localEstoque_itemesto' => $_POST['txtidl'],
                    ':obs_itemesto'=> $_POST['txtobs']
                ));  
            
                if ($sql -> rowCount() > 0) {
                    echo '<script>alert("Estoque Cadastrado com Sucesso")</script>';
                    header("Location:atv8.php?IDUsuario=".$conn->lastInsertId());
                }
            } catch (PDOException $th) {
                echo $th;
            }
           
           }
           //pesquisa
           elseif (isset($_POST['pesq'])) {
            try {
                $sql = $conn-> query('SELECT * FROM itemesto where id_itemesto='.$_POST['txtid'] );
                if ($sql->rowCount() > 0) {
                    foreach ($sql as $line) {

                        $id=$line[0];
                        $idp=$line[1];
                        $idl=$line[2];
                        $data=$line[3];
                        $data=substr($data, 0, 10);
                        $obs=$line[4];
                        $sts=$line[5];
                    }
                }
                else {
                     echo '<script>alert("Estoque não encontrado")</script>';
                }
            }
             catch (PDOException $th)
            {
                echo $th;
            }
           }
             //alterar
             elseif (isset($_POST["alt"])) {
                
                try {
    
            $sql = $conn->prepare('
                    UPDATE itemesto SET
                        id_produto_itemesto = :id_produto_itemesto,
                        id_localEstoque_itemesto = :id_localEstoque_itemesto,
                        obs_itemesto = :obs_itemesto,
                        status_itemesto = :status_itemesto
                    WHERE id_itemesto = :id_itemesto
                ');
    
            $sql->execute(
                array(
                    ':id_itemesto' => $_POST['txtid'],
                    ':id_produto_itemesto' => $_POST['txtidp'],
                    ':id_localEstoque_itemesto' => $_POST['txtidl'],
                    ':obs_itemesto' => $_POST['txtobs'],
                    ':status_itemesto' => $_POST['txtsts']
                )
            );
    
            if ($sql -> rowCount() > 0) {
                        echo '<script>alert("Estoque Alterado com Sucesso")</script>';
                    }
                } catch (PDOException $th) {
                    echo $th;
                }
            }
         //deletar
         elseif (isset($_POST['del'])) {
            try {
                include_once('conn.php');
        
                $sql = $conn -> prepare('
                    delete from itemesto where id_itemesto=:id_itemesto
                ');
            
                $sql -> execute(array(
                    ':id_itemesto'=> $_POST['txtid']
                ));  
            
                if ($sql -> rowCount() > 0) {
                    echo '<script>alert("Estoque Excluída com Sucesso")</script>';
                }
            } catch (PDOException $th) {
                echo $th;
            }
       }

    }