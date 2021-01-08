<?php

function connection() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=galeria_practica', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        return "Connection Error : " . $e->getMessage();
    }
}