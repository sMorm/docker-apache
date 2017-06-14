<!DOCTYPE html
<html>

<head>
<title>Serey</title>
</head>

<body>

<style>
body {
  margin-top: 50px;
  background-color: #FAFAFA;
  font-family: sans-serif;
  text-align: center;
}
.container {
  display: flex;
  justify-content: center;
  align-content: center;
  color: #888;
  width: 50%;
  max-width: 700px;
  margin: 0 auto;
  font-size: 20px;
  padding: 50px 100px;
  border: solid 1px #EEE;
  border-radius: 5px;
  background-color: white;
  box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.10);
}
.box {
  font-weight: 300;
}
.text {
  font-weight: 300;
  color: #BBB;
}
</style>

<div class="container">
  <h1 class="box">Docker Test Environment</h1>
</div>

<div class="text">
<?php

$servername = "serey-db.cp3iwujbajvo.us-east-1.rds.amazonaws.com";
$dbname = "choices";
$username = "sereydb";
$password = "password781";
$isConnected = "";
try {
    $pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $isConnected = "Successfully Connected to Database";
} catch (PDOException $err) {
    die($err->getMessage());
}
echo "<h3 class='text'>$isConnected</h3>";
echo "<h3 class='text'>Base Image: Ubuntu 14.04</h3>";
echo "<h3 class='text'>Server Version: Apache - 2.4.7</h3>";
echo "<h3 class='text'>Changes has been made to the source</h3>";
?>
</div>



</body>
</html>

