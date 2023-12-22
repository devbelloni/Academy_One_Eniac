<?php 
//no localhost
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "id20628149_pdi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Conectado";

?>