<?php

/*$url =  "https://api.telegram.org/bot214552683:AAEpKNneVV_vrULXO_JjSpI1U8OfzDvmvCU/getupdates";
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
curl_setopt($ch, CURLOPT_URL, urlencode($url));
$response = curl_exec($ch);
curl_close($ch);

echo "<pre>";
var_dump($response);
echo "</pre>";*/

var_dump(file_get_contents("https://api.telegram.org/bot214552683:AAEpKNneVV_vrULXO_JjSpI1U8OfzDvmvCU/getupdates"));