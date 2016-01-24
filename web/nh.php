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
<?php

$state=$_POST['state'];
if($state=="Pondicherry"){
	$locality=$_POST['localityy'];

}
else if($state=="TamilNadu"){
	$locality=$_POST['locality'];

}
$service=$_POST['service'];

$servername = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname = "u888577970_blog";

$conn = new mysqli($servername, $username, $password, $dbname);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
if($locality=="Anywhere"){
	$sql = "SELECT * FROM details where state='".$state."'  and facility='".$service."'";
	
}
else{
$sql = "SELECT * FROM details where state='".$state."' and locality='".$locality."' and facility='".$service."'";
}
$retval = mysqli_query(  $conn,$sql );
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}




echo "<table border='1' cellpadding='8'  align='center' >";
echo"<tr><th>Name</th><th>View Details</th></tr>";
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
	echo"<tr>";
	echo "<td>{$row['name']}</td><td>"."<a href='./viewdetails1.php?name={$row['name']}&state={$row['state']}&locality={$row['locality']}&mobile={$row['mobile']}'>Get Help</a>"."</td>".
			"</tr>";
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