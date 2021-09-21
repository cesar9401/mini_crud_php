<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/index.css">
	<title>login</title>
</head>
<body>
	<div class="container mt-4">
		<form action="log.php" method="post">
			<div class="grid-container">
				<div class="item item-center item-image">
					<img src="assets/img/lnr-user.svg" alt="login">
				</div>
			</div>

			<div class="grid-container">
				<div class="item item-center">
					<label class="mb-1" for="user">usuario</label>
					<input class="input" type="text" placeholder="user" name="user" required>
				</div>
			</div>

			<div class="grid-container">
				<div class="item item-center">
					<label class="mt-2" for="password">password</label>
					<input class="input" type="password" placeholder="password" name="password" required>
				</div>
			</div>

			<div class="grid-container">
				<div class="item item-center">
					<button class="btn btn-primary mt-1" type="submit" name="login">log in</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Colocar mensaje aqui -->
	<?php session_start(); ?>
	<?php if(isset($_SESSION['message'])): ?>
		<script>
			alert("<?php echo $_SESSION['message']; ?>");
		</script>
		<?php  unset($_SESSION['message']); ?>
	<?php endif; ?>
</body>
</html>