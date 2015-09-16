<?php

include 'db.php';

try {
	$dbConnection = new PDO("mysql:unix_socket=/opt/lampstack-5.3.16-0/mysql/tmp/mysql.sock;dbname=$dbname", $user, $pass);
	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	#Prepare the query
	$dbstylename = $_POST['name'];
	$result = $dbConnection->prepare("SELECT * FROM style where stylename like :dbstylename");
	#bind
	$result->bindParam(":dbstylename", $dbstylename, PDO::PARAM_STR);
	#execute
	$result->execute();
	$row = $result->fetch(PDO::FETCH_BOTH);
	echo json_encode($row);

} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>