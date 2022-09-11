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

$province = substr($keyword,3,2);
$municipality = substr($keyword,6,2);

$data = array(
	"start" => "0",
	"length" => "20000",
	"search[value]" => $wordValue,
	"search[regex]" => "false",
	"load_code" => "all",
	"rsbsanum" => "",
	"prov_code" => $province,
	"mun_code" => $municipality,
	"barangay" => $barangay,
);

curl_setopt($ch, CURLOPT_URL, 'https://ffrs'.$ffrsVersion.'.da.gov.ph/Checking/get_farmers');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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
	$fullname = strtoupper($dataKey['first_name'].' '.$dataKey['middle_name'].' '.$dataKey['surname']);
	if (str_starts_with($dataKey['rsbsa_no'],$keyword)||str_starts_with($dataKey['control_no'],$keyword)||strpos($fullname, $keyword) !== false) {
		$extension = '';
		$cashout = 'Not Verified';
		if ($dataKey['sex']=='1') {
			$gender = 'MALE';
		}else{
			$gender = 'FEMALE';
		}
		if (strlen($dataKey['ext_name']) != 0) {
			$extension = ' '.$dataKey['ext_name'];
		}
		if ($dataKey['rffa2_cashout']==1) {
			$cashout = 'Verified';
		}
		$minimal_data = array(
			'rsbsa_no' => $dataKey['rsbsa_no'],
			'control_no' => $dataKey['control_no'],
			'encoder_agency' => strtoupper($dataKey['encoder_agency']),
			'encoder_fullname' => strtoupper($dataKey['encoder_fullname']),
			'fullname' => strtoupper($dataKey['first_name'].' '.$dataKey['middle_name'].' '.$dataKey['surname'].''.$extension),
			'img' => $dataKey['file_picture'],
			'first_name' => strtoupper($dataKey['first_name']),
			'middle_name' => strtoupper($dataKey['middle_name']),
			'last_name' => strtoupper($dataKey['surname']),
			'ext_name' => strtoupper($dataKey['ext_name']),
			'sex' => $gender,
			'birthday' => date("M. d, Y", strtotime($dataKey['birthday'])),
			'date_created' => date("M. d, Y h:iA", strtotime($dataKey['date_created'])),
			'encoder_fullname_updated' => strtoupper($dataKey['encoder_fullname_updated']),
			'date_updated' => date("M. d, Y h:iA", strtotime($dataKey['date_updated'])),
			'rffa2_cashout' => $cashout
		);
		$filtered_data[] = $minimal_data;
	}
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

# Function: filter data with respect to value given
function str_starts_with ( $haystack, $needle ) {
  return strpos( $haystack , $needle ) === 0;
}
?>