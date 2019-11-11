<?php

include './connection.php';

$conn = getConection();

$sql = 'UPDATE produto SET descricao = :desc, qtd = :qtd, valor = :valor WHERE id = :id';

$desc = 'Feijão Novo';
$qtd = 7;
$valor = 8.50;
$id = 2;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':desc', $desc);
$stmt->bindParam(':qtd', $qtd);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':id', $id);

if($stmt->execute()){
    echo 'Atualizado com sucesso!';
}else{
    echo 'Erro ao atualizar!';
}

