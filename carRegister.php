<?php
require_once "includes/header.html";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de veículos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/carRegister.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid form">
        <form action="backend/insert.php" method="POST">
            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="exampleInputText" placeholder="Modelo" autocomplete="off" required>
            </div>

            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" id="exampleInputText" placeholder="Marca" autocomplete="off" required>
            </div>

            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Tipo</label>
            <input type="text" name="tipo" class="form-control" id="exampleInputText" placeholder="Tipo" autocomplete="off" required>
            </div>

            <div class="mb-3">
            <label for="exampleInputText" class="form-label">Valor</label>
            <input type="text" name="valor" class="form-control" id="exampleInputText" placeholder="999.99" autocomplete="off" required>
            </div>
            
            <input type="hidden" name="disponibilidade" value="Disponivel">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

</body>
</html>