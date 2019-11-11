<?php
include './connection.php';

$conn = getConection();

$sql = "DELETE FROM produto WHERE id = :id";

$id = 4;

$stmt = $conn->prepare($sql);
$stmt->bindParam('id', $id);

if($stmt->execute()){
    echo 'Produto ID: '. $id . ', excluido com sucesso!';
}else{
    echo 'Erro ao excluir produto!';
}
