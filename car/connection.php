<html>
<body>



<h1 id = "search">Search Page</h1>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "sellertablenew";

$conn =  mysqli_connect($servername, $username, $password, $database);



?>
<?php
$sql_data = "SELECT `Seller Name`, `City`, `Address`, `Phone Number`, `Email Address`, `Make`, `Model`, `Year` from seller1;";
$result = $conn->query($sql_data);
while($row=$result->fetch_assoc())
{
	echo "<li>Seller Name: ".$row["Seller Name"]."</li>
		<li>City:".$row["City"]."</li>
		<li>Address:".$row["Address"]."</li>
		<li>Phone Number:".$row["Phone Number"]."</li>
		<li>Email Adddress: ".$row["Email Address"]."</li>
		<li>Vehicle Make:".$row["Make"]."</li>
		<li>Vehicle Model".$row["Model"]."</li>
		<li>Vehicle Year".$row["Year"]."</li>
		<li>_____________________</li>";
}

$conn->close();
?>

</body>
</html>