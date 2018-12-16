<?php
$servername = "localhost";
$username = "tjConnection";
$password = "0okm9ijn)OKM";
$database = "ticketjive";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$test = '';
if (isset($_GET["name"])) {
    $test=$_GET["name"];
}else{
    $test='bob';
}

echo 'Hello ' . htmlspecialchars($test) . '!';


?>
