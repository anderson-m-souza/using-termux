<?php

$url = 'https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=11007';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$json = json_decode($response, true);
foreach ($json['drinks'][0] as $key => $val) {
	if ($val !== null) {
		$name = str_replace('str', '', $key);
		echo PHP_EOL . $name . ': ' . $val . PHP_EOL;
	}
}
