<!DOCTYPE html>
<html>
<head>
	<title>Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=key&libraries=places"></script>
  	<style type="text/css">
    	#mymap {
      		border:1px solid black;
      		width: 100%;
      		height: 500px;
    	}
  	</style>
</head>
<body>
  <div id="mymap"></div>
  <script>
    var locations = <?php print_r(json_encode($locations)) ?>;

    var mymap = new GMaps({
      el: '#mymap',
      lat: 23.022505,
      lng: 72.571362,
      zoom:5
    });

    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.city,
	      click: function(e) {
	        alert(value.city);
	      }
	    });
   });
  </script>
</body>
</html>