<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PagSitema.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="css/Login/js/jquery.js"></script>


    <title>Login</title>


</head>
<body>

<?php include_once('Login_autenticar.php');?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <?php include_once('_header.php');?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <?php include_once('_menu.php');?>
            </div>
            <div class="col-sm-10 ">
                <?php
                    if($_GET)
                    {

                        if(isset($_GET['Tela']))
                        {

                            $tela = $_GET['Tela'];

                            if($tela  == 'Usuario')
                            {
                                include_once('frm_Usuario.php');
                            }

                            elseif($tela =='Categoria')
                            {
                                include_once('frm_Categoria.php');
                            }

                            elseif($tela =='Produto')
                            {
                                include_once('frm_Produto.php');
                            }

                            elseif($tela =='Sair')
                            {
                                include_once('Login_autenticarSair.php');
                            }
                            elseif($tela=='Utabela')
                            {
                                include_once('Usuario_tabela.php');
                            }
                        }
                        else{
                            echo '<h1> ERRO, Pagina não encontrada </h1>';
                        }


                    }
                    else{
                        include_once('_Home.php');
                    }
                ?>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12">
                <?php include_once('_footer.php');?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>