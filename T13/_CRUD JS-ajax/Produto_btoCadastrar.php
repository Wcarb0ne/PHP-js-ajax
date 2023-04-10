<?php
include_once('Conexao.php');


if($_POST)
{
    $nome_Produto = $_POST['txtNome'];
    $status_Produto = $_POST['txtStatus'];
    $descricao_Produto = $_POST['txtDescricao']; 
    $obs_Produto = $_POST['txtObs'];
    
    try {
        $sql = $conn->prepare(
            "insert into Produto
            (nome_Produto,status_Produto,descricao_Produto,obs_Produto)
            values
            (:nome_Produto,:status_Produto,:descricao_Produto,:obs_Produto)"
        );

        $sql->execute(array(
            ':nome_Produto'=>$nome_Produto,
            ':status_Produto'=>$status_Produto,
            ':descricao_Produto'=>$descricao_Produto,
            ':obs_Produto'=>$obs_Produto
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p>Id Gerado: ".$conn->lastInsertId()."</p>";
            echo '<a href="Login_sistema.php">Voltar</a>';
        }
    
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:index.php');
}

?>