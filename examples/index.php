<?php
$servername = "localhost";
$username = "tjConnection";
$password = "0okm9ijn)OKM";
<<<<<<< HEAD
$database = "jivve";
=======
$database = "ticketjive";
>>>>>>> 90d1a3144a43f1d9c67ab5517a0847dead2d39cc

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
