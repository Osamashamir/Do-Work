<!-- 

// $con=mysqli_connect("localhost","root","","dowork")or die("Couldn't connect");
//  -->

<?php
$servername = "localhost"; // Change to your MySQL server hostname
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "dowork"; // Change to your database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
