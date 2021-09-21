<?php
session_start();
require('db.php');

if(isset($_POST['login'])) {
	if(!empty($_POST['user']) && !empty($_POST['password'])) {
		$database = new Conexion();
		$conn = $database->conexion();
		$records = $conn->prepare('SELECT * FROM users WHERE username = :user AND password = :password');
		$records->bindParam(':user', $_POST['user']);
		$records->bindParam(':password', $_POST['password']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		if(empty($results)) {
			header('Location: index.php');
			$_SESSION['message'] = 'El usuario y/o contraseñas parecen ser incorrectos.';
		} else if(count($results) > 0) {
			$_SESSION['username'] = $results['username'];
			header('Location: profile.php');
		}
	}
} else if(isset($_POST['add-equipment'])) {
	$name = $_POST['name'];
	$valuation = $_POST['valuation'];
	$brand = !empty($_POST['brand']) ? $_POST['brand'] : null;
	$des =  !empty($_POST['description']) ? $_POST['description'] : null;
	$obs =  !empty($_POST['observation']) ? $_POST['observation'] : null;
	$available = isset($_POST['available']) ? 1 : 0;
	$today = date('Y-m-d');

	$database = new Conexion();
	$conn = $database->conexion();
	try {
		$stmt = $conn->prepare('INSERT INTO equipment(name, valuation, comercial_brand, created_at, description, observation, available) VALUES(:name, :val, :brand, :date, :des, :obs, :ava)');
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':val', $valuation);
		$stmt->bindParam(':brand', $brand);
		$stmt->bindParam(':date', $today);
		$stmt->bindParam(':des', $des);
		$stmt->bindParam(':obs', $obs);
		$stmt->bindParam(':ava', $available);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['add-equip'] = $result ? 'Equipo agregado correctamente.' : 'Algo salió mal, no se pudo agregar el equipo.';
	} catch(PDOException $e) {
		$_SESSION['add-equip'] = $e->getMessage();
	}
	header('Location: equipment.php');
} else if(isset($_POST['edit-equipment'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$valuation = $_POST['valuation'];
	$brand = !empty($_POST['brand']) ? $_POST['brand'] : null;
	$des =  !empty($_POST['description']) ? $_POST['description'] : null;
	$obs =  !empty($_POST['observation']) ? $_POST['observation'] : null;

	$database = new Conexion();
	$conn = $database->conexion();

	try {
		$stmt = $conn->prepare('UPDATE equipment SET name = :name, valuation = :val, comercial_brand = :brand, description = :des, observation = :obs WHERE equipment_id = :id');
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':val', $valuation);
		$stmt->bindParam(':brand', $brand);
		$stmt->bindParam(':des', $des);
		$stmt->bindParam(':obs', $obs);
		$stmt->bindParam(':id', $id);

		$result = $stmt->execute();
		$_SESSION['edit-equip'] = $result ? 'Equipo editado correctamente.' : 'Algo salió mal, no se pudo editar el equipo.';
	} catch(PDOException $e) {
		$_SESSION['edit-equip'] = $e->getMessage();
	}
	header('Location: equipment.php');
}
?>
