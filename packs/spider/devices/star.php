<?php
$urls = array(
    "cn"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star&b=F&r=cn&n=",
    "cnt"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star&b=F&r=cn&n=chinatelecom",
    "cnm"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star&b=F&r=cn&n=chinamobile",
    "cnu"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star&b=F&r=cn&n=chinaunicom",
    "tw"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_tw_global&b=F&r=global&n=",
    "gb"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_global&b=F&r=global&n=",
    "eu"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_eea_global&b=F&r=eea&n=",
    "ru"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_ru_global&b=F&r=global&n=",
    "in"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_in_global&b=F&r=in&n=",
    "id"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_id_global&b=F&r=global&n=",
    "tr"=>"http://update.miui.com/updates/v1/fullromdownload.php?d=star_tr_global&b=F&r=global&n=",
);

foreach($urls as $url){
    $url = $url;
    $referer = "https://c.mi.com/oc/miuidownload/detail?guide=2";
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
    curl_setopt($curl, CURLOPT_NOBODY, true); //不返回内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
    $result = curl_exec($curl);
    preg_match_all('/star.*?tgz/m', $result, $match);
    if ($match[0] == null) {
        echo $url;
        echo "<br>";
    } else {
        $pn = $match[0][0];
        preg_match_all('/V.*?XM/m', $pn, $match);
        $ver = $match[0][0];
        echo $ver ."：". $pn;
        echo "<br>";
    };
};