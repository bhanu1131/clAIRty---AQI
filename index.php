<?php
  require_once 'include/config.php';
  if(isset($_POST['place'])){
      $place = $_POST['place'];
      $SO2 = $_POST['so2'];
      $CO2 = $_POST['co2'];
      $PM_2 = $_POST['pm2'];
      $PM_10 = $_POST['pm10'];
      $level = 1;
      $value = ((($SO2-3.91)*5)+(($CO2-4.77)*4)+(($PM_2-1.326)*7)+(($PM_10-2.537)*6))/22;
      if($value<0){
        $level = 3;
      }else if($value<=5){
        $level = 7;
      }else{
        $level = 12;
      }
      $sql = "UPDATE pollution SET value='$level',s02='$SO2',pm_2='$PM_2',pm_10='$PM_10',co2='$CO2' WHERE 	name='$place'";
      if ($conn->query($sql) === TRUE) {
    		//session_unset();
        header("Location:index.php");
      } else {
          echo "Error updating record: " . $conn->error;
      }
  }
?>

<html>
<head>
  <title>Pollution-2016 | IIT(ISM) Dhanbad</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" >
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <script src="jquery/jquery-3.0.0.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" style="vertical-align: middle; padding:20px;display: table; padding-bottom:0px;">
    <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
      <div align="center">
        <div class="container">
          <div class="jumbotron">
            <h1>IIT(ISM) DHANBAD</h1>
            <p>Welcome To Pollution Control Portal.</p>
          </div>
        </div>
      </div>
  </div>
  </div>
  <div class="container" style="padding-top:0px; margin-top:0px; margin:0 auto;">
  <center>
  <div class="col-lg-6">
  <h1 class="cenetr">Update The Pollution</h1>
  <div class="content">
    <div class="well well bs-component">
            <form class="form-horizontal" method="post" action="index.php">
                <fieldset>
                    <div class="form-group">
                        <label for="place" class="col-lg-2 control-label">Place</label>
                        <div class="col-lg-9">
                            <select class="form-control selcls" id="place" name="place">
                              <?php 
                                define('DB_HOST', 'localhost');
                                define('DB_NAME', 'cse');
                                define('DB_USER','root');
                                define('DB_PASSWORD','');
                                $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
                                $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
                                $response=mysql_query("select name from pollution");
                                while($result=mysql_fetch_array($response)){
                                  echo "hello";
                                  echo '<option>'.$result['name'].'</option>';
                                }
                              ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='so2' class="col-lg-2 control-label">SO2</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="so2" placeholder="SO2" name="so2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='pm2' class="col-lg-2 control-label">PM 2.5</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="pm2" placeholder="PM 2.5" name="pm2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='pm10' class="col-lg-2 control-label">PM 10</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="pm10" placeholder="PM 10" name="pm10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='co2' class="col-lg-2 control-label">CO2</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="co2" placeholder="CO2" name="co2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
  </div>
  </div>
   <div class="col-lg-6">
<!-- <h1 class="cenetr">Insert Place</h1>
  <div class="content">
    <div class="well well bs-component">
            <form class="form-horizontal" method="post" action="add.php">
                <fieldset>
                    
                    <div class="form-group">
                        <label for='place_name' class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="place_name" placeholder="Place Name" name="place_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='place_lat' class="col-lg-2 control-label">Lattitude</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="place_lat" placeholder="Lattitude" name="place_lat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='place_long' class="col-lg-2 control-label">Longitude</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="place_long" placeholder="Longitude" name="place_long">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
  </div> -->
  </div>
</div>
</center>
</body>
