<?php
include_once('Conexao.php');

if($_POST)
{
    $nome_Categoria = $_POST['txtNome'];
    $status_Categoria = $_POST['txtStatus'];
    $descricao_Categoria = $_POST['txtDescricao']; 
    $obs_Categoria = $_POST['txtObs'];
    
    try {
        $sql = $conn->prepare(
            "insert into Categoria
            (nome_Categoria,status_Categoria,descricao_Categoria,obs_Categoria)
            values
            (:nome_Categoria,:status_Categoria,:descricao_Categoria,:obs_Categoria)"
        );

        $sql->execute(array(
            ':nome_Categoria'=>$nome_Categoria,
            ':status_Categoria'=>$status_Categoria,
            ':descricao_Categoria'=>$descricao_Categoria,
            ':obs_Categoria'=>$obs_Categoria
        ));

        if($sql->rowCount() > 0)
        {
            echo "<p>Dados cadastrados com sucesso</p>";
            echo "<p>Id Gerado: ".$conn->lastInsertId()."</p>";
            echo'<p><a href="Login_sistema.php">Voltar</p>';
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