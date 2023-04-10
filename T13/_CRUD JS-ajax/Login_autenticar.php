<?php
session_start();

if($_SESSION &&($_SESSION['idUsuario'])&& isset($_SESSION['nomeUsuario'])&& isset($_SESSION['loginUsuario']))

{
    $idUsuario=$_SESSION['idUsuario'];
    $nomeUsuario=$_SESSION['nomeUsuario'];
    $loginUsuario=$_SESSION['loginUsuario'];
}
else{
    header('location:index.php');
}
?>
<!-- <div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3 p-3">
            <p>
                Id:.$idUsuario?> | 
                Nome:$nomeUsuario?> | 
                Login:<$loginUsuario?> | 
                <a href="Login_autenticarSair.php" class="btn btn-danger">Sair</a>  
            </p>
        </div>
    </div>
</div> -->