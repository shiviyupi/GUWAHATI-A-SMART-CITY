<?php


class facebook {
	public $table_name = 'facebook';


	function __construct(){
		/* database configuration */
		$dbServer = 'localhost';
		$dbUsername = 'root';
		$dbPassword = 'root';
		$dbName = 'feedback_system';


		/* connect database */
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connection = $con;
		}
	}


	function checkFBUserData($user){
$prev_query = mysqli_query($this->connection,"SELECT * FROM ".$this->table_name." WHERE facebook_id = '".$facebook['id']."'") or die(mysql_error($this->connection));
		if(mysqli_num_rows($prev_query)>0){
			$update = mysqli_query($this->connection,"UPDATE $this->table_name SET facebook_id = '".$facebook['id']."', first_name = '".$facebook['first_name']."', last_name = '".$facebook['last_name']."', email = '".$facebook['email']."', gender = '".$facebook['gender']."', picture = '".$facebook['picture']['data']['url']."' WHERE facebook_id = '".$facebook['id']."'");
		}else{
			$insert = mysqli_query($this->connection,"INSERT INTO $this->table_name SET facebook_id = '".$facebook['id']."', first_name = '".$facebook['first_name']."', last_name = '".$facebook['last_name']."', email = '".$facebook['email']."', gender = '".$facebook['gender']."', picture = '".$facebook['picture']['data']['url']."'");
		}

		
		$query = mysqli_query($this->connection,"SELECT * FROM $this->table_name WHERE facebook_id = '".$facebook['id']."'");
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
?>