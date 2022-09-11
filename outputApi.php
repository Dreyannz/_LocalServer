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
date_default_timezone_set('Asia/Manila');
error_reporting(0);
ini_set('display_errors', 0);
header('Content-Type: application/json');

$time_start = microtime(true);
$username = 'rfo10admin.christian';
$password = 'rcu4dm1N@10';


$ch = curl_init("https://ffrs1.da.gov.ph/");
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

curl_setopt($ch, CURLOPT_URL, 'https://ffrs1.da.gov.ph/Login/check');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, 'https://ffrs1.da.gov.ph/Reports/get_encoder_data?r_type=daily&r_month='.date('n').'%2C'.date('Y'));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'draw=1&columns%5B0%5D%5Bdata%5D=control_no&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=rsbsa_no&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=false&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=fullname&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=false&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=3&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=false&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=location&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=encoder_agency&columns%5B5%5D%5Bname%5D=&columns%5B5%5D%5Bsearchable%5D=true&columns%5B5%5D%5Borderable%5D=false&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=encoder_fullname&columns%5B6%5D%5Bname%5D=&columns%5B6%5D%5Bsearchable%5D=true&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B7%5D%5Bdata%5D=7&columns%5B7%5D%5Bname%5D=&columns%5B7%5D%5Bsearchable%5D=true&columns%5B7%5D%5Borderable%5D=false&columns%5B7%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B7%5D%5Bsearch%5D%5Bregex%5D=false&start=0&length=5000&search%5Bvalue%5D=&search%5Bregex%5D=false&mode=0');
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);
curl_close($ch);

unlink('cookie.txt');

$json_data = json_decode($response, 1);

$newwArr = array();
foreach ($json_data['data'] as $dataKey) {
  if ($dataKey['fullname']!='TOTAL') {
    $mergeData = array(
      "name" => $dataKey['fullname'],
      "image" => substr(Abbreviate($dataKey['fullname']), 0, 4).'.jpg',
      "outputTotal" => $dataKey['TOTAL'],
      "output" => $dataKey[date('M d, Y D')]
    );
    $outputs[] = $mergeData;
  }
}
usort($outputs, 'sortByOutput');
echo json_encode($outputs,JSON_PRETTY_PRINT);

function Abbreviate($words){
  $wordsEX = explode(" ", $words);
  $acronym = "";
  foreach ($wordsEX as $w) {
    $acronym .= $w[0];
  }
  return $acronym;
}
function sortByOutput($a, $b) {
    return $a['output'] < $b['output'];
}
?>