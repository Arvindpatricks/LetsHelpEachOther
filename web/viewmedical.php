<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rain Relief</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script type="text/javascript">

</script>


</head>

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Lets Serve the Needs</h1>
		<h3>LetsHelpEachOther</h3>

	</div><!-- /header -->
	<div role="main" class="ui-content">
	<form id="forma" method="post" action="gethelp.php" data-ajax="false">
	<center><h5>Choose the desired Location to help</h5></center>
<h3>Select City</h3>		
		<div class="ui-field-contain">
		
		
    <select name="state" id="stateid">
		<option value="Not Selected">--Not Selected--</option>	

        <option value="Pondicherry">Pondicherry</option>
        <option value="TamilNadu">TamilNadu</option>
        
    </select>
</div>

</div>

      <center>  <input type="submit" id="b" class="ui-input-btn ui-btn ui-btn-a" data-enhanced="true" value="Search" ></center>
</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
			<center><a href="./home.php">Back To Home</a></center>
		
	</div><!-- /footer -->


</div><!-- /page -->

</body>
</html>

