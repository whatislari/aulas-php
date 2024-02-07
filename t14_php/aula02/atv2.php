<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <form action="" method="post" class="form-control p-3" id="frmNotas">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Média escolar</h1>
                </div>
                <hr>
                <div class="col-sm-4">
                    <p><input type="text" placeholder="Nota1" name="txtN1" id="txtN1" class="form-control notas"></p>
                    <p><input type="text" placeholder="Nota2" name="txtN2" id="txtN2" class="form-control notas"></p>
                    <p><input type="text" placeholder="Nota3" name="txtN3" id="txtN3" class="form-control notas"></p>
                    <p><input type="text" placeholder="Nota4" name="txtN4" id="txtN4" class="form-control notas"></p>
                    <p><button id="btoCalcular" name="btoCalcular" class="btn btn-primary form-control" formaction="desafio01.php">Calcular</button></p>
                    <p><a id="btoLimpar" name="btoLimpar" class="btn btn-warning form-control" href="desafio01.php">Limpar</a></p>
                </div>
                <div class="col-sm-8 text-center">
                    <?php
                    if($_POST)
                    {
                        $n1 = $_POST['txtN1'];
                        $n2 = $_POST['txtN2'];
                        $n3 = $_POST['txtN3'];
                        $n4 = $_POST['txtN4'];
                        $status = "";
                        $media = ($n1+$n2+$n3+$n4)/4;
                        
                        if($media >= 7)
                        {
                            $status = "Aprovado";
                        }else if ($media < 5 ){
                            $status = "Reprovado";
                        }else{
                            $status = "Exame";
                        }

                        echo "<h3>Aluno está $status com média $media</h3>";
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
        $('#frmNotas').submit(function(e){
           
            let n1 = $('#txtN1').val();
            let n2 = $('#txtN2').val();
            let n3 = $('#txtN3').val();
            let n4 = $('#txtN4').val();

            if(!$.isNumeric(n1))
            {
                alert("erro, o N1 deve ser numérico");
                e.preventDefault();
                $('#txtN1').val("");
                $('#txtN1').focus();
                return;
            }
            else if (n1 > 10 || n1 < 0)
            {
                alert("erro, o N1 deve estar entre 0 e 10");
                e.preventDefault();
                $('#txtN1').val("");
                $('#txtN1').focus();
                return;
            }
            if(!$.isNumeric(n2))
            {
                alert("erro, o N2 deve ser numérico");
                e.preventDefault();
                $('#txtN2').val("");
                $('#txtN2').focus();
                return;
            }
            else if (n2 > 10 || n2 < 0)
            {
                alert("erro, o N2 deve estar entre 0 e 10");
                e.preventDefault();
                $('#txtN2').val("");
                $('#txtN2').focus();
                return;
            }
            if(!$.isNumeric(n3))
            {
                alert("erro, o N3 deve ser numérico");
                e.preventDefault();
                $('#txtN3').val("");
                $('#txtN3').focus();
                return;
            }
            else if (n3 > 10 || n3 < 0)
            {
                alert("erro, o N3 deve estar entre 0 e 10");
                e.preventDefault();
                $('#txtN3').val("");
                $('#txtN3').focus();
                return;
            }
            if(!$.isNumeric(n4))
            {
                alert("erro, o N4 deve ser numérico");
                e.preventDefault();
                $('#txtN4').val("");
                $('#txtN4').focus();
                return;
            }
            else if (n4 > 10 || n4 < 0)
            {
                alert("erro, o N4 deve estar entre 0 e 10");
                e.preventDefault();
                $('#txtN4').val("");
                $('#txtN4').focus();
                return;
            }
        });
    </script>
</body>
</html>