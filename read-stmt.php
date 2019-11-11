<?php
 include './connection.php';
 
 $conn = getConection();
 
 $sql = "SELECT * FROM produto WHERE id = :id";
 
 $stmt = $conn->prepare($sql);
 $stmt->bindValue(":id", 4);
 $stmt->execute();
 
 $result = $stmt->fetchAll();
 
 foreach ($result as $value) {
    echo 'ID: ' . $value['id'] . ' - ' . 'Desc: ' . $value['descricao'].'<br/>';
}

