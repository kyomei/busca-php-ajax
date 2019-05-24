<?php

try {
   $pdo = new PDO("mysql:dbname=projetox;host=localhost", "root", "");
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
   echo "Erro de conexão: ".$e->getMessage();
   exit;
}