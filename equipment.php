<?php
	session_start();
	require('db.php');
	$database = new Conexion();
	$conn = $database->conexion();
	$query = 'SELECT * FROM equipment';
	$rows = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Equipo</title>
</head>
<body>
	<?php require_once('partials/nav.php'); ?>

	<div class="container">
		<h1 class="mt-4 mb-4">Equipo</h1>

		<div class="agregar">
			<a class="btn btn-primary" href="new-equipment.php">Agregar</a>
		</div>

		<div class="table-equipment">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Valuacion</th>
						<th scope="col">Marca</th>
						<th scope="col">Fecha de adquisicion</th>
						<th scope="col">Disponible</th>
						<th scope="col">Editar</th>
						<th scope="col">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<!-- Iterar objetos aqui -->
					<?php foreach($rows as $row): ?>
					<tr>
						<th scope="row"><?= $row['name']; ?></th>
						<td><?= $row['valuation']; ?></td>
						<td><?= $row['comercial_brand']; ?></td>
						<td><?= $row['created_at']; ?></td>
						<td><?= $row['available'] == 1 ? "Si" : "No"; ?></td>
						<td><a class="btn btn-warning" href="edit-equipment.php?id=<?= $row['equipment_id']; ?>">Editar</a></td>
						<td><a class="btn btn-danger" href="delete.php?id=<?= $row['equipment_id']; ?>">Eliminar</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php if(isset($_SESSION['add-equip'])): ?>
		<script>
			alert("<?php echo $_SESSION['add-equip']; ?>");
		</script>
		<?php  unset($_SESSION['add-equip']); ?>
	<?php endif; ?>

	<?php if(isset($_SESSION['message-del'])): ?>
		<script>
			alert("<?php echo $_SESSION['message-del']; ?>");
		</script>
		<?php  unset($_SESSION['message-del']); ?>
	<?php endif; ?>

	<?php if(isset($_SESSION['edit-equip'])): ?>
		<script>
			alert("<?php echo $_SESSION['edit-equip']; ?>");
		</script>
		<?php  unset($_SESSION['edit-equip']); ?>
	<?php endif; ?>
</body>
</body>
</html>
