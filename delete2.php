<?php

include('database connection.php');
include('function2.php');

if(isset($_POST["id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM ccamas WHERE id = :id"
	);
	$result = $statement->execute(

		array(':id'	=>	$_POST["id"])
		
	    );
}

?>