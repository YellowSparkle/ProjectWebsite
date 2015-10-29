<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Order complete");
	generateHeader();
	
	
?>
<html lang="en">
	<head>
		<title>Offer your product</title>
	</head>

<body>
		
 <!--Working parts checkboxes--->
	<div class="checkboxes_working">
		<fieldset width: 100%;>
			<LEGEND><b>Product includes a working:</b></LEGEND>
			  	<ul class="checkbox">
			    <li><input type="checkbox" name="Working" id="del1" value="Charger" /><label for="del1">Charger</label></li>
			    <li><input type="checkbox" name="Working" id="del2" value="Powercable" /><label for="del2">Powercable</label></li>
			    <li><input type="checkbox" name="Working" id="del5" value="Charge_port" /><label for="del5"></label>Charging port</li>
			    <li><input type="checkbox" name="Working" id="del3" value="Battery" /><label for="del3">Battery</label></li>
			    <li><input type="checkbox" name="Working" id="del4" value="Screen" /><label for="del4"></label>Screen</li>
			    <li><input type="checkbox" name="Working" id="del5" value="Booting" /><label for="del5"></label>Successful boot</li>
			    <li><input type="checkbox" name="Working" id="del6" value="Headphone_port" /><label for="del6"></label>Headphone port</li>
			  	</ul>
			</fieldset>
	</div>
<!-------------------------->


<!-- SELECT BRAND DROP DOWN-->
	<div class="brand">
		<fieldset width: 100%;>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style="width: 160px !important; min-width: 160px; max-width: 160px;">
	  		  <option value="Pick_brand">Pick a brand</option>
			  <option value="Samsung">Samsung</option>
			  <option value="Nokia">Nokia</option>
			  <option value="Apple">Apple</option>
			</select>
		</fieldset>
	</div>
 <!-------------------------->
 
 <!-- PRICE TEXTBOX -->
 	<div class="price">
		<fieldset width: 100%;>
			<LEGEND><b>Price:</b></LEGEND>
			Price: <input type="text" style="width:108px;"><br>
		</fieldset>
	</div>
 <!-------------------------->
 
  <!-- DICRIPTION TEXTBOX -->
 	<div class="beschrijving">
		<fieldset width: 100%;>
			<LEGEND><b>Product discription:</b></LEGEND>
				<textarea name="Text1" cols="60" rows="5"></textarea>
		</fieldset>
	</div>
 <!-------------------------->
 
 
  <!-- STATUS RADIO BUTTONS -->
 	<div class="status_product">
		<fieldset width: 100%;>
			<LEGEND><b>State of product:</b></LEGEND>
				<input type="radio" name="staat" value="new" checked>New              
  				<br>
  				<input type="radio" name="staat" value="secondhand">secondhand
		</fieldset>
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
