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
$( document ).ready(function() {
	$('#pondicherry, #tamilnadu').hide();

	$("#stateid").change(function () {
	    var selec = $('#stateid').val();
	   if(selec=="Pondicherry"){
		   
			$('#pondicherry').show();
			$('#tamilnadu').hide();

		   }
	   else if(selec=="TamilNadu"){
			$('#tamilnadu').show();
			$('#pondicherry').hide();

		   }
	   else{alert("Please select a valid State !");}
	});

	
});




</script>

</head>

<body>

<div data-role="page">
	<div data-role="header">
		<h1>Rain Relief</h1>
		<h3>LetsHelpEachOther</h3>
		<h4>Give Your Details To Rescue</h4>
	</div><!-- /header -->
	<div role="main" class="ui-content">
	<form>
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

<h3>Select Locality</h3>
		<div class="ui-field-contain">
		   <div id="tamilnadu">
				      <select name="locality" >
				   
		<option value="Not Selected">--Not Selected--</option>	

  <option value="Viluppuram">Viluppuram</option>
  <option value="Tirunelveli">Tirunelveli</option>
  <option value="Tiruvannamalai">Tiruvannamalai</option>
  <option value="Vellore">Vellore</option>
  <option value="Dindigul">Dindigul</option>
  <option value="Erode">Erode</option>
  <option value="Salem">Salem</option>
  <option value="Tirupur">Tirupur</option>
  <option value="Krishnagiri">Krishnagiri</option>
  <option value="Pudukkottai">Pudukkottai</option>
  <option value="Coimbatore">Coimbatore</option>
  <option value="Thoothukudi">Thoothukudi</option>
  <option value="Dharmapuri">Dharmapuri</option>
  <option value="Tiruchirappalli">Tiruchirappali</option>
  <option value="Kanchipuram">Kanchipuram</option>
  <option value="Virudhunagar">Virudhunagar</option>
  <option value="Ramanathapuram">Ramanathapuram</option>
  <option value="Sivaganga">Sivaganga</option>
  <option value="Cuddalore">Cuddalore</option>
  <option value="Madurai">Madurai</option>
  <option value="Tiruvallur">Tiruvallur</option>
  <option value="Thanjavur">Thanjavur</option>
  <option value="Namakkal">Namakkal</option>
  <option value="Karur">Karur</option>
  <option value="Theni">Theni</option>
  <option value="Nilgiris">Nilgiris</option>
  <option value="Nagapattinam">Nagapattinam</option>
  <option value="Tiruvarur">Tiruvarur</option>
  <option value="Ariyalur">Ariyalur</option>
  <option value="Perambalur">Perambalur</option>
  <option value="Kanyakumari">Kanyakumari</option>
  <option value="Chennai">Chennai</option>
    </select>
		   </div>
		
		<div id="pondicherry">
						      <select name="locality" >
		<option value="Not Selected">--Not Selected--</option>	
		
<option value="Ariankuppam">Ariankuppam</option>	
<option value="Bahour">Bahour</option>
	<option value="Bussy">Bussy</option>	
	<option value="Cassicade">Cassicade</option>
<option value="Embalom">Embalom</option>	
<option value="Indira Nagar">Indira Nagar</option>	
<option value="Kadirgamam">Kadirgamam</option>	
<option value="Kalapet">Kalapet</option>
<option value="Kamraj Nagar">Kamraj Nagar</option>	
<option value="Kuruvinatham">Kuruvinatham</option>	
<option value="Lawspet">Lawspet</option>
<option value="Manavely">Manavely</option>
<option value="Mangalam">Mangalam</option>	
<option value="Mannadipeth">Mannadipeth</option>
	<option value="Modeliarpeth">Modeliarpeth</option>	
	<option value="Muthialpet">Muthialpet</option>
<option value="Nellithope">Nellithope</option>	
<option value="Nettapakkam">Nettapakkam</option>	
<option value="Orleampeth">Orleampeth</option>	
<option value="Ossudu">Ossudu</option>
<option value="Oupalam">Oupalam</option>	
<option value="Ozhukarai">Ozhukarai</option>	
<option value="Palloor">Palloor</option>	
<option value="Raj Bhavan">Raj Bhavan</option>
<option value="Reddiarpalayam">Reddiarpalayam</option>	
<option value="Thattanchavady">Thattanchavady</option>	
<option value="Thirubuvanai">Thirubuvanai</option>	
<option value="Villanur">Villanur</option>
</select>

		</div>
        
</div>

<h3>Mobile</h3>
     <input type="text" name="mobile" id="text-1" value="">
<h3>No Of Persons</h3>
     <input type="text" name="noofpersons" id="text-1" value="">

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

