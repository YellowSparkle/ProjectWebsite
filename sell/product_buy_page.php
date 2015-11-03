<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	
	generateTitle("Order complete");
	generateHeader();
?>
<html lang="en">
	<head>
		<title>Sell your product</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="../utility/assets/css/main.css" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>

<body>

 <!--Working parts checkboxes--->
	<!--<div class="checkboxes_working"> 
		<ul class="checkbox">
		<fieldset width: 100%;>
		-->
			<LEGEND><b>Product includes a working:</b></LEGEND>
			  
			  	<div class="6u 12u$(small)">
			  		<li></li>
					<input type="checkbox" id="Charger" name="Charger">
					<label for="Charger">Charger</label>
					</li><li>				
					<input type="checkbox" id="Power Cable" name="Power Cable">
					<label for="Power Cable">Power Cable</label>
					</li><li>
					<input type="checkbox" id="Chargingport" name="Chargingport">
					<label for="Chargingport">Chargingport</label>
					</li><li>	
					<input type="checkbox" id="Battery" name="Battery">
					<label for="Battery">Battery</label>
					</li><li>	
					<input type="checkbox" id="Screen" name="Screen">
					<label for="Screen">Screen</label>
					</li><li>	
					<input type="checkbox" id="Succesful boot" name="Succesful boot">
					<label for="Succesful boot">Succesful boot</label>
					</li><li>
					<input type="checkbox" id="Headphone port" name="Headphone port">
					<label for="Headphone port">Headphone port</label>
					</li>
				</ul>
			</fieldset>
		</div>
<!-------------------------->


<!-- SELECT BRAND DROP DOWN-->
<LEGEND><b>Pick a brand:</b></LEGEND>
<select style="width: 160px !important; min-width: 160px; max-width: 160px;">
<?php
		if(array_key_exists("submit", $_GET) && $_GET["submit"] == "Phones")
			{
				?>
		  		  <option value="Pick_brand">Pick a brand</option>
				  <option value="Samsung">Samsung</option>
				  <option value="Nokia">Nokia</option>
				  <option value="Apple">Apple</option>
				</select>
				<?php
			}
			
		if(array_key_exists("submit", $_GET) && $_GET["submit"] == "Audio")
			{
		?>
 <!-------------------------->
 
 <!-- PRICE TEXTBOX -->
			<LEGEND><b>Price:</b></LEGEND>
			<li><input type="text" style="width:108px;"><br></li>

 <!-------------------------->
 
  <!-- DICRIPTION TEXTBOX -->

			<LEGEND><b>Product discription:</b></LEGEND>
				<textarea name="Text1" cols="60" rows="5"></textarea>
	
 <!-------------------------->
 

  <!-- STATUS RADIO BUTTONS -->

			<LEGEND><b>State of product:</b></LEGEND>
			<div class="4u 12u$(small)">
				<input type="radio" id="new" name="new">
				<label for="new">New</label>              
  				
  				<input type="radio" id="second_hand" name="second_hand">
				<label for="second_hand">Second hand</label> 
				</div> 
 <!--------------------------> 
</body>
	
	
	<!-- TEMP SOLUTION MAKE UP CSS-->
	<style>
	div.checkboxes_working
		{
		  position: absolute;   
		  top: 40%;
		  left: 12%; 
		  border solid 3px color: red;
		  
		}
	
	div.brand
		{
		  position: absolute;   
		  top: 40%;
		  left: 33%; 
		  border solid 3px color: red;
		}
		
	div.price
		{
		  position: absolute;   
		  top: 53%;
		  left: 33%; 
		  border solid 3px color: red;
		}
				
	div.status_product
		{
		  position: absolute;   
		  top: 66%;
		  left: 33%; 
		  border solid 3px color: red;
		}
		
	div.beschrijving
		{
		  position: absolute;   
		  top: 86%;
		  left: 12%; 
		  border solid 3px color: red;
		}
	</style>
	 <!-------------------------->
</html>
