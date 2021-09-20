<?php
	session_start();

	require('db.php');

	if(!empty($_POST['user']) && !empty($_POST['password'])) {
		$records = $conn->prepare('SELECT * FROM users WHERE username = :user AND password = :password');
		$records->bindParam(':user', $_POST['user']);
		$records->bindParam(':password', $_POST['password']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

		if(count($results) > 0) {
			$_SESSION['username'] = $results['username'];
			header('Location: profile.php');
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
	<link rel="stylesheet" href="assets/css/index.css">
	<title>login</title>
</head>
<body>
	<div class="container mt-4">
		<form action="index.php" method="post">
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
					<button class="btn btn-primary mt-1" type="submit">log in</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>