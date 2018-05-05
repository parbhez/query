<?php
	$con = new PDO('mysql:dbname=query;host=localhost','root','');
	$statement = $con->prepare("
		create table customers(
			id serial,
			name varchar(30),
			email varchar(40),
			age int(3)


		)
		");

$statement->execute();
echo "table create successful";

?>