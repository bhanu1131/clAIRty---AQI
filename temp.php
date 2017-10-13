<?php

if (isset($_POST['tag']) && $_POST['tag'] != '')
{
		$tag = $_POST['tag'];
		//Include Database Handler
		require_once 'include/DB_Functions.php';
		$db = new DB_Functions();
		//Response Array
		$response = array("tag" => $tag, "success" => 0, "error" => 0);
		//Check For Tag Type
		if ($tag == 'login'){
			//Request Type is check login
			$username = $_POST['username'];
			$password = $_POST['password'];
			//Check For User
			$user = $db->getUserByUsernameAndPassword($username, $password);
			if($user!=false){
				// user found
            	// echo json with success = 1
            	$response["success"] = 1;
            	$response["msg"] = "You have been sucessfully login";
            	$response["user"]["id"]= $user["id"];
            	$response["user"]["full_name"] = $user["full_name"];
            	$response["user"]["fathers_name"] = $user["fathers_name"];
            	$response["user"]["address"] = $user["address"];
            	$response["user"]["mobile_no"] = $user["mobile_no"];
            	$response["user"]["idproof_no"] = $user["idproof_no"];
            	$response["user"]["blood_group"] = $user["blood_group"];
            	$response["user"]["designation"] = $user["designation"];
            	$response["user"]["unique_id"] = $user["unique_id"];
            	echo json_encode($response);
			}else{
				// user not found
            	// echo json with error = 1
            	$response["success"] = 0;
            	$response["msg"] = "Incorrect email or password!";
            	echo json_encode($response);
			}
		}else if($tag == 'update'){
			$full_name = $_POST['full_name'];
			$fathers_name = $_POST['fathers_name'];
	        $address = $_POST['address'];
	        $mobile_no = $_POST['mobile_no'];
	        $idproof_no = $_POST['idproof_no'];
	        $blood_group = $_POST['blood_group'];
	        $designation = $_POST['designation'];
	        $subject = "Update";
	        $message = "Hello $full_name,You have sucessfully update your details.";
	        $user = $db->storeUser($full_name,$fathers_name,$address,$mobile_no,$idproof_no,
    						$blood_group,$designation);
	        if($user){
	        	$response["success"] = 1;
	        	$response["user"]["full_name"] = $user["full_name"];
            	$response["user"]["fathers_name"] = $user["fathers_name"];
            	$response["user"]["address"] = $user["address"];
            	$response["user"]["mobile_no"] = $user["mobile_no"];
            	$response["user"]["idproof_no"] = $user["idproof_no"];
            	$response["user"]["blood_group"] = $user["blood_group"];
            	$response["user"]["designation"] = $user["designation"];
            	$response["user"]["unique_id"] = $user["unique_id"];
            	echo json_encode($response);

	        }else{
	        	// user failed to Update
	        	$response["error"] = 1;
                $response["error_msg"] = "JSON Error occured in Updation";
                echo json_encode($response);
	        }
		}else{
			$response["error"] = 3;
	        $response["error_msg"] = "JSON ERROR";
	        echo json_encode($response);
		}
}else{
	echo "Washut Login API";
}
?>