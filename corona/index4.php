<!DOCTYPE html>
<html>
	<head>
		<title>Coronavirus Screen App</title>
		<meta charset="utf-8">
		<meta name="viewport" content="widthe=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="coronaZimDs.js"></script>

	</head>
	<script>
	    var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
	</script>
	<body>
		<!--Heading-->
		<h1>Coronavirus Screen App</h1>

		<!--logo-->
		<img src="coronavirus.png" alt="app logo" class="logo">
 
		<!--form-->
		<form id="sheets" name="sheets" class="form_body">
<div onclick="getLocation()">Load position</div>
<div id="demo">    </div>
			<!--age-->
		<fieldset>
		<legend>Age</legend>
			<input type="number" id="Age" name="Age">
		</fieldset>


			<!--Gender-->
		<fieldset>
		<legend>Gender</legend>
		
			<p>Select option</p>
				<select id="Gender" name="Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			
			
			<br>
		</fieldset>
	
		<!--Symptoms and Signs-->
		<fieldset>
			<legend>Symptoms and Signs</legend>
			
				<input type="checkbox" id="symptom1" name="symptom1" value="1">
				<label for="symptom1">Fever</label><br>
				<input type="checkbox" id="symptom2" name="symptom2" value="1">
				<label for="symptom2">Shortness of breath</label><br>
				<input type="checkbox" id="symptom3" name="symptom3" value="1">
				<label for="symptom3">Cough</label><br>
				<input type="checkbox" id="symptom4" name="symptom4" value="1">
				<label for="symptom4">Chest Pain</label><br>
				<input type="checkbox" id="symptom5" name="symptom5" value="1">
				<label for="symptom5">Headache</label><br>
				<input type="checkbox" id="symptom6" name="symptom6" value="1">
				<label for="symptom6">Fatigue</label><br>
				<input type="checkbox" id="symptom7" name="symptom7" value="1">
				<label for="symptom7">Chills</label><br>
				<input type="checkbox" id="symptom8" name="symptom8" value="1">
				<label for="symptom8">Loss of Consciousness</label><br>
				<input type="checkbox" id="symptom9" name="symptom9" value="1">
				<label for="symptom9">Diarrhea</label><br>
				<input type="checkbox" id="symptom10" name="symptom10" value="1">
				<label for="symptom10">Excessive sweating at night or day</label><br>
				<input type="checkbox" id="symptom11" name="symptom11" value="1">
				<label for="symptom11">Change in urine color</label><br>
				<input type="checkbox" id="symptom12" name="symptom12" value="1">
				<label for="symptom12">Sore Throat</label><br>
				<input type="checkbox" id="symptom13" name="symptom13" value="1">
				<label for="symptom13">General Aches/Pains</label><br>
				<input type="checkbox" id="symptom14" name="symptom14" value="1">
				<label for="symptom14">Blueish Lips and Face</label><br>
				<input type="checkbox" id="symptom15" name="symptom15" value="1">
				<label for="symptom15">Stuffy/Runny</label><br>
				<input type="checkbox" id="symptom16" name="symptom16" value="1">
				<label for="symptom16">Sneezing</label><br>
				<input type="checkbox" id="symptom17" name="symptom17" value="1">
				<label for="symptom17">Exhaustion</label><br>
		</fieldset>

		<!--PMH-->
		<fieldset>
			<legend>PMH</legend>
				<input type="checkbox" id="pmh1" name="pmh1" value="1">
				<label for="pmh1">High Blood Pressure</label><br>
				<input type="checkbox" id="pmh2" name="pmh2" value="1">
				<label for="pmh2">Diabetes</label><br>
				<input type="checkbox" id="pmh3" name="pmh3" value="1">
				<label for="pmh3">Asthma</label><br>
				<input type="checkbox" id="pmh4" name="pmh4" value="1">
				<label for="pmh4">Heart Problem</label><br>

		</fieldset>

		<!--Smoking Status-->
		
		
		<fieldset>
			<legend>Smoking Status</legend>
			
			<p>Select option</p>
				<select id="smoking" name="smoking">
				    <option value="0">Select</option>
					<option value="1">Active Smoker</option>
					<option value="1">Former Smoker</option>
					<option value="0">Never Smoked</option>
				</select>
				<br>

		</fieldset>

		<!--Travel history-->
		<fieldset>
			<legend>Travel History</legend>
				<p>Have you travelled internationally in the past 3 weeks?</p>
				<br>
				
				<select id="TravelHistory" name="TravelHistory">
					<option value="1">yes</option>
					<option value="0">no</option>
				
				</select>
				<br>
		</fieldset>

	

		<!--Traveller Contact-->
		<fieldset>
			<legend>Traveller Contact</legend>
			<p>Have you been in contact with anyone who travelled internationally?<p>
				<br>
				
				<select id="TravelContact" name="TravelContact">
					<option value="1">yes</option>
					<option value="0">no</option>
					<option value=".5">not sure</option>
				
				</select>
				<br>

		</fieldset>


		<!--Sick Person Contact-->
		<fieldset>
			<legend>Sick Person Contact</legend>
			<p>Have you been in contact with any sick person?<p>
				<br>
				
				
				<select id="SickPersonContact" name="SickPersonContact">
					<option value="1">yes</option>
					<option value="0">no</option>
					<option value=".5">not sure</option>
				
				</select>
				
				<br>

		</fieldset>


		<!--Flu Status-->
		<fieldset>
			<legend>Flu Status</legend>
			<p>Do you have a flu/cold?<p>
				<br>

				
				<select id="FluStatus" name="FluStatus">
					<option value="1">yes</option>
					<option value="0">no</option>
					<option value=".5">not sure</option>
				
				</select>
				
				
				<br>

		</fieldset>
<?php
$date = date("Y/m/d");
print('	<input type="text" id="date" name="date" value="'.$date.'" hidden>');

?>
	
		<input id="submit" name="submit" type="button" class="form_button" value="Submit" onClick="submit_form()">


		</form>
		Advice: 
		<div id="ScoreOutput">
		    
		    
		</div>
<footer>
	<p> Copyright © 2020 Coronavirus Screen App</p>
</footer>
	</body>
</html>
