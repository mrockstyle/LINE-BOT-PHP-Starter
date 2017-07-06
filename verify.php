<?php
$access_token = 'X1Mr/EejQy/ZI+rXbZQFG5uUs+j/dkaRw9fRw58T/zq2kFRe/T8KE3PyHPq2xShBs5FXZd/euK8AUOksUQdCy5KRtw0MNhpwDRAf1rbB8VPk3TeTgeK4MCV5NSwFZRTcrLul/XAgdup/Tdn1J9PKPAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;