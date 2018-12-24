<?php
function auth($login, $passwd) {
	if ($login == "" || $passwd == "")
		return false;
	$passwd_file = unserialize(file_get_contents("../private/passwd"));
	foreach ($passwd_file as $val) {
		if ($login == $val["login"] ) {
			if (hash("whirlpool", $passwd) == $val["passwd"])
				return true;
		}
	}
	return false;
}
?>
