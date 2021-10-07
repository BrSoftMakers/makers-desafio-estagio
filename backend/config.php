<?php

    // Database connection
    $conn = new mysqli('localhost:3306', 'root', 'hd88*yhhg%%shdgHGB[]', 'locadora_de_veiculos');

    if (!$conn) {
        die('Erro ao se conectar: ' . mysqli_error($conn));
    }

?>