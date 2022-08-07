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

$geocode = $_GET['q'];
if (file_exists('./KYC/'.$geocode.'.json')) {
	unlink('./KYC/'.$geocode.'.json');
	$result = true;
} else {
	$result = false;
}
$info_data = array(
	'result' => $result
);

# Print JSON response
echo json_encode($info_data, JSON_PRETTY_PRINT);
?>