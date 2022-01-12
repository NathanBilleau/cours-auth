<?php

$CLIENT_ID = '';
$CLIENT_SECRET = '';

$tempCode = $_GET['code'];


$url = 'https://github.com/login/oauth/access_token';
$data = array(
    'client_id' => $CLIENT_ID,
    'client_secret' => $CLIENT_SECRET,
    'code' => $tempCode
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */
}

var_dump($result);
