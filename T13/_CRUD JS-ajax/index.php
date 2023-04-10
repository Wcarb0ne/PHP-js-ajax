<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/style.css">
    <link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/fonts-icones.css">
	<title>Login</title> -->
    <link rel="stylesheet" href="css/bootstrap.css">
 
 </head>

<body>
<?php

    $mensagem = "";

    if($_POST)
    {
        include_once('Conexao.php');

        $loginUsuario = $_POST['txtLogin'];
        $senhaUsuario = $_POST['txtSenha'];

        $sql = $conn->query(
            "select * from Usuario where
                login_Usuario = '$loginUsuario' and
                senha_Usuario = '$senhaUsuario'
            ");

            if($sql->rowCount()==1)
            {
                session_start();
                foreach($sql as $linha)
                {
                    $_SESSION['idUsuario'] = $linha[0];
                    $_SESSION['nomeUsuario'] = $linha[1];
                    $_SESSION['loginUsuario'] = $linha[2];
                }

                header('Location:Login_sistema.php');
            }
            else
            {
                $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
            }
    }
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="" class="form-control" method="POST">
                    <div class="row">
                        <div class="col-sm-12 p-3">
                            <div class="card bg-blue">
                                
                            </div>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="text" name="txtLogin" id="txtLogin"placeholder="Informe seu Login" class="form-control" required>
                        </div>
                        <div class="col-sm-12 p-2">
                            <input type="password" name="txtSenha" id="txtSenha" placeholder="Informe sua Senha" class="form-control" required>
                        </div>
                        
                        <?=$mensagem?>
                        
                        <div class="col-sm-4 p-2"></div>
                        <div class="col-sm-4 p-2">
                            <button name="btoOK" id="btoOK" class="btn btn-primary form-control" formaction="index.php">Entrar</button>
                        </div>
                        <div class="col-sm-4 p-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        
    </div>

<!-- <script src="js/jquery.js"></script>
<script src="js/script.js"></script> -->
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="_CRUD/css/formcadastro.css">
    <link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/style.css">
    <link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/fonts-icones.css">-->
    
<!-- </head>
<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-10">
              
            </div>
        </div>
        
    </div>

</body>
</html> -->