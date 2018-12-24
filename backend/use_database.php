<?php
include $_SERVER["DOCUMENT_ROOT"] ."/config/database.php";

function credentials_already_used($login, $email) {
	global $db;
	$query = $db->prepare("COUNT() FROM `users` WHERE login=:login OR email=:email");
	$query->execute([
		":login" => $login,
		":email" => $email]
	);
	return $query > 0;
}

function create_user($login, $email, $password)
{
    global $db;
    $query = $db->prepare("INSERT INTO `users` VALUE(:login, :email, :password)");
    $query->execute([
        ":login" => $login,
        ":email" => $email,
        ":password" => $password]
    );
}

?>