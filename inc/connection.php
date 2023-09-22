<?php
//Create PDO
try{
  $db = new PDO("mysql:host=localhost;dbname=articles", 'root', '');
  //$db = new PDO("sqlite:".__DIR__."/database.db");
  //Give exception handling capability
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect to latest news database. <br> <br>";
  //echo details of potential errors
  //echo $e->getMessage();
  exit;
}
//echo "Connected to the database <br> <br>";
 ?>