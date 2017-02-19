<?php
	$data = json_decode(file_get_contents("php://input"));

	include('config.php');

	$db = new DB();
	
	$sql = "INSERT INTO `patients`(`fname`,`lname`,`age`,`gender`,`phone`,`message`)VALUES('$data->fname','$data->lname','$data->age','$data->gender','$data->phone','$data->dob','$data->message')";

	$data = $db->qryFire($sql);

	echo json_encode($data);
