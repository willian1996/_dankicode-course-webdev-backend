<?php

try{
    $pdo = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
}