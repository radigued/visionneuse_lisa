<?php

// $host = "127.0.0.1:5388";
// $db = "LISA";
// $db_user = "root";
// $db_password = "toor";

// $pdo = new PDO('srvsql:host=' . $host . ';dbname=' . $db; $db_user, $db_password);
$pdo = new PDO('srvsql:host=127.0.0.1:5388;dbname=LISA; charset=utf8', 'root', 'toor');

// $serverName = "serverName\sqlexpress"; //serverName\instanceName
// $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);

// if( $conn ) {
//      echo "Connexion établie.<br />";
// }else{
//      echo "La connexion n'a pu être établie.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }



$sql = 'SELECT * FROM Product';
$req = $pdo->query($sql);


?>
