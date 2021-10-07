<?php

	// Conexao com o database
	include_once "config.php";

    $id = $_POST['idveiculo'];

	$stmt = $conn -> prepare("DELETE FROM veiculo WHERE idveiculo = ?");

	$stmt -> bind_param("s", $id);
	$stmt -> execute();

	$stmt -> close();
	$conn -> close();

	header("location: ../index.php");

?>