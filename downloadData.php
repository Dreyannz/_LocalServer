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

# Set default timezone to Asia/Manila
date_default_timezone_set("Asia/Manila");

# Fetch variables
$keyword = $_GET['q'];

# Declare variables (FFRS Credentials)
include_once('_config.php');

# Start execution time of process
$time_start = microtime(true);

# cURL process to fetch CSRF Token and FFRS cookies
$ch = curl_init('https://ffrs'.$ffrsVersion.'.da.gov.ph/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
$response = curl_exec($ch);

preg_match_all('/name="csrf_ffrs_token2" value="(.*)"/', $response, $inputs);
$token = $inputs[1][0];
$data = array(
	"username" => $username,
	"password" => $password,
	"csrf_ffrs_token2" => $token,
);

# cURL process to Login at FFRS 
curl_setopt($ch, CURLOPT_URL, 'https://ffrs'.$ffrsVersion.'.da.gov.ph/Login/check');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, 'https://ffrs'.$ffrsVersion.'.da.gov.ph/Validate/get_data');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'draw=2&columns%5B0%5D%5Bdata%5D=control_no&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=rsbsa_no&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=false&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=fullname&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=false&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=3&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=false&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=location&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=encoder_agency&columns%5B5%5D%5Bname%5D=&columns%5B5%5D%5Bsearchable%5D=true&columns%5B5%5D%5Borderable%5D=false&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=encoder_fullname&columns%5B6%5D%5Bname%5D=&columns%5B6%5D%5Bsearchable%5D=true&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B7%5D%5Bdata%5D=7&columns%5B7%5D%5Bname%5D=&columns%5B7%5D%5Bsearchable%5D=true&columns%5B7%5D%5Borderable%5D=false&columns%5B7%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B7%5D%5Bsearch%5D%5Bregex%5D=false&start=0&length=50000&search%5Bvalue%5D='.$keyword.'&search%5Bregex%5D=false&mode=0');
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);
curl_close($ch);

# Remove FFRS cookies
unlink('cookie.txt');

# JSON Parse data from FFRS
$data_json = json_decode($response, 1);
$data = $data_json['data'];

# Sort data with respect to RSBSA control No.
usort($data, 'sortByAlpha');

# End execution time of process
$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;

# Parsing data to array
$filtered_data = array();
foreach ($data as $dataKey) {
	$minimal_data = array(
		'rsbsa_no' => $dataKey['rsbsa_no'],
		'control_no' => $dataKey['control_no'],
		'encoder_agency' => $dataKey['encoder_agency'],
		'encoder_fullname' => $dataKey['encoder_fullname'],
		'fullname' => $dataKey['fullname'],
		'first_name' => $dataKey['first_name'],
		'middle_name' => $dataKey['middle_name'],
		'last_name' => $dataKey['last_name'],
		'ext_name' => $dataKey['ext_name'],
		'sex' => $dataKey['sex'],
		'birthday' => $dataKey['birthday'],
		'date_created' => $dataKey['date_created'],
		'rffa2_cashout' => $dataKey['rffa2_cashout'],
		'duplicated' => $dataKey['duplicated']
	);
	$filtered_data[] = $minimal_data;
}
$new_data = array(
	'dateCreated' => date("d M Y h:iA"),
  'executionTime' => round($execution_time, 2).' mins',
	'dataTotal' => count($filtered_data),
	'data' => $filtered_data);

# Save JSON response
file_put_contents('KYC/'.$keyword.'.json', json_encode($new_data, JSON_PRETTY_PRINT));
echo json_encode($new_data, JSON_PRETTY_PRINT);

# Function: sort with respect to RSBSA control No.
function sortByAlpha($a, $b) {
	return $a['control_no'] > $b['control_no'];
}
?>