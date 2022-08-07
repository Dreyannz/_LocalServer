<?php
/*
    ____                                       
   / __ \________  __  ______ _____  ____  ____
  / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
 / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
/_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                /____/                         
     Script Author: Adrian Jann F. Octat
*/
//error_reporting(0);
// ini_set('display_errors', 0);
header('Content-Type: application/json');
date_default_timezone_set("Asia/Manila");

$query = $_GET['q'];
$munCode = substr($query,0,8);


$time_start = microtime(true);


$data_file = file_get_contents('deduplication.json');
$data_json = json_decode($data_file, 1);

$allData = array();
foreach ($data_json['data'] as $value) {
	if (str_starts_with($value['rsbsa_no'], $query)) {
	    $allData[] = $value;
	}
}
usort($allData, 'sortByAlpha');

$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;

$new_data = array(
	'generationTime' => date("d M Y h:iA"),
   'executionTime' => round($execution_time, 2).' mins',
	'dataTotal' => count($allData),
	'data' => $allData
);
echo json_encode($new_data, JSON_PRETTY_PRINT);


function str_starts_with ( $haystack, $needle ) {
  return strpos( $haystack , $needle ) === 0;
}

function sortByAlpha($a, $b) {
	return $a['rsbsa_no'] > $b['rsbsa_no'];
}
?>