<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rain Relief</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



</head>

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Rain Relief</h1>
		<h3>LetsHelpEachOther</h3>
		<h4>Special Portal For Pondicherry Region - TYCL & Frnds</h4>
		<h4>Enter your Details, Let's Come and Collect</h4>
	</div><!-- /header -->
	<div role="main" class="ui-content">
	<form action="tysub.php" method="post">
	<h3>Name</h3>
     <input type="text" name="name" id="text-1" value="">
<h3>Materials Available</h3>		
		     <input type="text" name="material" id="text-1" value="">
<h3>Mobile</h3>
     <input type="text" name="mobile" id="text-1" value="">
<h3>Address</h3>
     <input type="text" name="address" id="text-1" value="">

      <center>  <input type="submit" class="ui-input-btn ui-btn ui-btn-a" data-enhanced="true" value="Submit" ></center>
</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>

