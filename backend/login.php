<?php
include "auth.php";

session_start();

if ($_GET["login"] == "" || $_GET["passwd"] == "") {
	echo("ERROR\n");
	exit;
}
if (auth($_GET["login"], $_GET["passwd"]) == true) {
	$_SESSION["logged_on_user"] = $_GET["login"];
	echo("OK\n");
}
else {
	$_SESSION["logged_on_user"] = "";
	echo("ERROR\n");
}
?>
