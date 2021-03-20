<?php
$servername = 'localhost';
$username = 'root';
// Inserer mdp//
$password = '';
try{ 
$db = new PDO("mysql:host=$servername;dbname=network", $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOEXception $e) {
    die('Erreur:' .$e->getMessage());
}