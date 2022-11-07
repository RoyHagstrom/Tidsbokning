<?php


$servername = "localhost";
$username = "root";
$password = "";


if(isset($_POST['article-submit'])){

try {
  $conn = new PDO("mysql:host=$servername;dbname=bokning", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


}

?>

