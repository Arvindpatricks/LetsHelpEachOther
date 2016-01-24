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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=559989757482877";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div data-role="page">

	<div data-role="header">
		<h3>Rain Relief Portal</h3>
		<center><h4>Medical Needs - Services</h4></center>
		<center><div class="fb-share-button" data-href="http://arvinds-blog.net/LetsHelpEachOther/home.php" data-layout="button_count"></div></center>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<div class="ui-input-btn ui-btn ui-btn-a">
          Need Medical Assistance
        <input type="button" data-enhanced="true" value="Enhanced - Theme swatch A" onclick="window.location = './addmedical.php';">

    </div>

	<div role="main" class="ui-content">
		<div class="ui-input-btn ui-btn ui-btn-a">
       Serve Medical Needs
        <input type="button" data-enhanced="true" value="Enhanced - Theme swatch A" onclick="window.location = './viewmedical.php';">

    </div>
<center>
For Emergency, Contact<br>
Enoch - 8489534233<br>
Marshal - 9994355583<br>
Pradeep - 9626694956<br>
Manikandan - 8122189702<br>
Srinath - 7200668652
</center>
    	</div><!-- /content -->

	<div data-role="footer">
		<center><div class="fb-share-button" data-href="http://arvinds-blog.net/LetsHelpEachOther/home.php" data-layout="button_count"></div></center>
		<h5>Developed By Arvind</h5><center>
		<div class="fb-follow" data-href="https://www.facebook.com/arvindheroic" data-layout="button_count" data-show-faces="false"></div>
	</center></div><!-- /footer -->

</div><!-- /page -->

</body>
</html>

