<?php
session_start();
require('db.php');
if(isset($_GET['id'])) {
	$database = new Conexion();
	$db = $database->conexion();
	try {
		$stmt = $db->prepare('DELETE FROM equipment WHERE equipment_id = :id');
		$stmt->bindParam(':id', $_GET['id']);
		$result = $stmt->execute();
		$_SESSION['message-del'] = $result ? 'Equipo eliminado del sistema.' : 'Algo salió mal, intente más tarde.';
	} catch(PDOException $e) {
		$_SESSION['message-del'] = $e->getMessage();
	}
	header('Location: equipment.php');
}
?>