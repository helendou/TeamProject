<?php

$host = 'localhost';
$dbname = 'finalproject';
$user = 'root';
$pass = '';

try {
  # MySQL with PDO_MYSQL
  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  //echo "Connected!!!";
}
catch(PDOException $e) {
  echo "ERROR: ";
  echo $e->getMessage();
}

?>
