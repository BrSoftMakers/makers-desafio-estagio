<?php
    include("backend/listar.php");
    require "backend/listagens.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locação de veículos</title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS para esta pagina -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex justify-content-center m-3">
        <button type="button" class="btn btn-outline-primary inline-centered" data-bs-toggle="modal" data-bs-target="#modalSalvar">Cadastrar um veículo</button>
    </div>

    <div class="painel d-flex justify-content-around align-items-center">
       <div>
           <h3 class="text-light text-center">Cadastros</h3>
           <?php exibirTotal(); ?>
       </div>
       <div>
           <h3 class="text-light text-center">Disponíveis</h3>
           <?php totalDisponiveis(); ?>
       </div>
       <div>
           <h3 class="text-light text-center">Alugados</h3>
           <?php totalAlugados(); ?>
       </div>
    </div>

    <!-- Modal para cadastro -->
    <div class="modal fade" id="modalSalvar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="backend/salvar-veiculo.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <input class="form-control mb-3" type="text" name="modelo" placeholder="Modelo" required>
                            <input class="form-control mb-3" type="text" name="marca" placeholder="Marca" required>
                            <select class="form-select mb-3" name="tipo" required>
                                <option selected>Selecione o tipo</option>
                                <option value="Hatch">Hatch</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                            </select>
                            <select class="form-select mb-3" name="status" required>
                                <option selected>Status</option>
                                <option value="Disponível">Disponível</option>
                                <option value="Alugado">Alugado</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="upload" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php exibirCadastros(); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>