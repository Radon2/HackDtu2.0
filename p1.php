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
  $sql = "UPDATE vit SET A = A + 1;";//query to increment A by 1
}

if($nut == 'B')
{
  $sql = "UPDATE vit SET B = B + 1;";//query to increment B by 1
}

if($nut == 'C')
{
  $sql = "UPDATE vit SET C = C + 1;";//query to increment C by 1
}

if($nut == 'D')
{
  $sql = "UPDATE vit SET D = D + 1;";//query to increment D by 1
}

if($nut == 'E')
{
  $sql = "UPDATE vit SET E = E + 1;";//query to increment E by 1
}

if($nut == 'IRON')
{
  $sql = "UPDATE vit SET IRON = IRON + 1;";//query to increment IRON by 1
}

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
