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

$json = file_get_contents('allData.txt');
$json_data = json_decode($json,true);

$sample = $_GET['q'];

$duplicates[] = $sample;
foreach ($json_data as $key) {
	if ($key['rsbsa1']==$sample) {
		if (!in_array($key['rsbsa2'],$duplicates)) {
			$duplicates[] = $key['rsbsa2'];
		}
	}
	if ($key['rsbsa2']==$sample) {
		if (!in_array($key['rsbsa1'],$duplicates)) {
			$duplicates[] = $key['rsbsa1'];
		}
	}
}
sort($duplicates);
$data = array(
	'rsbsa_no' => $sample,
	'duplicates' => $duplicates
);
echo json_encode($data, JSON_PRETTY_PRINT);


?>