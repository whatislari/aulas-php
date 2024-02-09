<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <?php 
           

            if ($_POST){

                $N1=$_POST['txtN1'];
                $N2=$_POST['txtN2'];
                $total=0;
                
                if(isset($_POST['btomais']))

                {
                    $total=$N1+$N2;
                }
                elseif (isset($_POST['btomenos']))
                {
                    $total=$N1-$N2;

                }
                elseif (isset($_POST['btovezes']))
                {
                    $total=$N1*$N2;
                }
                elseif (isset($_POST['btodividir']))
                {
                    $total=$N1*$N2;
                }
                else
                {
                    echo "Erro!";
                }

                echo "$total";
            }
        ?>
        </div>
    </div>
</div>

