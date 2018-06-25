<?php
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => "http://www.google.com",
    CURLOPT_POST           => false,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
echo $result;
curl_close($ch);