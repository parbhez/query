<?php
	$con = new PDO('mysql:dbname=query;host=localhost','root','');
	$statement = $con->prepare("insert into customers(name,email) values
		('masud','masud@gmail.com'),
		('pabhez','pabhez@gmail.com'),
		('helal','helal@gmail.com'),
		('masud','masud@gmail.com'),
		('sharif','sharif@gmail.com'),
		('shibo','shibo@gmail.com'),
		('akbor','akbor@gmail.com')



	 ");

$statement->execute();
echo "data insert successful";

?>