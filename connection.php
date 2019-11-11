<?php

/**
 * 
 * @return \PDO
 */
function getConection(){
    $dsn =  'mysql:host=localhost;dbname=mercadophp;charset=utf8';
    $user = 'root';
    $pass = '';

    try{
       $pdo = new PDO($dsn, $user, $pass); 
    }catch(PDOException $ex){
        echo 'Erro: '.$ex->getMessage();
    }  
    
    return $pdo;
    
}