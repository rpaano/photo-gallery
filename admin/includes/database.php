<?php 

	require_once("new_config.php");

	class Database
	{

		public $connection;

		function __construct(){
			$this->open_db_connection();
		}
		
		public function open_db_connection(){

			//$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASWORD,DB_NAME);

			$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASWORD,DB_NAME);

			if ($this->connection->connect_errno) {
				die("connection Failed" . $this->connection->connect_errno);
			}
		}

		public function query($sql){

			$result = $this->connection->query($sql);

			$this->confirm_query($result);

			return $result;
		}

		private function confirm_query($result){

			if (!$result) {
				die("Query Failes". $this->connection->error);
			}
		}

		public function escape_string($string){

			$escape_string = $this->connection->real_escape_string($string);

			return $escape_string;
		}

		public function the_insert_id()
		{
			return $this->connection->insert_id();
		}
	}

	$database = new Database();
 ?>