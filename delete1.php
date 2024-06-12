<?php

include('database connection.php');
include('function.php');

if(isset($_POST["id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM personal WHERE id = :id"
	);
	$result = $statement->execute(

		array(':id'	=>	$_POST["id"])
		
	    );
}

?>