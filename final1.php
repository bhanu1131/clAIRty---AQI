<?php
require_once "include/config.php";
    $response=$conn->query("SELECT * FROM pollution");
	$con=mysqli_connect("localhost","root","","cse");
		$sql="SELECT value FROM pollution WHERE id=11";
		if ($result=mysqli_query($con,$sql))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_SAC=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
		$sql1="SELECT value FROM pollution WHERE id=2";
		if ($result=mysqli_query($con,$sql1))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_gate=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
		$sql2="SELECT value FROM pollution WHERE id=13";
		if ($result=mysqli_query($con,$sql2))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_oval=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql3="SELECT value FROM pollution WHERE id=14";
		if ($result=mysqli_query($con,$sql3))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_lib=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        
        width: 100%;
		height: 750px;
       }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AirCheck: IIT(ISM) Dhanbad's Air Quality Network</title>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 23.8144, lng: 86.4412};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
             
		
              	var x_SAC = <?php echo $x_SAC; ?>;
		var x_oval=<?php echo $x_oval; ?>;
		var x_gate=<?php echo $x_gate; ?>;
		var x_lib=<?php echo $x_lib; ?>;
		

       

		var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
            'south west of the nearest large town, Alice Springs; 450&#160;km '+
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
            'features of the Uluru - Kata Tjuta National Park. Uluru is '+
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
            'Aboriginal people of the area. It has many springs, waterholes, '+
            'rock caves and ancient paintings. Uluru is listed as a World '+
            'Heritage Site.</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
		
		var infowindow1 = new google.maps.InfoWindow({
          
        });
		
		
		
		var pinColor_SAC;
		if(x_SAC==12){
			pinColor_SAC = "FF0000";
		}		
		else 
		{
			pinColor_SAC = "66CC00";
		}		
		var pinImage_SAC = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_SAC,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_SAC = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
		
		
		var marker_SAC = new google.maps.Marker({
                position: new google.maps.LatLng(23.8172948,86.4377713), 
                map: map,
                icon: pinImage_SAC,
				animation: google.maps.Animation.DROP,
                shadow: pinShadow_SAC
            });
			
			
		
		
		var pinColor_lib;
		if(x_lib==12){
			pinColor_lib = "FF0000";
		}
		else 
		{
			pinColor_lib = "66CC00";
		}
		var pinImage_lib = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_lib,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_lib = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_lib = new google.maps.Marker({
                position: new google.maps.LatLng(23.8148174,86.4424836), 
                map: map,
                icon: pinImage_lib,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_lib
            });
		
		
		
		
		var pinColor_oval;
		if(x_oval==12){
			pinColor_oval = "FF0000";
		}
		else 
		{
			pinColor_oval = "66CC00";
		}
		var pinImage_oval = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_oval,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_oval = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_oval = new google.maps.Marker({
                position: new google.maps.LatLng(23.8139151,86.441393), 
                map: map,
                icon: pinImage_oval,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_oval
            });
			
			
			
			
		var pinColor_gate;
		if(x_gate==12){
			pinColor_gate = "FF0000";
		}
		else 
		{
			pinColor_gate = "66CC00";
		}
		var pinImage_gate = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_gate,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_gate = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_gate = new google.maps.Marker({
                position: new google.maps.LatLng(23.8092426,86.4426446), 
                map: map,
                icon: pinImage_gate,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_gate
            });
		

		
			
			
			
		

		marker_SAC.addListener('click', function() {
        infowindow1.setContent(
            '<h1><center>STUDENT ACTIVITY CENTRE</center.</h1>'+
            '</br></br><b>SAC</b> is an exciting place</br>'+
			'SO2:</br>'+
			'CO2:</br>'+
			'NO2:</br>'+
			
            '</div>'+
            '</div>');
			infowindow1.open(map, marker_sac);
        });
		
		marker_lib.addListener('click', function() {
        infowindow1.setContent(
            '<h1><center>CENTRAL LIBRARY</center.</h1>'+
            '</br></br><b>Central Library</b> is the destination of all the MAGGUS</br>'+
			'SO2:</br>'+
			'CO2:</br>'+
			'NO2:</br>'+
			
            '</div>'+
            '</div>');
			infowindow1.open(map, marker_lib);
			
        });
		
		marker_oval.addListener('click', function() {
        infowindow1.setContent(
            '<h1><center>Oval Grounds</center.</h1>'+
            '</br></br><b>Oval Grounds</b> is the center of IIT(ISM)</br>'+
			'SO2:</br>'+
			'CO2:</br>'+
			'NO2:</br>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_oval);
        });
		
		marker_gate.addListener('click', function() {
		infowindow1.setContent('<h1><center>MAIN GATE</center.</h1>'+
           '</br></br><b>Main Gate</b> is the entrance to hell</br>'+
			'SO2:</br>'+
			'CO2:</br>'+
			'NO2:</br>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_gate);
		
        });
		
		google.maps.event.addListener(map, 'click', function() {
		infowindow1.close();
  });

		
		
      }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_RNd5YWwEuPMbExpeGQmRRIXkVJmI6VY&callback=initMap">
    </script>
  </body>
</html>