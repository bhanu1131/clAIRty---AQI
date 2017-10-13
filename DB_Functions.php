<?php

class DB_Functions{
	private $db;
	function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
    function __destruct() {
 
    }
    public function storeUser($full_name,$fathers_name,$address,$mobile_no,$idproof_no,
    	$blood_group,$designation){
    	$uuid = uniqid('', true);
    	$result = mysql_query("UPDATE `user_dhobi` SET `full_name`='$full_name',`fathers_name`=
    		'$fathers_name',`address`='$address',`mobile_no`='$mobile_no',`idproof_no`=
    		'$idproof_no',`blood_group`='$blood_group',`designation`='$designation',`unique_id`=
    		'$uuid' WHERE 1");
    	//Check For Successfull Store
    	if($result){
    		$id = mysql_insert_id();
    		$result = mysql_query("SELECT * FROM users WHERE id = '$id'");
    		return mysql_fetch_array($result);

    	}else{
    		return false;
    	}
    }
    public function getUserByUsernameAndPassword($username, $password){
    	$result = mysql_query("SELECT * FROM user_dhobi WHERE username = '$username'") or die(mysql_error());
    	$no_of_rows = mysql_num_rows($result);
    	if($no_of_rows>0){
    		$result = mysql_fetch_array($result);
    		if ($password==$result['password']){
    			return result;
    		} 
    	}else{
    		return false;
    	}
    }
    public function isUserExisted($username){
    	$result = mysql_query("SELECT username from user_dhobi WHERE username = '$username'");
    	$no_of_rows = mysql_num_rows($result);
    	if ($no_of_rows > 0){
    		//user exists
    		return true;
    	}else{
    		return false;
    	}
    } 
}

?>

