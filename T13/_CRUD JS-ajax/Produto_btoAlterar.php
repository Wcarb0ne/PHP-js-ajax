<?php
include_once('Conexao.php');
if($_POST)
{   $id_Produto = $_POST['txtID']; 
    $nome_Produto = $_POST['txtNome'];
    $status_Produto = $_POST['txtStatus'];
    $descricao_Produto = $_POST['txtDescricao']; 
    $obs_Produto = $_POST['txtObs'];

    try 
    {
       
        $sql = $conn->prepare('update Produto set
    
        $nome_Produto =:nome_Produto, 
        $status_Produto =:status_Produto, 
        $descricao_Produto =:descricao_Produto,  
        $obs_Produto =:obs_Produto
        where id_Produto=:id_Produto'
        );   

        $sql->execute(array(
            ':id_Produto'=>$id_Produto,
            ':nome_Produto'=>$nome_Produto,
            ':status_Produto'=>$status_Produto,
            ':descricao_Produto'=>$descricao_Produto,
            ':obs_Produto'=>$obs_Produto
        ));
        if($sql->rowCount()==1)
        {
            echo "<p>Dados alterados com sucesso</p>";
            echo '<a href="index.php">Voltar</a>';
        }
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
}
?>
    