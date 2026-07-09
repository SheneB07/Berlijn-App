<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "berlijn_app";

$servername = "localhost";
$username = "u240660_berlijnapp";
$password = "9gFx75YLrqEFNuxVXFS9";
$dbname = "u240660_berlijnapp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>