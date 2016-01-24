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
		<h5>Wait For Loading...</h5>
	</div><!-- /header -->
 <br><br>
 	<div role="main" class="ui-content">
 	<div border="1">
 <marquee behavior="scroll" direction="down" scrollamount="2">
 <ul>
 
<?php

$state=$_POST['state'];
if($state=="Pondicherry"){
	$locality=$_POST['localityy'];

}
else if($state=="TamilNadu"){
	$locality=$_POST['locality'];

}

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
	$sql = "SELECT * FROM traffic where state='".$state."'";
	
}
else{
$sql = "SELECT * FROM traffic where state='".$state."' and locality='".$locality."'";
}
$retval = mysqli_query(  $conn,$sql );
if(! $retval )
{
	die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
		echo"<li>{$row['details']}</li>";


}




$conn->close();

?>
</ul>
</marquee>
</div>
</div>
<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->

</body>
</html>