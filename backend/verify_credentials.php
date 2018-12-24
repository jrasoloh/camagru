<?php
include $_SERVER["DOCUMENT_ROOT"] ."/config/database.php";



function email_is_valid($email) {
	return (filter_var($email, FILTER_VALIDATE_EMAIL));
}

function password_is_valid($password) {
	return (preg_match('#[a-zA-Z0-9]{8,}#',$password));
}

?>