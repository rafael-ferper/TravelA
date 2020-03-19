<?php
	
	class db{

		//host
		private $host = 'localhost';

		//user
		private $user = 'root';

		//password
		private $password = '';

		//database
		private $database = 'travel_a';


		public function connect_mysql(){

			//create connection
			$con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

			//adjust the communication charset between the application and the database
			mysqli_set_charset($con, 'utf8');

			//check for connection error
			if(mysqli_connect_errno()){
				echo 'Error when trying to connect to the MySql database: '.mysqli_connect_error();
			}

			return $con;
		}
	}

?>