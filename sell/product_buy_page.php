<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	
	
	generateTitle("Order complete");
	generateHeader();
?>
<html lang="en">
	<head>
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
		<div class ="div.general" >
			<LEGEND><b>Product includes a working:</b></LEGEND>
			  
			  	<div class="6u 12u$(small)">
			  		<div class ="div.general" >
			  		<li>
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
				<select style='width: 160px !important; min-width: 160px; max-width: 160px;'>
				<option value='Select a brand'>Pick a brand</option>
				<option value='Samsung'>Samsung</option>
				<option value='Nokia'>Nokia</option>
				<option value='Apple'>Apple</option>
				</select>
 <!-------------------------->
 
 <!-- PRICE TEXTBOX -->
			<LEGEND><b>Price:</b></LEGEND>
			<li><input type="text" style="width:108px;"><br></li>

 <!-------------------------->
 
  <!-- DICRIPTION TEXTBOX -->

			<LEGEND><b>Product discription:</b></LEGEND>
				<textarea name="Text1" style="width:500px;" cols="40" rows="5"></textarea>
	
 <!-------------------------->
 
 <!-- STATUS RADIO BUTTONS -->

			<LEGEND><b>State of product:</b></LEGEND>
			<div class="4u 12u$(small)">
				<input type="radio" id="new" name="state">
				<label for="new">New</label>
			</div>
			<div class="4u$ 12u$(small)">
				<input type="radio" id="secondhand" name="state">
				<label for="secondhand">Second Hand</label>
			</div>
				</div>
			
										<form method="post" action="#">
								<div class="row uniform">
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div>
							</form>

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
		div.general
		{
		position: absolute
		left: 50px	
		}
	</style>
	 <!-------------------------->
</html>