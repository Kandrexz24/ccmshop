<?php
$servername = "ccmshop.cl";
$database = "ccmshopc_christofher";
$username = "martinabas03";
$password = "ccmshopc_ccmdata";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>