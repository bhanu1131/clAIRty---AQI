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


$sql4="SELECT value FROM pollution WHERE id=3";
		if ($result=mysqli_query($con,$sql4))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_isl=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql5="SELECT value FROM pollution WHERE id=4";
		if ($result=mysqli_query($con,$sql5))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_nlhc=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql6="SELECT value FROM pollution WHERE id=5";
		if ($result=mysqli_query($con,$sql6))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_health=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql7="SELECT value FROM pollution WHERE id=7";
		if ($result=mysqli_query($con,$sql7))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_heritage=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql8="SELECT value FROM pollution WHERE id=8";
		if ($result=mysqli_query($con,$sql3))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_main=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql9="SELECT value FROM pollution WHERE id=9";
		if ($result=mysqli_query($con,$sql9))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_sbi=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql10="SELECT value FROM pollution WHERE id=10";
		if ($result=mysqli_query($con,$sql10))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_rose=$row[0];
    			}
  			// Free result set
  			mysqli_free_result($result);
		}
$sql11="SELECT value FROM pollution WHERE id=12";
		if ($result=mysqli_query($con,$sql11))
 	 	{
  		// Fetch one and one row
  			while ($row=mysqli_fetch_row($result))
    			{
				$x_col=$row[0];
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
		var x_main=<?php echo $x_main; ?>;
		var x_rose = <?php echo $x_rose; ?>;
		var x_isl=<?php echo $x_isl; ?>;
		var x_col=<?php echo $x_col; ?>;
		var x_sbi=<?php echo $x_sbi; ?>;
		var x_heritage=<?php echo $x_heritage; ?>;
		var x_health=<?php echo $x_health; ?>;
		var x_nlhc=<?php echo $x_nlhc; ?>;
						

       

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
		else if(x_SAC==7)
		{		
			pinColor_SAC="0000FF";
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
                position: new google.maps.LatLng(23.8172259,86.4375291), 
                map: map,
                icon: pinImage_SAC,
				animation: google.maps.Animation.DROP,
                shadow: pinShadow_SAC
            });
			
			
		
		
		var pinColor_lib;
		if(x_lib==12){
			pinColor_lib = "FF0000";
		}
		else if(x_lib==7)
		{		
			pinColor_lib="0000FF";
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
		else if(x_oval==7)
		{		
			pinColor_oval="0000FF";
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
		else if(x_gate==7)
		{		
			pinColor_gate="0000FF";
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
		



	var pinColor_isl;
		if(x_isl==12){
			pinColor_isl = "FF0000";
		}
		else if(x_isl==7)
		{		
			pinColor_isl="0000FF";
		}
		else 
		{
			pinColor_isl = "66CC00";
		}
		var pinImage_isl = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_isl,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_isl = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_isl = new google.maps.Marker({
                position: new google.maps.LatLng(23.819923,86.4345999), 
                map: map,
                icon: pinImage_isl,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_isl
            });
		

	var pinColor_main;
		if(x_main==12){
			pinColor_main = "FF0000";
		}
		else if(x_main==7)
		{		
			pinColor_main="0000FF";
		}
		else 
		{
			pinColor_main = "66CC00";
		}
		var pinImage_main = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_main,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_main = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_main = new google.maps.Marker({
                position: new google.maps.LatLng(23.815131,86.4414378), 
                map: map,
                icon: pinImage_main,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_main
            });
		

	var pinColor_rose;
		if(x_rose==12){
			pinColor_rose = "FF0000";
		}
		else if(x_rose==7)
		{		
			pinColor_rose="0000FF";
		}
		else 
		{
			pinColor_rose = "66CC00";
		}
		var pinImage_rose = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_rose,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_rose = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_rose = new google.maps.Marker({
                position: new google.maps.LatLng(23.8133016,86.4449681), 
                map: map,
                icon: pinImage_rose,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_rose
            });
		

	var pinColor_col;
		if(x_col==12){
			pinColor_col = "FF0000";
		}
		else if(x_col==7)
		{		
			pinColor_col="0000FF";
		}
		else 
		{
			pinColor_col = "66CC00";
		}
		var pinImage_col = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_col,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_col = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_col = new google.maps.Marker({
                position: new google.maps.LatLng(23.810313,86.4408497), 
                map: map,
                icon: pinImage_col,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_col
            });
		


	var pinColor_sbi;
		if(x_sbi==12){
			pinColor_sbi = "FF0000";
		}
		else if(x_sbi==7)
		{		
			pinColor_sbi="0000FF";
		}
		else 
		{
			pinColor_sbi = "66CC00";
		}
		var pinImage_sbi = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_sbi,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_sbi = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_sbi = new google.maps.Marker({
                position: new google.maps.LatLng(23.8117962,86.4420941), 
                map: map,
                icon: pinImage_sbi,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_sbi
            });




	var pinColor_health;
		if(x_health==12){
			pinColor_health = "FF0000";
		}
		else if(x_health==7)
		{		
			pinColor_health="0000FF";
		}
		else 
		{
			pinColor_health = "66CC00";
		}
		var pinImage_health = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_health,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_health = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_health = new google.maps.Marker({
                position: new google.maps.LatLng(23.8117976,86.4390882), 
                map: map,
                icon: pinImage_health,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_health
            });



	var pinColor_heritage;
		if(x_heritage==12){
			pinColor_heritage = "FF0000";
		}
		else if(x_heritage==7)
		{		
			pinColor_heritage="0000FF";
		}
		else 
		{
			pinColor_heritage = "66CC00";
		}
		var pinImage_heritage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_heritage,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_heritage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_heritage = new google.maps.Marker({
                position: new google.maps.LatLng(23.8145422,86.4410816), 
                map: map,
                icon: pinImage_heritage,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_heritage
            });




	var pinColor_nlhc;
		if(x_nlhc==12){
			pinColor_nlhc = "FF0000";
		}
		else if(x_nlhc==7)
		{		
			pinColor_nlhc="0000FF";
		}
		else 
		{
			pinColor_nlhc = "66CC00";
		}
		var pinImage_nlhc = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_nlhc,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_nlhc= new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
			
      		
        var marker_nlhc = new google.maps.Marker({
                position: new google.maps.LatLng(23.8163447,86.4392834), 
                map: map,
                icon: pinImage_nlhc,
				animation: google.maps.Animation.DROP,
				shadow: pinShadow_nlhc
            });
			

		
			
			
			
		

		marker_SAC.addListener('click', function() {
        infowindow1.setContent(
            '<h1><center>STUDENT ACTIVITY CENTRE</center.</h1>'+
            '</div>'+
            '</div>');
			infowindow1.open(map, marker_SAC);
        });

		
		marker_lib.addListener('click', function() {
        infowindow1.setContent('<h1><center>CENTRAL LIBRARY</center.</h1>'+			
            '</div>'+
            '</div>');
			infowindow1.open(map, marker_lib);
			
        });
		
		marker_oval.addListener('click', function() {
        infowindow1.setContent(
           '<h1><center>OVAL GARDENS</center.</h1>'+
			
            '</div>'+
            '</div>');
        		infowindow1.open(map, marker_oval);
        });
		
		marker_gate.addListener('click', function() {
		infowindow1.setContent('<h1><center>MAIN GATE</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_gate);
		
        });
		

	marker_isl.addListener('click', function() {
		infowindow1.setContent('<h1><center>DHAIYA GATE(GATE 3)</center.</h1>'+
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_isl);
		
        });

	marker_rose.addListener('click', function() {
		infowindow1.setContent('<h1><center>ROSALINE HOSTEL</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_rose);
		
        });

	marker_col.addListener('click', function() {
		infowindow1.setContent('<h1><center>HOUSING COLONY</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_col);
		
        });

	marker_sbi.addListener('click', function() {
		infowindow1.setContent('<h1><center>SBI ATM</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_sbi);
		
        });

	marker_health.addListener('click', function() {
		infowindow1.setContent('<h1><center>HEALTH CENTRE</center.</h1>'+			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_health);
		
        });

	marker_heritage.addListener('click', function() {
		infowindow1.setContent('<h1><center>HERITAGE BUILDING</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_heritage);
		
        });

	marker_nlhc.addListener('click', function() {
		infowindow1.setContent('<h1><center>NLHC</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_nlhc);
		
        });

	marker_main.addListener('click', function() {
		infowindow1.setContent('<h1><center>MAIN CANTEEN</center.</h1>'+
			
            '</div>'+
            '</div>');
        infowindow1.open(map, marker_main);
		
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