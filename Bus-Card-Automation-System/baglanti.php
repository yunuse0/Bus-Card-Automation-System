<?php
$host = 'localhost';
$dbname = 'kentkartdb';
$username = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=localhost;dbname=kentkartdb", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>