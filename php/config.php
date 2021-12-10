<?php
session_start();
$db_password = $_ENV["mysql_password"];
$con = new mysqli('db', 'arispontcrates_user', $db_password, 'arispontcrates');
if ($con->connect_error) {
    header('Location: connexion.php?erreur=bdderror');
	exit();
}
?>
