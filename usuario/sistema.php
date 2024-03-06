<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuários</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>
</head>

<body>

<?php include_once("_autenticar.php"); ?>

    <div class="container">
        <div class="row">
            <?php include_once("_topo.php"); ?>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row">
            <div class="col-sm-10">
                <?php
                if(isset($_GET['tela']))
                {
                    $tela = $_GET['tela'];

                    if($tela=='usuario')
                    {
                        include_once("frmusuario.php"); 
                    }
                    if($tela=='funcio')
                    {
                        include_once("frmfuncio.php"); 
                    }
                    if($tela=='fornecedor')
                    {
                        include_once("frmforne.php"); 
                    }
                    if($tela=='produto')
                    {
                        include_once("frmpro.php"); 
                    }
                    if($tela=='movimentacao')
                    {
                        include_once("frmmovi.php"); 
                    }
                    if($tela=='localestoque')
                    {
                        include_once("frmlocest.php"); 
                    }
                    if($tela=='itemestoque')
                    {
                        include_once("frmites.php"); 
                    }
                    if($tela=='os')
                    {
                        include_once("frmos.php"); 
                    }
                }
                else
                {
                    include_once("_home.php"); 
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php include_once("_rodape.php"); ?>
        </div>
    </div>
    
</body>

</html>