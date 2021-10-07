<?php

    // Database connection
    $conn = new mysqli('localhost:3306', 'root', '', 'locadora_de_veiculos');

    if (!$conn) {
        die('Erro ao se conectar: ' . mysqli_error($conn));
    }

?>