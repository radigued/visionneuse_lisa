<?php
     
$host = "127.0.0.1:3310";
$db = "lisa";
$db_user = "root";
$db_password = "root";

$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $db_user, $db_password);
$sql = 'SELECT * FROM Article';   
$req = $pdo->query($sql);


?>