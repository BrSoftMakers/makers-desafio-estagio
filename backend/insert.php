<?php
require_once "connection.php";

$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$disponibilidade = $_POST['disponibilidade'];
$valor = $_POST['valor'];

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}

$sql = "INSERT INTO automoveis (modelo, marca, tipo, disponibilidade, valor) VALUES ('$modelo', '$marca', '$tipo', '$disponibilidade', '$valor')";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Cadastrado com sucesso.');window.location.replace('../list.php');</script>";
}
else{
    echo "<script>alert('Falha ao cadastrar.');window.location.replace('../carRegister.php');</script>";
}

?>