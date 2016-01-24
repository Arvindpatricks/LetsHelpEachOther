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
		<h1>Rain Relief Portal</h1>
		<center><h3>#LetsHelpEachOther</h3><div class="fb-share-button" data-href="http://arvinds-blog.net/LetsHelpEachOther/home.php" data-layout="button_count"></div></center>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<div class="ui-input-btn ui-btn ui-btn-a">
      Enter Traffic Updates
        <input type="button" data-enhanced="true" value="Enhanced - Theme swatch A" onclick="window.location = './entertraffic.php';">

    </div>

	<div role="main" class="ui-content">
		<div class="ui-input-btn ui-btn ui-btn-a">
      View Traffic Updates
        <input type="button" data-enhanced="true" value="Enhanced - Theme swatch A" onclick="window.location = './traffic.php';">

    </div>
   	</div><!-- /content -->

	<div data-role="footer">
		<h4>#LetsHelpEachOther</h4>
		<center><div class="fb-share-button" data-href="http://arvinds-blog.net/LetsHelpEachOther/home.php" data-layout="button_count"></div></center>
		<h5>Developed By Arvind</h5><center>
		<div class="fb-follow" data-href="https://www.facebook.com/arvindheroic" data-layout="button_count" data-show-faces="false"></div>
	</center></div><!-- /footer -->

</div><!-- /page -->

</body>
</html>

