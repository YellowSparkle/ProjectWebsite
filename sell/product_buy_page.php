<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Order complete");
	generateHeader();
?>
<<<<<<< HEAD

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="../utility/assets/css/main.css" />

	<head>


	</head>

	<body>
 <!--Working parts checkboxes--->
            <div class="row 200%">
                <div class="helemaallinksaapje"></div>
                <div class="linksffs">
                    <LEGEND><b>Includes a working:</b></LEGEND>
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
			</div>
			
		
<!-------------------------->


<!-- SELECT BRAND DROP DOWN-->
			<br>
			<br>
			<br>
			<br>
		<?php	
		
		switch ($_GET['category']) {
			case 'phones':
				phones();
				break;
				
			case 'audio':
				audio();
				break;
				
			case 'computers':
				computers();
				break;
				
			case 'radio':
				radio ();
				break;
				
			case 'television':
				television();
				break;

				
		}?>	
     <!--   <div class="rechtsffs">
            <div class="table-wrapper">
				<LEGEND><b>Pick a brand:</b></LEGEND>
				<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
				<option selected disabled hidden value='Select a brand'>Pick a brand</option>
				<option value='Samsung'>Samsung</option>
				<option value='Nokia'>Nokia</option>
				<option value='Apple'>Apple</option>
				<option value='Blackberry'>Blackberry</option>
				<option value='OnePlus'>OnePlus</option>
				<option value='Motorola'>Motorola</option>
				</select>-->
				
		
 <!-------------------------->
 
 <!-- PRICE TEXTBOX -->
			
			<li><b>Price:</b><input type="text" style="width:108px;"><br></li>

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
            </div></form>
            </div> </div>
  <!-- DICRIPTION TEXTBOX -->

                <div class="linksnu">
			<LEGEND><b>Product discription:</b></LEGEND>
				<textarea name="Text1" style="width:500px;" cols="40" rows="5"></textarea>
				<br />
				<form action="Order_Sent.php" method="post">
					<input type="submit" name="submit" value="Submit"/>
				</form>
					
	</div>
 <!-------------------------->

 <!--------------------------> 
</body>


<?php 
	function phones() {
		echo "
			<div class='rechtsffs'>
	      	<div class='table-wrapper'>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
			<option selected disabled hidden value='Select a brand'>Pick a brand</option>
			<option value='Samsung'>Samsung</option>
			<option value='Nokia'>Nokia</option>
			<option value='Apple'>Apple</option>
			<option value='Blackberry'>Blackberry</option>
			<option value='OnePlus'>OnePlus</option>
			<option value='Motorola'>Motorola</option>
			<option value='Other'>other</option>
			</select>";
	}			
	
	function audio() {
		echo "
			<div class='rechtsffs'>
	        <div class='table-wrapper'>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
			<option selected disabled hidden value='Select a brand'>Pick a brand</option>
			<option value='Phillips'>Phillips</option>
			<option value='Sony'>Sony</option>
			<option value='Sennheizer'>Sennheizer</option>
			<option value='Bosch'>Bosch</option>
			<option value='Beats'>Beats</option>
			<option value='Other'>Other</option>
			</select>";
	}
	
	function computers() {
		echo "
			<div class='rechtsffs'>
	    	<div class='table-wrapper'>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
			<option selected disabled hidden value='Select a brand'>Pick a brand</option>
			<option value='Intel'>Intel</option>
			<option value='AMD'>AMD</option>
			<option value='Nvidia'>Nvidia</option>
			<option value='Kingston'>Kingston</option>
			<option value='Alienware'>Alienware</option>
			<option value='Imac'>Imac</option>
			<option value='Other'>Other</option>
			</select>";
	}
	
	function radio() {
		echo "
			<div class='rechtsffs'>
	    	<div class='table-wrapper'>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
			<option selected disabled hidden value='Select a brand'>Pick a brand</option>
			<option value='Audiosonic'>Audiosonic</option>
			<option value='AKAI'>AKAI</option>
			<option value='Other'>Other</option>
			</select>";
	}
	
	function television () {
		echo "
			<div class='rechtsffs'>
	    	<div class='table-wrapper'>
			<LEGEND><b>Pick a brand:</b></LEGEND>
			<select style='width: 300px !important; min-width: 300px; max-width: 300px;'>
			<option selected disabled hidden value='Select a brand'>Pick a brand</option>
			<option value='Sony'>Sony</option>
			<option value='Samsung'>Samsung</option>
			<option value='Phillips'>Phillips</option>
			<option value='LG'>LG</option>
			<option value='Panasonic'>Panasonic</option>
			<option value='Other'>Other</option>
			</select>";
	}
	
?>
