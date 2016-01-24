

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

<h3>LetsHelpEachOther</h3>

</div><!-- /header -->



<div role="main" class="ui-content">
<center>
<h5>Data Added Successfully.</h5>
<a href="./home.php">Back to Home</a>
</center>


</div><!-- /content -->


<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->




</div><!-- /page -->



</body>



<?php

$dbhost = "localhost";
$username = "u888577970_arvin";
$password = "indian";
$dbname = "u888577970_blog";

$facility= $_POST['facility'];

$name=$_POST['name'];

$state=$_POST['state'];

if($state=="Pondicherry"){
	$locality=$_POST['localityy'];

}else{
	$locality=$_POST['locality'];
}




$mobile=$_POST['mobile'];

$fblink=$_POST['fblink'];

$details=$_POST['details'];





// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

$sql = "INSERT INTO details (facility,name,state,locality,mobile,fblink,details)

VALUES ('$facility', '$name', '$state','$locality','$mobile','$fblink','$details')";



if(mysqli_query($conn, $sql)){

header("Location: ./home.php");


} else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$conn->close();



?>



</html>