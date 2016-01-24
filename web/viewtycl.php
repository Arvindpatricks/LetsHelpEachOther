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
  <center><h5>Here's the list of people willing to give Ur Needs !!</h5></center>
 
<?php
$servername = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname= "u888577970_blog";
$conn = new mysqli($servername, $username, $password, $dbname);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}

$sql = "SELECT * FROM tycl";

$retval = mysqli_query($conn, $sql );
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}




echo "<table border='1' cellpadding='8'  align='center' >";
echo"<tr><th>Name</th><th>Material</th><th>Mobile</th><th>Address</th></tr>";

while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
echo"<tr><td>{$row['name']}</td><td>{$row['material']}</td><td>{$row['mobile']}</td><td>{$row['address']}</td></tr>";
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