<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "sellertablenew";

$conn = mysqli_connect($servername, $username, $password, $database);

?>
<?php

$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$phone_number = $_REQUEST['phone_number'];
$email = $_REQUEST['email'];
$make = $_REQUEST['make'];
$model = $_REQUEST['model'];
$year = $_REQUEST['year'];
$link= "http://www.jdpower.com/Cars/$year/$make/$model";
$sql_data = "INSERT INTO `seller1` ( `Seller Name`, `City`, `Address`, `Phone Number`, `Email Address`, `Make`, `Model`, `Year`) VALUES ('$name', '$address', '$city', '$phone_number', '$email', '$make', '$model', '$year')";


$conn->query($sql_data);


?>

<html>

<body>

<input type="button" onclick="location.href='firstpage.html'"   value="Home">

<tr>
<ul style="list-style-type:none;">
		<li>Name: <?php echo $name; ?></li>
		<li>City: <?php echo $city; ?></li>
		<li>Adress: <?php echo $address; ?></li>
		<li>Phone Number: <?php echo $phone_number; ?></li>
		
		<li>Email: <?php echo $email; ?></li>
	<li>Make: <?php echo $make; ?></li>
		<li>Model: <?php echo $model; ?></li>
		<li>Year: <?php echo $year; ?></li>
		
		<li>Link: <a id="UrlClick" href="<?php echo $link; ?> "><?php echo $link; ?> </li>
		</ul>
	
	</body>
	</html>


