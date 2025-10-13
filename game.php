<?php
$link = "https://village.elyng.com/api/v2/ppob";
$api_key = "oBqC3SXjivKtfudIpJQ9";
$private_key = "lASv3BoGb-BeE8g-l3zTClGeX1S-aFtnDUI-BvCFN";
$action = "cek-akun";
$id = "ID Layanan";
$target = "target";
$payment_curl = $link.'?api_key='.$api_key.'&private_key='.$private_key.'&action='.$action.'&id='.$id.'&target='.$target;

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $payment_curl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_REFERER => $_SERVER['SERVER_NAME'],
));
$response = curl_exec($curl);
curl_close($curl);
$data = Json_decode($response, true);

$nickname = $data['data']['pesan'];