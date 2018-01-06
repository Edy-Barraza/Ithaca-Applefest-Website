<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Apple Fest Directions</title>
	<link rel="stylesheet" type="text/css" href="../styles/all.css" media="all"/>
</head>

<body>
<header>
	<h2><a href = "../index.php"><img src = "../images/apple.png" alt="apple logo"> 35th Annual <br>
	Apple Harvest Festival</a></h2>
	<h1>DIRECTIONS</h1>

	<!-- Desktop directions disappear on mobilesizes and appear at desktop sizes -->
	<table id = "directionsTable">
		<tr>
			<td class = "text">
				<h4>Location and Parking</h4>
				<p>
					Apple Fest will take place in the Ithaca Commons. Parking for the festival will be available in the Green, Seneca and Cayuga street garages for $5. For more Apple Harvest information, visit downtownithaca.com or check out our Facebook Event Page.
				</p>
				<p class="source">
					This map is a screenshot taken from Google Maps. You can see the map live <a id="eventlink" href="https://www.google.com/maps/dir/''/google+maps+ithaca+commons/@42.4395677,-76.5670329,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x89d0819c8632d9e5:0x7e9b07ab2aa65eb6!2m2!1d-76.496993!2d42.439589"> here</a>.
				</p>
			</td>
			<td><img src= "../images/map_pin.png" alt="map of ithaca commons"></td>

		</tr>
		<tr>
			<td class = "text">
				<h4>Buses from Cornell University</h4>
				<p>
				Route 10, Route 30, Route 70, Route 71
				</p>
				<p class="source">
					This map is a screenshot taken from the TCAT website. You can see the map live <a class="eventlink" href="https://www.tcatbus.com/learn/system-map/"> here</a>.
				</p>
			</td>
			<td><img src= "../images/cornell_routes.png" alt="cornell bus routes"></td>

		</tr>
		<tr>
			<td class = "text">
				<h4>From Ithaca College</h4>
				<p>
				Route 11, Route 15, Route 17
				</p>
				<p class="source">
					This map is a screenshot taken from the TCAT website. You can see the map live <a class="eventlink" href="https://www.tcatbus.com/learn/system-map/"> here</a>.
				</p>
			</td>
			<td><img src= "../images/ithaca_college_routes.png" alt="ithaca college bus routes"></td>

		</tr>
	</table>

	<!-- Mobile directions disappear on desktop sizes and appear at mobile sizes -->
	<div id="mobileDirections">
		<h4>Location and Parking</h4>
		<p>
			Apple Fest will take place in the Ithaca Commons. Parking for the festival will be available in the Green, Seneca and Cayuga street garages for $5. For more Apple Harvest information, visit downtownithaca.com or check out our Facebook Event Page.
		</p>
		<p class="source">
			This map is a screenshot taken from Google Maps. You can see the map live <a class="eventlink" href="https://www.google.com/maps/dir/''/google+maps+ithaca+commons/@42.4395677,-76.5670329,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x89d0819c8632d9e5:0x7e9b07ab2aa65eb6!2m2!1d-76.496993!2d42.439589"> here</a>.
		</p>
		<img src= "../images/map_pin.png" alt="map of ithaca commons">

		<h4>Buses from Cornell University</h4>
		<p>
		Route 10, Route 30, Route 70, Route 71
		</p>
		<p class="source">
			This map is a screenshot taken from the TCAT website. You can see the map live <a class="eventlink" href="https://www.tcatbus.com/learn/system-map/"> here</a>.
		</p>
		<img src= "../images/cornell_routes.png" alt="cornell bus routes">

		<h4>From Ithaca College</h4>
		<p>
		Route 11, Route 15, Route 17
		</p>
		<p class="source">
			This map is a screenshot taken from the TCAT website. You can see the map live <a class="eventlink" href="https://www.tcatbus.com/learn/system-map/"> here</a>.
		</p>
		<img src= "../images/ithaca_college_routes.png" alt="ithaca college bus routes">

	</div>

	<p>
		More information about buses and bus stops can be found from the <a href="https://transitapp.com/" class ="eventlink">Transit mobile app</a>.
	</p>
</header>

<?php include("../includes/navigation.php"); include("../includes/footer.php"); ?>



</body>
</html>
