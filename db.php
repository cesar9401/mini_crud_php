<?php
	$server = 'localhost:3306';
	$user = 'cesar31';
	$password = 'Huevos94C';
	$database = 'equipment_management';

	try {
		$conn = new PDO("mysql:host=$server;dbname=$database;", $user, $password);
	} catch(PDOException $e) {
		die('Connection failed: ' . $e->getMessage());
	}
?>