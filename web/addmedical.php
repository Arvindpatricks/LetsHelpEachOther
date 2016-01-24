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
		<h4>Give Your Details To Rescue</h4>
	</div><!-- /header -->
	<div role="main" class="ui-content">
	<form method="post" action="am.php">
	<h3>Name</h3>
     <input type="text" name="name" id="text-1" value="">
<h3>Select City</h3>		
		<div class="ui-field-contain">
		
		
    <select name="state" id="stateid">
		<option value="Not Selected">--Not Selected--</option>	

        <option value="Pondicherry">Pondicherry</option>
        <option value="TamilNadu">TamilNadu</option>
        
    </select>
</div>

<h3>Enter Locality</h3>
	          <input type="text" name="locality" value="">
	   

<h3>Assistance Needed- Details</h3>
    <textarea cols="40" rows="8" name="details" placeholder="Address / Mobile / Kind Of Assistance Needed"></textarea>

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

