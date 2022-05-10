<?php 
require_once "includes/header.html";
require_once "backend/connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de veículos</title>
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    
    <div class="container-md">
        <div class="mb-6">
            <h4 class="card-title">Lista de Veículos</h4>
        </div>

    <?php
    //Verificando conexão
    if($conn->connect_error){
        die('Connection failed' . $conn->connect_error);
    }

    //Paginação parte 1
    
    $quantidade = 5;
    $paginaAtual = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    $inicio = ($quantidade * $paginaAtual) - $quantidade;
    //Select no banco de dados

        $sql = "SELECT id_veiculo, modelo, marca, tipo, disponibilidade, valor FROM automoveis ORDER BY marca ASC LIMIT $inicio, $quantidade";
        $result = $conn->query($sql);
    
    //Verificando se retornou algum dado da tabela e inserindo os dados na lista
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
      
    ?>
    <!-- Lista -->

            <div class="card mb-2" style="max-width: 980px; width: 600px;">
                <div class="row g-2">
                    <div class="col-md-4">
                    <img src="<?php echo "img/" . $row['modelo'] . ".png";?>" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body info">
                            <h5 class="card-title"><?php echo $row['modelo'];?></h5>
                            <p class="card-text"><?php echo $row['marca'];?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $row['tipo'];?></small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body info2">
                        <div class="btn"><a href="carUpdate.php?id=<?php echo $row['id_veiculo'];?>"><button class="btn btn-warning">Editar</button></a>
                            <a href="" onclick="return confirm('Confirme para deletar.')"><form action="backend/delete.php" method="POST"><input type="hidden" name="id" value="<?php echo $row['id_veiculo'];?>"><button type="submit" class="btn btn-danger">Deletar</button></form></a></div>
                            <p class="card-text"><small class="text-muted"><?php echo $row['disponibilidade'];?></small></p>
                            <h4 class="card-text"><?php echo "R$" . $row['valor'] . " / dia";?></h4>                            
                        </div>
                    </div>
                </div>
            </div>

        <?php 
        }//fecha while
        }//fecha if 

        //paginação parte 2

        $anterior = $paginaAtual - 1;
        $proximo = $paginaAtual + 1;
        ?>
        <div class="mb-6 pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                if($anterior >= 1){
                    echo "<li class='page-item'><a class='page-link' href='list.php?pagina=$anterior'><</a></li>";
                }else{
                    echo "<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1' aria-disabled='true'><</a></li>";
                }
                ?>

                <?php
                if($anterior >= 1){
                    echo "<li class='page-item'><a class='page-link' href='list.php?pagina=$anterior'>$anterior</a></li>";
                }else{
                    echo "<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1' aria-disabled='true'>$anterior</a></li>";
                }
                ?>

                <li class="page-item"><a class="page-link" href=""><?php echo $paginaAtual;?></a></li>

                <?php
                if($proximo > $paginaAtual){
                    echo "<li class='page-item'><a class='page-link' href='list.php?pagina=$proximo'>$proximo</a></li>";
                }else{
                    echo "<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1' aria-disabled='true'>$proximo</a></li>";
                }
                ?>

                <?php
                if($proximo >= $paginaAtual){
                    echo "<li class='page-item'><a class='page-link' href='list.php?pagina=$proximo'>></a></li>";
                }else{
                    echo "<li class='page-item disabled'><a class='page-link' href='#' tabindex='-1' aria-disabled='true'>>$proximo</a></li>";
                }
                ?>
            </ul>
        </nav>
        </div>
        </div>
</body>
</html>