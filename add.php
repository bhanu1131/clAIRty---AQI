<?php
  require_once 'include/config.php';
  if(isset($_POST['place_name'])&&isset($_POST['place_lat'])&&isset($_POST['place_long'])){
      $place = $_POST['place_name'];
      $lat = $_POST['place_lat'];
      $lang = $_POST['place_long'];
      $sql = "INSERT INTO pollution (name, lat, lang, value) VALUES ('$place', '$lat', '$lang',7)";
      if ($conn->query($sql) === TRUE) {
    		//session_unset();
        header("Location:index.php");
      } else {
          echo "Error updating record: " . $conn->error;
      }
  }
?>