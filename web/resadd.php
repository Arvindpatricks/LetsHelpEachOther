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
		<h2>Rain Relief Portal</h2>
		<center><div class="fb-share-button" data-href="http://arvinds-blog.net/LetsHelpEachOther/home.php" data-layout="button_count"></div></center>
	</div><!-- /header -->

	<div role="main" class="ui-content">
	
<?php
$servername = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname = "u888577970_blog";
$name=$_POST['name'];
$state=$_POST['state'];
if($state=="Pondicherry"){
	$locality=$_POST['localityy'];
	
}else{
$locality=$_POST['locality'];
}
$mobile=$_POST['mobile'];
$noofpersons=$_POST['noofpersons'];
$address=$_POST['address'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO rescue (name,state,locality,mobile,noofpersons,address)
VALUES ( '$name', '$state','$locality','$mobile','$noofpersons','$address')";


if(mysqli_query($conn, $sql)){
	$str="<script type='text/javascript'>location.href = './home.php';</script>";
	header("Location: ./home.php");
	
	echo $str;
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$conn->close();

?>
</div>
</div></body>
</html>