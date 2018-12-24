<?php
    include $_SERVER["DOCUMENT_ROOT"] ."/config/database.php";
    include $_SERVER["DOCUMENT_ROOT"] ."/config/setup.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Camagru</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
        <h1>
            CAMAGRU
        </h1>
		<form action="/backend/create_user.php" method="post">
			<input type="text" name="login" placeholder="login" required><br><br>
		  <input type="email" name="email" placeholder="email" required><br><br>
		  <input type="password" name="password" placeholder="password" required><br><br>
		  <input type="submit" value="Submit">
		</form>
	</body>

	<footer>
	</footer>
</html>
