<?php
require_once "includes/header.html";
require_once "backend/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar veículo</title>
    <link rel="stylesheet" href="css/carUpdate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    
    $id = $_GET['id'];

    $sql = "SELECT id_veiculo, modelo, marca, tipo, disponibilidade, valor FROM automoveis WHERE id_veiculo = $id";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
 
    ?>
    <div class="container-fluid form">
        <form action="backend/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id_veiculo'];?>">
            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Modelo</label>
            <input type="text" name="modelo" value="<?php echo $row['modelo'];?>" class="form-control" id="exampleInputText" placeholder="Modelo" autocomplete="off" required>
            </div>

            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Marca</label>
            <input type="text" name="marca" value="<?php echo $row['marca'];?>" class="form-control" id="exampleInputText" placeholder="Marca" autocomplete="off" required>
            </div>

            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Tipo</label>
            <input type="text" name="tipo" value="<?php echo $row['tipo'];?>" class="form-control" id="exampleInputText" placeholder="Tipo" autocomplete="off" required>
            </div>
            
            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Valor</label>
            <input type="text" name="valor" value="<?php echo $row['valor'];?>" class="form-control" id="exampleInputText" placeholder="999.99" autocomplete="off" required>
            </div>

            <div class="form-check">
                <input class="form-check-input" value="Alugado" name="disponibilidade" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Alugado
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" value="Disponivel" name='disponibilidade' type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Disponivel
                </label>
            </div>
            <button type="submit" class="btn btn-warning">Editar</button>
        </form>
    </div>        
</body>
</html>