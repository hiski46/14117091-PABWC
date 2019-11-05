<?php 
	class DbConnection{
		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = 'minggu-9';
		protected $connection;
		public function __construct(){
			if (!isset($this -> connection)){
				$this -> connection = new mysqli($this-> host, $this -> username, $this -> password, $this -> database);
				if (!$this -> connection) {
					echo "Tidak Datat Terhubung";
					exit;
				}
			}
			return $this -> connection;
		}
	}
 ?>