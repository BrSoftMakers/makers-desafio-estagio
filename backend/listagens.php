<?php

    function exibirTotal() {

        // Conexao
        require "config.php";

        $sql = "SELECT count(*) AS total FROM veiculo";

        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) <> 0) {
            while ($row = mysqli_fetch_array($results)) {

                echo "<h2 class='text-light text-center'>" . $row['total'] . "</h2>";

            }
        } else {
            echo "<h2 class='text-light text-center'>Nenhum</h2>";
        }
        mysqli_close($conn);

    }

    function totalDisponiveis() {

        // Conexao
        require "config.php";

        $sql = "SELECT count(*) AS total FROM veiculo WHERE status = 'Disponível'";

        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {

                echo "<h2 class='text-light text-center'>" . $row['total'] . "</h2>";

            }
        } else {
            echo "<h2 class='text-light text-center'>Nenhum</h2>";
        }
        mysqli_close($conn);

    }

    function totalAlugados() {

        // Conexao
        require "config.php";

        $sql = "SELECT count(*) AS total FROM veiculo WHERE status = 'Alugado'";

        $results = mysqli_query($conn, $sql);

        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_array($results)) {

                echo "<h2 class='text-light text-center'>" . $row['total'] . "</h2>";

            }
        } else {
            echo "<h2 class='text-light text-center'>Nenhum</h2>";
        }
        mysqli_close($conn);

    }

?>