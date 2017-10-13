<?php

class DB_Connect{
	//Constructor
	function __construct(){

	}
	//Destructor
	function __destruct(){

	}
	//Connecting to Database
	public function connect(){
		require_once 'include/config.php';
		$con  = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		mysql_select_db(DB_DATABASE);
		//Return Databse Handler
		return $con;
	}
	//Closing Database Connection
	public function close(){
        mysql_close();
    }
}

?>