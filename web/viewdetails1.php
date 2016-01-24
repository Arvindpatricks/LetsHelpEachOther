 <html>
 <head>
 	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 </head>
 <body>
  <div data-role="page">
	<div data-role="header">
		<h1>Rain Relief</h1>
		<h3>LetsHelpEachOther</h3>
	</div><!-- /header -->
 <br><br>
 <center><h5>Use these info only for good cause !!</h5></center>
  <center><h5>Contact to get help !!</h5></center>
 
<?php

$state=$_GET['state'];
$locality=$_GET['locality'];
$name=$_GET['name'];
$mobile=$_GET['mobile'];
$servername = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname= "u888577970_blog";
$conn = new mysqli($servername, $username, $password, $dbname);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * FROM details where state='".$state."' and locality='".$locality."' and name='".$name."' and mobile='".$mobile."'";

$retval = mysqli_query($conn, $sql );
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}




echo "<table border='1' cellpadding='8'  align='center' >";
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
	echo"<tr><td>Name</td><td>{$row['name']}</td></tr>";


	echo"<tr><td>State</td><td>{$row['state']}</td></tr>";
	
	echo"<tr><td>Locality</td><td>{$row['locality']}</td></tr>";
	
	echo"<tr><td>Service Provided</td><td>{$row['facility']}</td></tr>";
	
	echo"<tr><td>Mobile</td><td>{$row['mobile']}</td></tr>";
	
	echo"<tr><td>Fb Link</td><td>{$row['fblink']}</td></tr>";
	echo"<tr><td>Additional Info</td><td>{$row['details']}</td></tr>";
	
	
	
}
echo "</table>";

$conn->close();

?>
<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->

</body>
</html>