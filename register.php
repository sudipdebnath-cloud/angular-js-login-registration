<?php
//register.php

include ( 'db_connection.php' );

$form_data = json_decode(file_get_contents("php://input"));

$message = "";

$validation_error = "";

if(empty($form_data->name)){
	$error[] = "Name is required";
}else{
	$data[':name'] = $form_data->name;
}

if(empty($form_data->email)){
	$error[] = "Email is required";
}else{
	if(!filter_var($form_data->email, FILTER_VALIDATE_EMAIL)){
		$error[] = "Invalid email format";
	}else{
		$data[':email'] = $form_data->email;
	}
}

if(empty($form_data->password)){
	$error[] = "Password is required";
}else{
	$data[':password'] = password_hash($form_data->password, PASSWORD_BCRYPT);
}


if(empty($error)){

	$query1 = " SELECT * FROM ng_user WHERE email = ? ";
	$statement1 = $connect->prepare($query1);
	$statement1->execute([$form_data->email]);
	if($statement1->rowCount() > 0){
		$validation_error = "Email already registered";
	}else{
		$query2 = " INSERT INTO ng_user (name, email, password) VALUES ( :name, :email, :password ) ";
		$statement2 = $connect->prepare($query2);
		if($statement2->execute($data)){
			$message = 'Registration Completed';
		}
	}

	
}else{
	$validation_error = implode(", ", $error);
}

$output = array(
	'error' => $validation_error,
	'message' => $message
);

echo json_encode($output);
?>