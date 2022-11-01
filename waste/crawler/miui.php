<?php

// $url = "http://192.168.10.132/weekly/logs/week-431-CN.html";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_REFERER, $referer);
// curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
// $result = curl_exec($curl);
// preg_match_all('/http.*?zip/m', $result, $match);
// //var_dump($match);
// if ($match[0] == null) {
// } else {
//     $versions = explode("_", $match[0][0]);
//     if ($versions[1] == $deviceInfo[$device][2] && str_split($versions[2], 1) !="V") {
//         echo $match[0][0];
//         array_splice($deviceInfo[$device],6,0,$match[0][0]);
//     } else {
//     }
// }






function getROM($week,$j){
$url = "http://192.168.10.132/weekly/logs/week-".$week."-CN.html";
$referer = "http://www.miui.com/shuaji-393.html";
$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_REFERER, $referer);
curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
$result = curl_exec($curl);
preg_match_all('/http.*?PICASSO.*?zip/m', $result, $match);
$matches = $match[0];
echo "<li>".implode(" ",$matches)."</li>";
}

echo "<ol>";
for($i=431,$j=1;$i<=451;$i++,$j++){
    getROM($i,$j);
}
echo "</ol>";