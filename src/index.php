<?php

$servername = "serey-db.cp3iwujbajvo.us-east-1.rds.amazonaws.com";
$dbname = "choices";
$username = "sereydb";
$password = "password781";

try {
    $pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    echo "Successfully connected to the Database!\n";
} catch (PDOException $err) {
    die($err->getMessage());
}

echo "Pipeline Container 1: Updated Auto build and deploy: test seven.. \n\n";