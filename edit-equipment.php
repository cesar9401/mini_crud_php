<?php
session_start();
require('db.php');

if(isset($_GET['id'])) {
	$database = new Conexion();
	$db = $database->conexion();
	try {
		$stmt = $db->prepare('SELECT * FROM equipment WHERE equipment_id = :id');
		$stmt->bindParam(':id', $_GET['id']);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($result)) {
			header('Location equipment.php');
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/new-equipment.css">
	<title>Editar Equipo</title>
</head>
<body>
	<?php require_once('partials/nav.php'); ?>

	<div class="container">
		<div>
			<h1 class="mt-4 mb-4">Editar Equipo</h1>
		</div>

		<form action="log.php" method="post">
			<div class="grid mt-4">
				<div class="item-1">
					<label for="name">Nombre</label>
					<input class="input" type="text" placeholder="nombre del equipo" name="name" value="<?= $result['name']; ?>" required>
				</div>

				<div class="item-2">
					<label for="valuation">Valuacion</label>
					<input class="input" type="number" step="any" placeholder="100.00" name="valuation" value="<?= $result['valuation'] ?>" required>
				</div>

				<div class="item-3">
					<label for="brand">Marca</label>
					<input class="input" type="text" placeholder="marca" value="<?= $result['comercial_brand']; ?>" name="brand">
				</div>

				<div class="item-4">
					<label for="description">Descripcion</label>
					<textarea name="description" placeholder="breve descripcion..."><?= $result['description']; ?></textarea>
				</div>

				<div class="item-5">
					<label for="observation">Observaciones</label>
					<textarea name="observation" placeholder="observaciones..."><?=  $result['observation']; ?></textarea>
				</div>

				<!--
				<div class="item-6 mt-2">
					<input type="checkbox" name="available" <?php //echo $result['available'] ? "checked" : "" ?>>
					<label for="available">Disponible</label>
				</div>
				-->

				<div class="item-7 mt-2">
					<input type="hidden" value="<?= $result['equipment_id']; ?>" name='id'>
					<button type="submit" class="btn btn-secondary" name="edit-equipment">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>