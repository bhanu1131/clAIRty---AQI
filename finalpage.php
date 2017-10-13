<?php 
    require_once "include/config.php";
    $response=$conn->query("select * from pollution");
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
        <?php 		
        while($result=$response->fetch_array(MYSQLI_ASSOC)){
        ?>
            var x_ +"<?php $result['name'] ?>"; 

        <?php
        }
        ?>
		var x_sac=15;
		var x_oval=4;
		var x_gate=25;
		var x_lib=8;	
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
		
		
		
		var pinColor_sac;
		if(x_sac>=20){
			pinColor_sac = "FF0000";
		}		
		else 
		{
			pinColor_sac = "66CC00";
		}		
		var pinImage_sac = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" +pinColor_sac,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
		var pinShadow_sac = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
		var marker_sac = new google.maps.Marker({
                position: new google.maps.LatLng(23.8172948,86.4377713), 
                map: map,
                icon: pinImage_sac,
				animation: google.maps.Animation.DROP,
                shadow: pinShadow_sac
            });
			
			
		
		
		var pinColor_lib;
		if(x_lib>=20){
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
		if(x_oval>=20){
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
		if(x_gate>=20){
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
		

		
			
			
			
		

		marker_sac.addListener('click', function() {
        infowindow1.setContent(
 <?php
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
            
            '<h1><center>STUDENT ACTIVITY CENTRE</center.</h1>'+
            '</br></br><b>SAC</b> is an exciting place</br>'+
			'SO2:<td><?php echo $row['s02'];?></br>'+
			'CO2:<td><?php echo $row['co2'];?></br>'+
			'NO2:</br>'+
			
            '</div>'+
            '</div>');
			infowindow1.open(map, marker_sac);
        });
       </tr>
        <?php
    }
}
?>
		
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