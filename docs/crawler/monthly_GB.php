<?php
header('Content-Type: text/html; charset=utf-8');

//当前受支持的小米机型；
$smndg = array("capricorn", "natrium", "tiffany", "meri", "sagit", "wayne", "dipper", "sirius", "platina", "ursa", "equuleus", "cepheus", "grus", "pyxis", "vela", "laurus", "lotus", "oxygen", "nitrogen", "scorpio", "jason", "cappu", "clover", "lithium", "chiron", "polaris", "perseus");
//当前俄罗斯版；
$smndr = array("santoni", "riva", "vince", "cereus", "cactus", "sakura", "onclite", "pine", "mido", "whyred", "ugg", "ugglite", "lavender", "violet", "davinci", "raphael");

$smndi = array();
//Global
//gemini capricorn sagit lithium chiron polaris perseus dipper platina cepheus grus scorpio jason hydrogen helium oxygen natrium lotus ysl mido whyred lavender santoni ugglite ugg rosy vince rolex riva land kenzo kate prada cactus cereus 
//Russian
//dipper platina cepheus polaris ysl whyred lavender 

//EEA
//cepheus grus
function getROMGB($device)
{
    $deviceName = array(
        "cancro_global" => "小米3W(电信联通版)/小米4国际版",
        "gemini_global" => "小米5国际版",
        "capricorn_global" => "小米5S国际版",
        "natrium_global" => "小米5S Plus国际版",
        "sagit_global" => "小米6国际版",
        "dipper_global" => "小米8国际版",
        "dipper_ru_global" => "小米8俄罗斯版",
        "lotus_global" => "小米Play国际版",
        "platina_global" => "小米8青春版国际版",
        "platina_ru_global" => "小米8青春版俄罗斯版",
        "equuleus_global" => "小米8屏幕指纹板国际版",
        "cepheus_global" => "小米9国际版",
        "cepheus_ru_global" => "小米9俄罗斯版",
        "grus_global" => "小米9SE国际版",
        "beryllium_global" => "Poco F1",

        //小米A系列
        "tissot" => "小米A1",
        "jasmine" => "小米A2",

        //小米Note系列
        "scorpio_global" => "小米Note2国际版",
        "jason_global" => "小米Note3国际版",

        //小米平板系列
        "mocha" => "小米平板1",
        "latte" => "小米平板2",
        "cappu" => "小米平板3",
        "clover" => "小米平板4",


        //小米MIX系列
        "lithium_global" => "国际版：小米MIX",
        "chiron_global" => "国际版：小米MIX2",
        "polaris_global" => "国际版：小米MIX2S",
        "perseus_global" => "国际版：小米MIX3",
        //"" => "",

        //小米MIX系列
        "hydrogen_global" => "国际版：小米Max",
        "helium_global" => "国际版：小米Max Pro",
        "oxygen_global" => "国际版：小米Max2",
        "nitrogen_global" => "国际版：小米Max3",

        //小米CC系列
        "pyxis" => "小米CC9",
        "vela" => "小米CC9美图定制版",
        "laurus" => "小米CC9e",


        //红米数字系列
        "land_global" => "国际版：红米3S",
        "prada_global" => "国际版：红米4",
        "rolex_global" => "国际版：红米4A",
        "santoni_global" => "国际版：红米4X",
        "riva_global" => "国际版：红米5A",
        "vince" => "红米5/红米5 Plus",
        "rosy_global" => "国际版：红米5",
        "rosy_ru_global" => "俄罗斯版：红米5",
        "vince_global" => "国际版：红米5 Plus",
        "cereus_global" => "国际版：红米6",
        "cereus_ru_global" => "俄罗斯版：红米6",
        "sakura_india_global" => "印度版：红米6 Pro",
        "cactus_global" => "国际版：红米6A",
        "cactus_ru_global" => "俄罗斯版：红米6A",
        "onclite_global" => "国际版：Redmi 7",
        //"" => "",

        //红米Note系列
        "hermes_global" => "国际版：红米Note2",
        "kenzo_global" => "国际版：红米Note3全网通",
        "kate_global" => "特供版：红米Note3",
        "nikel_global" => "国际版：红米Note4/4X(联发科)",
        "mido_global" => "国际版：红米Note4(高通版)",
        "whyred_global" => "国际版：红米Note5",
        "whyred_ru_global" => "俄罗斯版：红米Note5",
        "ugg_global" => "国际版：红米Note5A高配",
        "ugglite_global" => "国际版：红米Note5A标配",
        "tulip_global" => "国际版：红米Note 6 Pro",
        "lavender_global" => "国际版：Redmi Note 7",
        "lavender_ru_global" => "俄罗斯版：Redmi Note 7",

        //红米Pro
        "omega" => "红米Pro",

        //红米K系列
        "davinci" => "Redmi K20",
        "raphael" => "Redmi K20 Pro",
        //"" => "",


        //红米S/Y系列
        "ysl_global" => "国际版：红米S2",
        "ysl_ru_global" => "俄罗斯版：红米S2",

    );
    $device = $device;
    //http://update.miui.com/updates/v1/fullromdownload.php?d=sagit_global&b=F&r=global&n=
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=" . $device . "&b=F&r=global&n=";
    $referer = "http://en.miui.com/a-234.html";
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
    preg_match_all('/http.*?tgz/m', $result, $match);
    if ($match[0] == null) {
        echo "Error @" . $device . "=>" . $deviceName[$device] . $url . "</br>";
    } else {
        echo $deviceName[$device] . "卡刷包: " . "</br>";
        echo $deviceName[$device] . "线刷包: " . $match[0][0] . "</br>";
    }
}
echo " </br>";
echo "428周当前已更新：</br></br>";
echo "小米机型: </br>";
foreach ($smndg as $device) {
    getROMGB($device);
}
echo "</br></br>";
echo "红米机型: </br>";
foreach ($smndr as $device) {
    getROM($device);
}
