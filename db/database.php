<?php
$servername = 'localhost';
$username = 'root';
$password = '0000';
try{ 
$db = new PDO("mysql:host=$servername;dbname=network", $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOEXception $e) {
    die('Erreur:' .$e->getMessage());
}