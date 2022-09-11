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

# Start execution time of process
$time_start = microtime(true);


$path = "./KYC/";
$temp_files = scandir($path);
natsort($temp_files);

$countBUK = 0;
$countCAM = 0;
$countLDN = 0;
$countMOC = 0;
$countMOR = 0;

foreach($temp_files as $file) {
  if($file != "." && $file != ".." && $file != "Thumbs.db" && $file != ".htaccess" && $file != basename(__FILE__)) {
  	$muncity_file = file_get_contents('./KYC/'.$file);
		$muncity_json = json_decode($muncity_file, 1);
  	if (str_starts_with($file,'10-13')) {
  		$countBUK += $muncity_json['dataTotal'];
  	}elseif (str_starts_with($file,'10-18')){
  		$countCAM += $muncity_json['dataTotal'];
  	}elseif (str_starts_with($file,'10-35')){
  		$countLDN += $muncity_json['dataTotal'];
  	}elseif (str_starts_with($file,'10-42')){
  		$countMOC += $muncity_json['dataTotal'];
  	}elseif (str_starts_with($file,'10-43')){
  		$countMOR += $muncity_json['dataTotal'];
  	}
  }
}

$countTotal = $countBUK+$countCAM+$countLDN+$countMOC+$countMOR;

# End execution time of process
$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;

$data = array(
	'dateCreated' => date("d M Y h:iA"),
	'executionTime' => round($execution_time, 2).' mins',
	'dataTotal' => $countTotal,
	'data' => array(
			'bukidnon' => $countBUK,
			'camiguin' => $countCAM,
			'lanaodelnorte' => $countLDN,
			'misamisoccidental' => $countMOC,
			'misamisoriental' => $countMOR
	)
);

# Save JSON response
file_put_contents('./reports.json', json_encode($data, JSON_PRETTY_PRINT));
echo json_encode($data, JSON_PRETTY_PRINT);

# Function: sort with respect to RSBSA control No.
function sortByAlpha($a, $b) {
	return $a['control_no'] > $b['control_no'];
}

# Function: filter data with respect to value given
function str_starts_with ( $haystack, $needle ) {
  return strpos( $haystack , $needle ) === 0;
}
?>