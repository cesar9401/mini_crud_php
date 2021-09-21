<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/new-equipment.css">
	<title>Agregar Equipo</title>
</head>
<body>
	<?php require_once('partials/nav.php'); ?>
	<div class="container">
		<div>
			<h1 class="mt-4 mb-4">Agregar Equipo</h1>
		</div>

		<form action="log.php" method="post">
			<div class="grid mt-4">
				<div class="item-1">
					<label for="name">Nombre</label>
					<input class="input" type="text" placeholder="nombre del equipo" name="name" required>
				</div>

				<div class="item-2">
					<label for="valuation">Valuacion</label>
					<input class="input" type="number" step="any" placeholder="100.00" name="valuation" required>
				</div>

				<div class="item-3">
					<label for="brand">Marca</label>
					<input class="input" type="text" placeholder="marca" name="brand">
				</div>

				<div class="item-4">
					<label for="description">Descripcion</label>
					<textarea name="description" placeholder="breve descripcion..."></textarea>
				</div>

				<div class="item-5">
					<label for="observation">Observaciones</label>
					<textarea name="observation" placeholder="observaciones..."></textarea>
				</div>

				<div class="item-6 mt-2">
					<input type="checkbox" name="available">
					<label for="available">Disponible</label>
				</div>
				<div class="item-7 mt-2">
					<button type="submit" class="btn btn-secondary" name="add-equipment">Agregar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>