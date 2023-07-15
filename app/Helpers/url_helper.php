<?php


function encryptUrl($data)
{
    $key = 'MYs3cR3tK3y#2023';
    $iv = '1234567890123456'; // IV dengan panjang 16 byte (sesuaikan jika diperlukan)
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    return rawurlencode(base64_encode($encrypted));
}

function decryptUrl($encryptedData)
{
    $key = 'MYs3cR3tK3y#2023';
    $decodedData = base64_decode(rawurldecode($encryptedData));
    $iv = '1234567890123456'; // IV dengan panjang 16 byte (sesuaikan jika diperlukan)
    return openssl_decrypt($decodedData, 'AES-256-CBC', $key, 0, $iv);
}


?>