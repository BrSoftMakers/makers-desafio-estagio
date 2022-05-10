<?php
require_once "connection.php";

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$status = $_POST['disponibilidade'];
$valor = $_POST['valor'];

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}

$sql = "UPDATE automoveis SET modelo = '$modelo', marca = '$marca', tipo = '$tipo', disponibilidade = '$status', valor = '$valor' WHERE id_veiculo = '$id'";

if($conn->query($sql) === TRUE ){
    echo "<script>alert('Editado com sucesso.');window.location.replace('../list.php');</script>";
}
else{
    echo "<script>alert('Falha ao editar.');window.location.replace('../carUpdate.php?id=$id');</script>";
}

?>