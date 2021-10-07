<?php

	// Conexao com o database
	include_once "config.php";

    $id = $_POST['idveiculo'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $status = $_POST['status'];

	$stmt = $conn -> prepare("UPDATE veiculo SET modelo = ?, marca = ?, tipo = ?, status = ? WHERE idveiculo = ?");

	$stmt -> bind_param("sssss", $modelo, $marca, $tipo, $status, $id);
	$stmt -> execute();

	$stmt -> close();
	$conn -> close();

	header("location: ../index.php");

?>