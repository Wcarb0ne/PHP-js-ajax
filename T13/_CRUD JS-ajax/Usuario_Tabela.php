
<div class="col-sm-12">
    <form action="" class="form-control" method="">
        <table id="tabela" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Data Cadastro</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once('Conexao.php');

                    try
                    {
                        $sql = $conn->query('select * from Usuario');
                      
                            foreach($sql as $linha)
                            { echo "<tr>
                                <th>$linha[0]</th>
                                <th>$linha[1]</th>
                                <th>$linha[2]</th>
                                <th>$linha[15]</th>
                                <th>$linha[16]</th>
                            </tr>";
                            }
                        
                           
                        
                    }
                    catch(PDOException $ex)
                    {
                        echo $ex->getMessage();
                    }

                ?>
                </tbody>                    
        </table>
                    <script src="_CRUD/css/Login/js/jquery.js"></script>
                    <script src="_CRUD/js/jquery.dataTables.min.js"></script>
                    <script src="_CRUD/js/dataTables.bootstrap5.min.js"></script>
                    <script src="_CRUD/css/bootstrap.css"></script>


    </form>
</div>            