<?php

// function getRec($device)
// {
//     $device = $device;
//     $url = "https://www.miui.com/download-" . $device . ".html";
//     $referer = "https://www.miui.com/download.html";
//     $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($curl, CURLOPT_REFERER, $referer);
//     curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
//     curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
//     curl_setopt($curl, CURLOPT_NOBODY, true); //不返回内容
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
//     $result = curl_exec($curl);
//     preg_match_all('/http.*?zip/m', $result, $match);
//     var_dump($match);
// }

// $deviceURL = array(
//     "lavender" => "https://www.miui.com/download-356.html#508",
//     "violet" => "https://www.miui.com/download-356.html#521",
// );

// $devices = array("lavender", "violet");

// foreach ($devices as $device) {
//     getRec($device);
// }


$url = "https://www.miui.com/download-356.html#521";
$referer = "https://www.miui.com/download.html";
$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_REFERER, $referer);
curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
$result = curl_exec($curl);
preg_match_all('/http.*?zip/m', $result, $match);
var_dump($match);
//var_dump($result);