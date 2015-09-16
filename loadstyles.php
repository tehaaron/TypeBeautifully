<?php

include 'db.php';

try {
	$dbConnection = new PDO("mysql:unix_socket=/opt/lampstack-5.3.16-0/mysql/tmp/mysql.sock;dbname=$dbname", $user, $pass);
	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt  = $dbConnection->query('SELECT * FROM style');

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);

} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>