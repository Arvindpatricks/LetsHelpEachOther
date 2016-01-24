<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>

</script>
</head>
<body> 

<div data-role="page">
	<div data-role="header">
		<h1>Rain Relief</h1>
		<h3>#LetsHelpEachOther</h3>
	</div><!-- /header -->
	<div role="main" class="ui-content">
<?php
$servername = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname = "u888577970_blog";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address = $_POST['address'];
$material= $_POST['material'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO tycl (name,mobile,address,material)
VALUES ( '$name','$mobile', '$address','$material')";


if(mysqli_query($conn, $sql)){
	$str="<script type='text/javascript'>location.href = './home.php';</script>";
	header("Location: ./home.php");
	
	echo $str;
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$conn->close();

?>

<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->




</div><!-- /page -->
</html>