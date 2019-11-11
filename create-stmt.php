<?php

include './connection.php';

$conn = getConection();

$sql = 'INSERT INTO produto(descricao,qtd,valor) VALUES (?,?,?)';

$desc = 'Carne';
$qtd = 7;
$valor = 8.50;

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $desc);
$stmt->bindParam(2, $qtd);
$stmt->bindParam(3, $valor);

if($stmt->execute()){
    echo 'Salvo com sucesso!';
}else{
    echo 'Erro ao salvar!';
}