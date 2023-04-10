<?php
include_once('conexao.php');

    if($_POST)
    {
            $id_Produto = $_POST['txtID'];
        
        try 
        {
        
            $sql = $conn->prepare (
                'delete from Produto where id_Produto = :id_Produto');
            
            $sql->execute(array(

                ':id_Produto'=>$id_Produto

            ));
            if($sql->rowCount()==1)
            {
                echo"<p>Dados ecluidos com Sucesso</p>";
                echo'<p><a href="Login_sistema.php">Voltar</p>';
            }
            
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

?>