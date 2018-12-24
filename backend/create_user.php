<?php
include $_SERVER["DOCUMENT_ROOT"] ."/config/database.php";
include $_SERVER["DOCUMENT_ROOT"] ."/backend/verify_credentials.php";
include $_SERVER["DOCUMENT_ROOT"] ."/backend/use_database.php";
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Camagru</title>
		<link rel="stylesheet" href="index.css">
	</head>
	<body>

		Your login is <?php echo $_POST["login"]; ?><br>
		Your email is <?php echo $_POST["email"]; 
		if ( email_is_valid($_POST["email"]) )
			echo "<br><br> L'email est valide. <br><br>";
		else
			echo "<br><br> NON T ES MOCHE. <br><br>";
        if ( password_is_valid($_POST["password"]) )
            echo "<br><br> PASSWORD OK <br><br>";
        else
            echo "<br><br> TROP NUL TON PSSWD <br><br>";
			?>
			

	</body>
</html>

<?php
    if ( credentials_already_used($_POST["login"], $_POST["email"]) )
//        send back to homepage with signup error message
        ;
    else
        create_user($_POST["login"], $_POST["email"], $_POST["password"]);
?>

<!--function create_user($login, $email, $password) {
	global $db;
	$query = $db->prepare("INSET INTO `users` VALUE(:login, :email, :passwd)");
	$query->execute([
		":value" => $value,
		":login" => $login]);
}-->