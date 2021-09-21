<?php
	class Conexion {
		private $server = 'localhost:3306';
		private $user = 'cesar31';
		private $password = 'Huevos94C';
		private $database = 'equipment_management';
		private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
		protected $conn;

		public function conexion() {
			try {
				$this->conn = new PDO("mysql:host=$this->server;dbname=$this->database;", $this->user, $this->password, $this->options);
				return $this->conn;
			} catch(PDOException $e) {
				die('Connection failed: ' . $e->getMessage());
			}
		}

		public function close() {
			$this->conn = null;
		}
	}
?>