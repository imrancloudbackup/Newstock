<?php
$hostname = "localhost";
$username = "ravelet6_secure";
$password = "9W}#_=C;7VLu";
$dbname = "ravelet6_test_market";

try
{
  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  define('BASE_URL', 'http://travelescapemaldives.biz/stock');
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}
?>

