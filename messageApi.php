<?php
#
#    ____                                       
#   / __ \________  __  ______ _____  ____  ____
#  / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
# / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
#/_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
#                /____/                         
#     Script Author: Adrian Jann F. Octat


# Prevent Error Reporting
error_reporting(0);
ini_set('display_errors', 0);

# Set response format to json
header('Content-Type: application/json');

$function = $_GET['f'];
$status = $_GET['s'];
$message = $_GET['m'];
if ($function=="w") {
	if ($status) {
		$data = array(
			"status" => $status,
			"message" => $message
		);
	}else{
		$data = array(
			"status" => false,
			"message" => $message
		);
	}
	file_put_contents('message.json', json_encode($data, JSON_PRETTY_PRINT));
}else{
	$message_file = file_get_contents('message.json');
  	$data = json_decode($message_file, 1);
}

# Print JSON response
echo json_encode($data, JSON_PRETTY_PRINT);
?>