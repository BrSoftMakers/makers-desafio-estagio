<?php
require_once "connection.php";

$id = $_POST['id'];

if($conn->connect_error){
    die('Connection failed' . $conn->connect_error);
}
var_dump($id);
$sql = "DELETE FROM automoveis WHERE id_veiculo = '$id'";

if($conn->query($sql) === TRUE){
    echo "<script>alert('Deletado com sucesso.');window.location.replace('../list.php');</script>";
}
else{
    echo "<script>alert('Falha ao deletar.');window.location.replace('../list.php');</script>";
}
?>