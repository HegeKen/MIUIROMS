<?php

//Error Page :50,192,301,370,483,
$deviceCNPage = array("319", "320", "332", "327", "330", "343", "345", "346", "353", "357", "358", "331", "352", "355", "321", "336", "323", "337", "342", "354", "329", "349", "328", "339", "338", "340", "348", "351", "326", "341", "335", "356", "360");

function getCNRecFile($pageID)
{
    $deviceNames = array(
        "MI5S" => "小米5S", //319
        "MI5SPlus" => "小米5S Plus", //320
        "MI5X" => "小米5X", //332
        "MI5C" => "小米5C", //327
        "MI6" => "小米6", //330
        "MI6X" => "小米6X", //343
        "MI8" => "小米8", //345
        "MI8Explorer" => "小米8探索版", //345
        "MI8UD" => "小米8屏幕指纹版", //345
        "MI8SE" => "小米8 SE", //346
        "MI8Lite" => "小米8青春版", //353
        "CEPHEUS" => "小米9/透明版", //357
        "GRUS" => "小米9 SE", //358
        "MIMAX2" => "小米Max 2", //331
        "MIMAX3" => "小米Max 3", //352
        "MIPLAY" => "小米Play", //355
        "MINote2" => "小米Note 2", //321
        "MINote3" => "小米Note 3", //336
        "MIMIX" => "小米MIX", //323
        "MIMIX2" => "小米MIX 2", //337
        "MIMIX2S" => "小米MIX 2S", //342
        "MIMIX3" => "小米MIX 3", //354
        "MIPAD3" => "小米平板3", //329
        "MIPAD4" => "小米平板4/Plus", //349



        "HM4X" => "红米4X", //328
        "HM5" => "红米5", //339
        "HM5A" => "红米5A", //338
        "HM5Plus" => "红米5 Plus", //340
        "HM6" => "红米6", //348
        "HM6A" => "红米6A", //348
        "HM6Pro" => "红米6 Pro", //351
        "ONCLITE" => "Redmi 7", //348
        "PINE" => "Redmi 7A", //348
        "HMNote4" => "红米Note 4X(MTK平台)", //326
        "HMNote4X" => "红米Note 4X(高通平台)", //326
        "HMNote5" => "红米Note 5", //341
        "HMNote5ALITE" => "红米Note 5A 标准版", //335
        "HMNote5A" => "红米Note 5A 高配版", //335
        "LAVENDER" => "Redmi Note 7", //356
        "VIOLET" => "Redmi Note 7 Pro", //356
        "BEGONIA" => "Redmi Note 8 Pro",
        "DAVINCI" => "Redmi K20", //360
        "RAPHAEL" => "Redmi K20 Pro", //360
    );
    $lastURL = "";
    $url = "http://www.miui.com/download-" . $pageID . ".html";
    $referer = "http://en.miui.com/a-234.html";
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    //curl_setopt($curl, CURLOPT_HEADER, true);        //返回头信息
    //curl_setopt($curl, CURLOPT_NOBODY, true);        //不返回内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
    $result = curl_exec($curl);
    preg_match_all('/http.*?zip/m', $result, $match);
    if ($match[0] == null) {
        //echo "Error @".$pageID."=>".$pageID.$url."</br>";
    } else {
        foreach ($match[0] as $match) {
            $device = explode("_", $match);
            $deviceName = $deviceNames[$device[1]];
            $version = $device[2];
            $parts = substr($version, 0, 1);
            if (strcmp($parts, "V") != 0 && strcmp($lastURL, $match) != 0) {
                echo $deviceName . " ".$version." "."卡刷包: " . $match . "</br>";
                echo $deviceName . " ".$version." "."线刷包:  </br>";
                $lastURL = $match;
            }
        }
    }
}
echo " </br>";
$url = "http://www.miui.com/download-241.html";
foreach ($deviceCNPage as $pageID) {
    getCNRecFile($pageID);
}
