<?php
include_once('Conexao.php');

$id_Produto="";
$cadastro_Produto=""; 
$nome_Produto ="";
$status_Produto ="";
$descricao_Produto=""; 
$obs_Produto ="";

if($_POST)
{
    $id_Produto =$_POST['txtID'];
    try
    {
        $sql = $conn->query('select * from Produto where id_Produto='.$id_Produto);
        
        if($sql->rowCount()==1)
        {
            foreach($sql as $linha)
            {
                $id_Produto=$linha[0];
                $cadastro_Produto=$linha[1]; 
                $nome_Produto =$linha[2];
                $status_Produto =$linha[3];
                $descricao_Produto =$linha[4];                
                $obs_Produto =$linha[5];
            }
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