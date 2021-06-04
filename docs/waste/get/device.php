<?php
$devices=array(
        "_MI6_" => "小米6",
        "_MI6X_" => "小米6X",
        "_MI8_" => "小米8",
        "_MI8Explorer_" => "小米8透明探索版",
        "_MI8UD_" => "小米8屏幕指纹版",
        "_MI8Lite_" => "小米8青春版",
        "_MI8SE_" => "小米8 SE",
        "_CEPHEUS_" => "小米9",
        "_CRUX_" => "小米9 Pro 5G",
        "_GRUS_" => "小米9 SE",
        "_PYXIS_" => "小米CC9/9 Lite",
        "_DAVINCI_" => "Redmi K20",
        "raphael&b=F&r=cn&n=" => "Redmi K20 Pro",
        "umi&b=F&r=cn&n=" => "小米10",
        "cmi&b=F&r=cn&n=" => "小米10 Pro",
        "vangogh&b=F&r=cn&n=" => "小米10 Lite Zoom",
        "nitrogen&b=F&r=cn&n=" => "小米Max3",
        "jason&b=F&r=cn&n=" => "小米Note3",
        "tucana&b=F&r=cn&n=" => "小米CC9 Pro",
        "toco&b=F&r=cn&n=" => "小米Note10 Lite",
        "polaris&b=F&r=cn&n=" => "小米MIX2S",
        "perseus&b=F&r=cn&n=" => "小米MIX3",
        "andromeda&b=F&r=cn&n=" => "小米MIX3 5G版",
        "lavender&b=F&r=cn&n=" => "Redmi Note 7",
        "violet&b=F&r=cn&n=" => "Redmi Note 7 Pro",
        "ginkgo&b=F&r=cn&n=" => "Redmi Note 8",
        "begonia&b=F&r=cn&n=" => "Redmi Note 8 Pro",
        "merlin&b=F&r=cn&n=" => "Redmi Note 9",
        "curtana&b=F&r=cn&n=" => "Redmi Note 9S",
        "joyeuse&b=F&r=cn&n=" => "Redmi Note 9 Pro",
        "excalibur&b=F&r=cn&n=" => "Redmi Note 9 Pro Max",
        "phoenix&b=F&r=cn&n=" => "Redmi K30 4G版",
        "picasso&b=F&r=cn&n=" => "Redmi K30 5G版",
        "lmi&b=F&r=cn&n=" => "Redmi K30 Pro",
    );





$ver = "_20.9.17_";
$str = "/miui_.*?".$ver.".*?.zip/";
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
preg_match_all($str, $result, $match);
// var_dump($match);
$counter = sizeof($match[0]);
for($i = 0; $i<$counter;$i++){
    echo $match[0][$i]; 
    echo"<br>";
}