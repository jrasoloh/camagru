<?php
session_start();

include $_SERVER["DOCUMENT_ROOT"] ."/config/database.php";

$db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
try {
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'UTF8'");

	$db->query("CREATE DATABASE IF NOT EXISTS `camagru`;
		USE `camagru`;

		CREATE TABLE IF NOT EXISTS `users` (
			`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
			`login` VARCHAR(50) NOT NULL,
			`password` VARCHAR(255) NOT NULL,
			`email` VARCHAR(50) NOT NULL,
			`email_code` VARCHAR(255) NOT NULL,
			`notification` TINYINT(1) NOT NULL);

		CREATE TABLE IF NOT EXISTS `pictures` (
			`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
			`login` VARCHAR(50) NOT NULL,
			`pic_b64` MEDIUMTEXT NOT NULL);

		CREATE TABLE IF NOT EXISTS `comments` (
			`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
			`id_pic` INT NOT NULL,
			`id_login` INT NOT NULL,
			`text` TEXT NOT NULL);
		
		CREATE TABLE IF NOT EXISTS `likes` (
			`id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
			`id_pic` INT NOT NULL,
			`login` VARCHAR(50) NOT NULL);");
} catch (Exception $e) {
	die($e->getMessage());
}
?>
