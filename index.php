<?php

?>

<!DOCTYPE html>
<html>

<head>
	<title>Fuzzy Search</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='Description' content='fuzzy search mockup' />
	<meta name="author" content="liu tong">
	<link rel="shortcut icon" href="favicon.ico">

	<script type='text/javascript' src='js/lib/jquery-1.7.2.min.js'></script>
	<link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
	<script type='text/javascript' src='js/lib/bootstrap.min.js'></script>

	<link href="css/style.css" rel="stylesheet">
		  <style type="text/css">
    #mapdiv {
        width:80%; height:50%; margin:auto;
    }
  </style>
</head>

<body >
	<h1 class="text-center">Fuzzy Search</h1>
	<div class='container'>
		
		<div class="form-group">
			<label for="indirizzoinput">indirizzo</label>
			<input type="text" class="form-control" id="indirizzoinput" placeholder="inserire un posto">
		</div>
		<button id="conferma"  class="btn btn-default">Conferma</button>
		<button id="debug"  class="btn btn-default pull-right">Debug</button>
		
	</div>

	<div id="mapdiv"></div>

	<div class='container'>
	<div class="debuglog well"></div>
	</div>




<div id="footer">
	<div class="container">
 
		<div class="text-muted text-center"> <a href="tables.php">Fuzzy Search with imbeded Levenshtein Distance Algorithm(JS)</a></div>
	</div>
</div>

</body>
<script type='text/javascript' src='js/levenshtein.js'></script>
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
 <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());
 
    var lonLat = new OpenLayers.LonLat( -0.1279688 ,51.5077286 )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );
 
    var zoom=16;
 
    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
 
    markers.addMarker(new OpenLayers.Marker(lonLat));
 
    map.setCenter (lonLat, zoom);
  </script>
</html>