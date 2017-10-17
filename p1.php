<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$nut = $_POST['id'];

if($nut == 'A')
{
  $sql = "";//query to increment A by 1
}

if($nut == 'B')
{
  $sql = "";//query to increment B by 1
}

if($nut == 'C')
{
  $sql = "";//query to increment C by 1
}

if($nut == 'D')
{
  $sql = "";//query to increment D by 1
}

if($nut == 'E')
{
  $sql = "";//query to increment E by 1
}

if($nut == 'IRON')
{
  $sql = "";//query to increment IRON by 1
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
