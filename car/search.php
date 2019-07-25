<?php
$servername = "localhost";
$username = "root";
$password= "";
$database = "sellertablenew";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn->connect_error)
{
	die("die" . mysqli_connect_error());
}

?>

<?php
$sql_data = "SELECT `Seller Name`, `City`, `Address`, `Phone Number`, `Email Address`, `Make`, `Model`, `Year` from seller1;";
$conn->query($sql_data);


?>