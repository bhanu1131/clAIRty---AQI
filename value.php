<?php
$connection = mysqli_connect("localhost","root","","cse")or die("Error " . mysqli_error($connection));
$id = $_POST["id"];
if (!empty($_POST)){
 $query = "SELECT * FROM pollution";
 $result = mysqli_query($connection, $query)or die('Error in connection');
 if($result){
   $response["success"] = 1;
   $response["message"] = "You Details Are Updated";
   $response["values"] = array();
   while($row =mysqli_fetch_assoc($result)){
     $response["values"][] = $row;
   }
       die(json_encode($response));
 }else{
   $response["success"] = 0;
   $response["message"] = "Error";
   die(json_encode($response));
 }
}
mysqli_close($connection);
 ?>
