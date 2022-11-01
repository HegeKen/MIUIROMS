<?php

echo "</br>";
$i = 22100;
//  22306       22307
while ($i <= 22335) {
    getTitle($i);
    $i++;
}
//getTitle($i);

function getTitle($i)
{
    $i = $i;
    $url = "http://www.miui.com/archiver/?tid-" . $i . ".html";
    $referer = "http://www.miui.com/archiver/?tid-1331.html";
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
    $result = curl_exec($curl);
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    preg_match_all('/<title>(.*?)<\/title>/m', $result, $match);
    if ($match[1][0] == "提示信息") {
        //http://www.miui.com/thread-1338-1-1.html
        echo "http://www.miui.com/thread-" . $i . "-1-1.html </br>";
        //var_dump($match);
        echo "<hr>";
    } else {
        echo "";
    }

}

// $url = "http://www.miui.com/archiver/?tid-155.html";
// $referer = "http://www.miui.com/archiver/?tid-1331.html";
// $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_REFERER, $referer);
// curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
// curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
// $result = curl_exec($curl);
// $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
// preg_match_all('/<title>(.*?)<\/title>/m', $result, $match);
// var_dump($match);
