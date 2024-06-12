<?php

include('database connection.php');
include('function3.php');

if(isset($_POST["id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM deudas WHERE id = :id"
	);
	$result = $statement->execute(

		array(':id'	=>	$_POST["id"])
		
	    );
}

?>