<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/style.css">
    <link rel="stylesheet" type="text/css" href="../_CRUD/css/Login/css/fonts-icones.css">
	<title>Login</title>
 
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
    
<main class="main_content container">
    <div class="container mt-4">
        <div class="row">
            <div class="col-10">
                
                <div class="content">            
                    
                    <div class="box-artigo">
                        
                        <form class="frmLogin" method="post" action="#">
                        
                            <div class="title icon icon-forward-1"> Login</div>
                            
                            <div class="input-container">
                                <input id="txtlogin" class="input" type="text" id="txtLogin" placeholder=""oninput="loginValidacao"/>
                                <div class="legenda-p"></div>
                                <label for="nome" class="label icon icon-user-1"> Nome</label>
                            </div>
                            
                            <div class="input-container">
                                <input id="txtSenha" class="input" type="password"id="txtSenha" placeholder=""/>
                                <div class="legenda-p"></div>
                                <label for="email" class="label icon icon-lock-1"> Senha</label>
                            </div>
                            
                            <?=$mensagem?>


                            <button type="text" class="btn"formaction="Login_sistema.php">Entrar</button>
                            
                        </form>

                    </div>
                
                </div>
            </div>
        </div>
    </div>
</main>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
<script>
    const Uvalidacao = document.getElementById('Uvalidacao');
const campos = document.querySelectorAll('required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;
//const senhaForte = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;

Uvalidacao.addEventListener('submit',(event)=>{
    event.preventDefault();
    
    nomeValidade();
    dataValidade();
    cpfValidade();
    generoValidade();
    emailValidade();
    telefone1Validade();
    telefoe2Validade();
    logradouroValidade();
    cepValidade();
    cidadeValidade();
    ufValidade();
    statusValidade();
    loginValidade();
    senhaValidade();
    confirmarsenhaValidade();
});
function setError(Uvalidacao){
    campos(Uvalidacao).style.border = '2px solid red';
    spans(Uvalidacao).style.display = 'block';
}
function removeEroor(Uvalidacao){
    campos(Uvalidacao).style.border = '';
    spans(Uvalidacao).style.display = 'none';
}
function loginValidade(){
    if(campos[14].ariaValueMax.length < 15)
    {
        setError(14);
        //console.log('LOGIN DEVE CONTER 10 CARACTERES')
    }
    else
    {
        removeEroor(14);
        //console.log('LOGIN VALIDADO');
    }
}
function senhaValidade(){
        if(campos[15].value.length < 8)
        {
            setError(15);
        }
        else {
            removeEroor(15);
            confirmarsenhaValiade();
        }
}
function confirmarsenhaValiade(){
        if(campos[15].value == campos[16].value && campos[16].value.length >= 3)
        {
            removeEroor(16);
        }
        else
        {
            setError(16);
        }
}
</script>


</body>
</html>