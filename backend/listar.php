<?php

    function exibirCadastros() {

        // Conexao
        require "config.php";

        $sql = "SELECT * FROM veiculo ORDER BY idveiculo DESC";

        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {

            // Indice para o modal
            $index = 0;

            while ($row = mysqli_fetch_array($results)) {

                $index++;

                $color = ($row['status'] == 'Disponível' ? 'text-success' : 'text-danger');

                echo "<div class='card m-3'>";
                echo    "<div class='card-header " . $color . "'>";
                echo        $row['status'];
                echo    "</div>";
                echo    "<div class='card-body'>";
                echo        "<h5 class='card-title'>" . $row['modelo'] . "</h5>";
                echo        "<p class='card-text'>" . $row['marca'] . " | " . $row['tipo'] . "</p>";
                echo        "<a href='#' class='btn btn-primary m-2' data-bs-toggle='modal' data-bs-target='#modalAlterar" . $index . "'>Editar</a>";
                echo        "<button type='submit' class='btn btn-primary m-2' form='formExcluir" . $index . "'>Excluir veículo</button>";
                echo        "<form id='formExcluir" . $index . "' action='backend/excluir.php' method='POST'>";
                echo            "<input type='hidden' name='idveiculo' value='" . $row['idveiculo'] . "'>";
                echo        "</form>";
                echo    "</div>";
                echo "</div>";

                // Modal para alterar
                echo "<div class='modal fade' id='modalAlterar" . $index . "' tabindex='-1' aria-hidden='true'>";
                echo    "<div class='modal-dialog modal-dialog-scrollable modal-dialog-centered'>";
                echo        "<div class='modal-content'>";
                echo            "<div class='modal-header'>";
                echo                "<h5 class='modal-title'>Alterar informações</h5>";
                echo                "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                echo            "</div>";
                echo            "<form action='backend/alterar.php' method='POST'>";
                echo                "<div class='modal-body'>";
                echo                    "<div class='mb-3'>";
                echo                        "<input class='form-control mb-3' type='text' name='modelo' value='" . $row['modelo'] . "' required>";
                echo                        "<input class='form-control mb-3' type='text' name='marca' value='" . $row['marca'] . "' required>";
                echo                        "<select class='form-select mb-3' name='tipo' required>";
                echo                            "<option selected>Selecione o tipo</option>";
                echo                            "<option value='Hatch'>Hatch</option>";
                echo                            "<option value='Sedan'>Sedan</option>";
                echo                            "<option value='SUV'>SUV</option>";
                echo                        "</select>";
                echo                        "<select class='form-select mb-3' name='status' required>";
                echo                            "<option selected>Status</option>";
                echo                            "<option value='Disponível'>Disponível</option>";
                echo                            "<option value='Alugado'>Alugado</option>";
                echo                        "</select>";
                echo                    "</div>";
                echo                "</div>";
                echo                "<div class='modal-footer'>";
                echo                    "<input type='hidden' name='idveiculo' value='" . $row['idveiculo'] . "'>";
                echo                    "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>";
                echo                    "<button type='submit' name='upload' class='btn btn-primary'>Salvar</button>";
                echo                "</div>";
                echo            "</form>";
                echo        "</div>";
                echo    "</div>";
                echo "</div>";

            }
        } else {
            echo "<h1 class='text-center mt-3'>Nenhum veículo cadastrado no momento...</h1>";
        }
        mysqli_close($conn);

    }

?>