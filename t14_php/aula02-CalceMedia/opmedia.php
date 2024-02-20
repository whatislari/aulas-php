<div class="container">
    <form action="" method="post" class="form-control">
        <div class="row">
            <div class="col-sm-8 text-center">
                    <?php
                    if($_POST)
                    {
                        $n1 = $_POST['txtN1'];
                        $n2 = $_POST['txtN2'];
                        $n3 = $_POST['txtN3'];
                        $n4 = $_POST['txtN4'];
                        $status = "";
                        $cor = "";
                        $media = ($n1+$n2+$n3+$n4)/4;
                        
                        if($media >= 7)
                        {
                            $status = "Aprovado";
                            $cor = "green";

                        }else if ($media < 5 ){

                            $status = "Reprovado";
                            $cor = "red";

                        }else{
                            $status = "Exame";
                            $cor = "yellow";

                        }
                        echo "<h2 style=color:". $cor.";>".$status. "</h2>";
                    }
                    ?>
            </div>
        </div>
    </form>
</div>