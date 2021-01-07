<?php
$pdo = null;
try {
    $pdo = new PDO('mysql:host=mysql;dbname=database', 'root', '12345');
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}