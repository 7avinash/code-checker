<?php

function run($code, $input) {


$url = 'http://api.hackerrank.com/checker/submission.json';
$key = 'hackerrank|731675-360|aeca13ace8181db3c139cc8de690049c9cd68dfe';
$query = array();

$query['source'] = urlencode($code);
$query['testcases'] = urlencode(json_encode(array($input)));
$query['lang'] = 5;
$query['api_key'] = urlencode($key);

$q = array();
foreach ($query as $k => $v) {
    $q[] = "$k=$v";
}
$q = implode("&", $q);

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $q);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

$json = json_decode($response);

if (isset($json->result->stdout) or isset($json->result->stderr)) {

$output = $json->result->stdout;

$output2 = $json->result->stderr;

$out = $output[0];
$error =  $output2[0]; 
    
return $out."<br />".$error;

   
    
}

}



?>