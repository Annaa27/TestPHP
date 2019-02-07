<?php


$db = new PDO("mysql:host=localhost;dbname=TestPHP","root", "");
$db->setAttribute(PDO::ATTR_ERRMODE,
         PDO:: ERRMODE_EXCEPTION);
try {
    $queryStr = "INSERT INTO goods (name, price, comment) VALUES ('Galina', '48', 'Goods tovarquelity')";
   
            $db->query($queryStr);
            
} catch (PDOException $e) {
    echo $e->getMessage();
}


