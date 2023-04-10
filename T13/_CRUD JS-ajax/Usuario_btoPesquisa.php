<?php
include_once('Conexao.php');


$id_Usuario="";
$nome_Usuario ="";
$login_Usuario ="";
$senha_Usuario ="";
$confirmarSenha_Usuario ="";
$email_Usuario ="";
$dataNasc_Usuario ="";
$cpf_Usuario =""; 
$genero_Usuario =""; 
$telefone1_Usuario =""; 
$telefone2_Usuario ="";
$logradouro_Usuario =""; 
$cidade_Usuario =""; 
$uf_Usuario =""; 
$cep_Usuario ="";
$cadastro_Usuario=""; 
$status_Usuario ="";
$obs_Usuario ="";

if($_POST)
{
    $id_Usuario =$_POST['txtID'];
    try
    {   
        $teste = 'select * from Usuario where id_Usuario='.$id_Usuario;
        $sql = $conn->query($teste);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Usuario=$linha[0];
                $nome_Usuario =$linha[1];
                $login_Usuario =$linha[2];
                $senha_Usuario =$linha[3];
                $confirmarSenha_Usuario =$linha[4];
                $email_Usuario =$linha[5];
                $dataNasc_Usuario =$linha[6];
                $cpf_Usuario =$linha[7]; 
                $genero_Usuario =$linha[8]; 
                $telefone1_Usuario =$linha[9]; 
                $telefone2_Usuario =$linha[10];
                $logradouro_Usuario =$linha[11]; 
                $cidade_Usuario =$linha[12]; 
                $uf_Usuario =$linha[13]; 
                $cep_Usuario =$linha[14];
                $cadastro_Usuario=$linha[15]; 
                $status_Usuario =$linha[16];
                $obs_Usuario =$linha[17];
            }
            echo"
            <p>id_Usuario: <span id='idGerado'>$id_Usuario</span></p>
            <p>nome_Usuario: <span id='PesquisaNome'>$nome_Usuario</span></p>
            <p>login_Usuario: <span id='PesquisaLogin'>$login_Usuario</span></p>
            <p>senha_Usuario: <span id='PesquisaSenha'>$senha_Usuario</span></p>
            <p>confirmarSenha_Usuario: <span id='PesquisaConfirmarSenha'>$confirmarSenha_Usuario</span></p>
            <p>email_Usuario: <span id='PesquisaEmail'>$email_Usuario</span></p>
            <p>dataNasc_Usuario: <span id='PesquisaDataNasc'>$dataNasc_Usuario</span></p>
            <p>cpf_Usuario: <span id='PesquisaCpf'>$cpf_Usuario</span></p>
            <p>genero_Usuario: <span id='PesquisaGenero'>$genero_Usuario</span></p>
            <p>telefone1_Usuario: <span id='PesquisaTelefone1'>$telefone1_Usuario</span></p>
            <p>telefone2_Usuario: <span id='PesquisaTelefone2'>$telefone2_Usuario</span></p>
            <p>logradouro_Usuario: <span id='PesquisaLogradouro'>$logradouro_Usuario</span></p>
            <p>cidade_Usuario: <span id='PesquisaCidade'>$cidade_Usuario</span></p>
            <p>uf_Usuario: <span id='PesquisaUF'>$uf_Usuario</span></p>
            <p>cep_Usuario: <span id='PesquisaCep'>$cep_Usuario</span></p>
            <p>cadastro_Usuario: <span id='PesquisaCadastro'>$cadastro_Usuario</span></p>
            <p>status_Usuario: <span id='PesquisaStatus'>$status_Usuario</span></p>
            <p>obs_Usuario: <span id='PesquisaObs'>$$obs_Usuario</span></p>
            
            ";
        } 
        else
        {
                echo "<p>Erro, dados não encontrado</p>";
        }

    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }

}

?>