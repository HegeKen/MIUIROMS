<?php
$ver = "_20.11.25_";
$str = "/miui.*?".$ver.".*?.zip/";
$url = "http://xiaomifirmwareupdater.com/data/devices/miui12.yml";
$referer = "http://xiaomifirmwareupdater.com/miui12";
$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_REFERER, $referer);
curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
$result = curl_exec($curl);
var_dump($result);
preg_match_all($str, $result, $match);
$counter = sizeof($match[0]);
echo "<ol>";
for($i = 0; $i<$counter;$i++){
    echo "<li>";
    echo $match[0][$i]; 
    echo"</li>";
}
echo "</ol>";