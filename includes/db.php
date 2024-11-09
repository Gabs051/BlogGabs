<?php 
    /*
        Conexão com o banco de dados
    */

    $DB_SERVER = "localhost";
    $DB_USER = "gabs";
    $DB_PASS = "g4bs";
    $DB_NAME = "blog_db";

    try {
        $connect = new PDO("mysql:host=$DB_SERVER;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS);
        $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e -> getMessage();
    }
?>