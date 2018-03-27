<?php
/*chats*/
/*am using pdo for my database queries*/

include 'db_connection.php';

function countries($last_id = null)
{
	$chlimit 	= 5;
	if ($last_id !== null)
	{
		$condition = "WHERE id < $last_id";
	}else
	{
		$condition = "";
	}
	/*query*/
		$sql="
		SELECT id,name FROM 
			world_country $condition
		ORDER BY id DESC LIMIT $chlimit
			";	

	$stmt = db()->prepare($sql);
	$stmt->execute();
	// $countries = $stmt->fetchAll();

	return $stmt->fetchAll();
}

	$countries = countries();
	/*sort the data from the lowest to the highest*/
	sort($countries);
// echo "<pre>";
// var_dump($countries);
// exit();