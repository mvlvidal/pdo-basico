<?php

include './connection.php';

$conn = getConection();

$sql = "INSERT INTO produto(descricao,qtd,valor) VALUES ('Macarrão',30,'2.50')";

if ($conn->exec($sql)){
    echo 'Salvo com sucesso!';
}else{
    echo 'Erro ao salvar!';
}