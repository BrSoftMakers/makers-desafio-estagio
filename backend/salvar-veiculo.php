<?php

	// Conexao com o database
	include_once "config.php";

    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $status = $_POST['status'];

	$stmt = $conn -> prepare("INSERT INTO veiculo (modelo, marca, tipo, status) VALUES (?, ?, ?, ?)");

	$stmt -> bind_param("ssss", $modelo, $marca, $tipo, $status);
	$stmt -> execute();

	$stmt -> close();
	$conn -> close();

	header("location: ../index.php");

?>