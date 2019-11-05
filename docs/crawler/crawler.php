<?php
header('Content-Type: text/html; charset=utf-8');

$supportedCN = array("capricorn","natrium","tiffany","meri","sagit","wayne","dipper","sirius","platina","ursa","equuleus","cepheus","grus","scorpio","jason","cappu","clover","lithium","chiron","polaris","perseus","oxygen","nitrogen","santoni","vince","cereus","lotus","sakura","mido","whyred","ugg","ugglite","lavender","violet","pyxis","vela","laurus","riva","onclite","pine","raphael");
$supportedGB = array("cancro_global","gemini_global","capricorn_global","natrium_global","sagit_global","dipper_global","dipper_ru_global","platina_global","platina_ru_global","equuleus_global","cepheus_global","cepheus_ru_global","grus_global","lithium_global","chiron_global","polaris_global","perseus_global","scorpio_global","lotus_global","beryllium_global","hydrogen_global","helium_global","oxygen_global","nitrogen_global","land_global","prada_global","rolex_global","santoni_global","rosy_global","rosy_ru_global","riva_global","vince_global","cereus_global","cereus_ru_global","sakura_india_global","cactus_global","cactus_ru_global","onclite_global","hermes_global","kenzo_global","kate_global","mido_global","nikel_global","whyred_global","whyred_ru_global","ugg_global","ugglite_global","tulip_global","lavender_global","lavender_ru_global","ysl_global","ysl_ru_global");
//$deviceList = array("mione_plus","mione","aries","taurus","pisces","cancro","libra","ferrari","aqua","gemini","capricorn","natrium","tiffany","meri","sagit","wayne","dipper","sirius","platina","ursa","equuleus","cepheus","grus","virgo","leo","scorpio","jason","mocha","latte","cappu","clover","lithium","chiron","polaris","perseus","hydrogen","helium","oxygen","nitrogen","pyxis","vela","laurus","hm1","armani","wt88047","ido","land","prada","rolex","santoni","markew","vince","cereus","sakura","onclite","pine","dior","gucci","hermes","hennessy","kenzo","nikel","mido","whyred","ugg","ugglite","lavender","violet","omega","davinci","raphael","ysl","onc");



//   http://update.miui.com/updates/v1/fullromdownload.php?d=hm2&b=X&r=cn&n=

function weeklyCNURL($device){
    $device = $device;
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=".$device."&b=X&r=cn&n=";
    return $url;
}

function monthlyCNURL($device){
    $device = $device;
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=".$device."&b=F&r=cn&n=";
    return $url;
}
function monthlyGlobalURL($device){
    $device = $device;
    //http://update.miui.com/updates/v1/fullromdownload.php?d=sagit_global&b=F&r=global&n=
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=".$device."&b=F&r=global&n=";
    return $url;
}
function weeklyGlobalURL($device){
    $device = $device;
    http://update.miui.com/updates/v1/fullromdownload.php?d=sagit_global&b=X&r=global&n=
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=".$device."&b=X&r=global&n=";
    return $url;
}




function getROM($url,$device){
    $deviceName = array(
        //小米数字系列
        "mione_plus" => "小米1/1S",
        "mione" => "小米手机1青春版",
        "aries" => "小米手机2/2S",
        "taurus" => "小米手机2A",
        "pisces" => "小米手机3移动版",
        "cancro" => "小米手机3W(电信联通版)/小米4",
        "cancro_global" => "国际版：小米3W(电信联通版)/小米4",
        "libra" => "小米手机4C",
        "ferrari" => "小米手机4i",
        "aqua" => "小米手机4S",
        "gemini" => "小米手机5",
        "gemini_global" => "国际版：小米5",
        "capricorn" => "小米手机5S",
        "capricorn_global" => "国际版：小米5S",
        "natrium" => "小米手机5S Plus",
        "natrium_global" => "国际版：小米5S Plus",
        "tiffany" => "小米5X",
        "meri" => "小米5C",
        "sagit" => "小米6",
        "sagit_global" => "国际版：小米6",
        "wayne" => "小米6X",
        "dipper" => "小米8",
        "dipper_global" => "国际版：小米8",
        "dipper_ru_global" => "俄罗斯版：小米8",
        "sirius" => "小米8SE",
        "lotus" => "小米Play",
        "lotus_global" => "国际版：小米Play",
        "beryllium_global" => "国际版：Poco F1",
        "platina" => "小米8青春版",
        "platina_global" => "国际版：小米8青春版",
        "platina_ru_global" => "俄罗斯版：小米8青春版",
        "ursa" => "小米8探索版",
        "equuleus" => "小米8屏幕指纹板",
        "equuleus_global" => "国际版：小米8屏幕指纹板",
        "cepheus" => "小米9",
        "cepheus_global" => "国际版：小米9",
        "cepheus_ru_global" => "俄罗斯版：小米9",
        "grus" => "小米9SE",
        "grus_global" => "国际版：小米9SE",

        //小米A系列
        //"tissot" => "小米A1",
        //"jasmine" => "小米A2",

        //小米Note系列
        "virgo" => "小米Note",
        "leo" => "小米Note Pro",
        "scorpio" => "小米Note2",
        "scorpio_global" => "国际版：小米Note2",
        "jason" => "小米Note3",

        //小米平板系列
        "mocha" => "小米平板1",
        "latte" => "小米平板2",
        "cappu" => "小米平板3",
        "clover" => "小米平板4",


        //小米MIX系列
        "lithium" => "小米MIX",
        "lithium_global" => "国际版：小米MIX",
        "chiron" => "小米MIX2",
        "chiron_global" => "国际版：小米MIX2",
        "polaris" => "小米MIX2S",
        "polaris_global" => "国际版：小米MIX2S",
        "perseus" => "小米MIX3",
        "perseus_global" => "国际版：小米MIX3",
        //"" => "",

        //小米MIX系列
        "hydrogen" => "小米Max",
        "hydrogen_global" => "国际版：小米Max",
        "helium" => "小米Max Pro",
        "helium_global" => "国际版：小米Max Pro",
        "oxygen" => "小米Max2",
        "oxygen_global" => "国际版：小米Max2",
        "nitrogen" => "小米Max3",
        "nitrogen_global" => "国际版：小米Max3",

        //小米CC系列
        "pyxis" => "小米CC9",
        "vela" => "小米CC9美图定制版",
        "laurus" => "小米CC9e",


        //红米数字系列
        "hm1" => "红米1",
        "armani" => "红米1S",
        "wt88047" => "红米2/2A",
        "ido" => "红米3",
        "land" => "红米3S/X",
        "land_global" => "国际版：红米3S",
        "prada" => "红米4",
        "prada_global" => "国际版：红米4",
        "rolex" => "红米4A/5A",
        "rolex_global" => "国际版：红米4A",
        "santoni" => "红米4X",
        "santoni_global" => "国际版：红米4X",
        "markew" => "红米4Pro",
        "riva" => "红米5A",
        "riva_global" => "国际版：红米5A",
        "vince" => "红米5/红米5 Plus",
        "rosy_global" => "国际版：红米5",
        "rosy_ru_global" => "俄罗斯版：红米5",
        "vince_global" => "国际版：红米5 Plus",
        "cereus" => "红米6/6A",
        "cereus_global" => "国际版：红米6",
        "cereus_ru_global" => "俄罗斯版：红米6",
        "sakura" => "红米6 Pro",
        "sakura_india_global" => "印度版：红米6 Pro",
        "cactus_global" => "国际版：红米6A",
        "cactus_ru_global" => "俄罗斯版：红米6A",
        "onclite" => "Redmi 7",
        "onclite_global" => "国际版：Redmi 7",
        "pine" => "Redmi 7A",
        //"" => "",

        //红米Note系列
        "dior" => "红米Note",
        "gucci" => "红米Note双卡版",
        "hermes" => "红米Note2",
        "hermes_global" => "国际版：红米Note2",
        "hennessy" => "红米Note3双网通",
        "kenzo" => "红米Note3全网通",
        "kenzo_global" => "国际版：红米Note3全网通",
        "kate_global" => "特供版：红米Note3",
        "nikel" => "红米Note4/4X(联发科)",
        "nikel_global" => "国际版：红米Note4/4X(联发科)",
        "mido" => "红米Note4(高通版)",
        "mido_global" => "国际版：红米Note4(高通版)",
        "whyred" => "红米Note5",
        "whyred_global" => "国际版：红米Note5",
        "whyred_ru_global" => "俄罗斯版：红米Note5",
        "ugg" => "红米Note5A高配",
        "ugg_global" => "国际版：红米Note5A高配",
        "ugglite" => "红米Note5A标配",
        "ugglite_global" => "国际版：红米Note5A标配",
        "tulip_global" => "国际版：红米Note 6 Pro",
        "lavender" => "Redmi Note 7",
        "lavender_global" => "国际版：Redmi Note 7",
        "lavender_ru_global" => "俄罗斯版：Redmi Note 7",
        "violet" => "Redmi Note 7 Pro",

        //红米Pro
        "omega" => "红米Pro",

        //红米K系列
        "davinci" => "Redmi K20",
        "raphael" => "Redmi K20 Pro",
        //"" => "",


        //红米S/Y系列
        "ysl" => "红米S1",
        "ysl_global" => "国际版：红米S2",
        "ysl_ru_global" => "俄罗斯版：红米S2",
        "onc" => "红米Y3",
        //"" => "",

    );
    $url = $url;
    $device = $device;
    $referer = "http://www.miui.com/shuaji-393.html";
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($curl,CURLOPT_REFERER,$referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_HEADER, true);        //返回头信息
    curl_setopt($curl, CURLOPT_NOBODY, true);        //不返回内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //返回数据不直接输出
    $result = curl_exec($curl);
    preg_match_all('/http.*?tgz/m',$result,$match);
    if($match[0] == NULL){
        echo "Error @".$device."=>".$deviceName[$device]."</br>";
    }else{
        echo $deviceName[$device].": ".$match[0][0]."</br>";
    }
}


//foreach ($supportedCN as $device){
//    getROM(weeklyCNURL($device),$device);
//    getROM(monthlyCNURL($device),$device);
//}
function getGBROM($url,$device){
    $deviceName = array(
        //小米数字系列
        "mione_plus" => "小米1/1S",
        "mione" => "小米1青春版",
        "aries" => "小米2/2S",
        "taurus" => "小米2A",
        "pisces" => "小米3移动版",
        "cancro" => "小米3W(电信联通版)/小米4",
        "cancro_global" => "国际版：小米3W(电信联通版)/小米4",
        "libra" => "小米4C",
        "ferrari" => "小米4i",
        "aqua" => "小米4S",
        "gemini" => "小米5",
        "gemini_global" => "国际版：小米5",
        "capricorn" => "小米5S",
        "capricorn_global" => "国际版：小米5S",
        "natrium" => "小米5S Plus",
        "natrium_global" => "国际版：小米5S Plus",
        "tiffany" => "小米5X",
        "meri" => "小米5C",
        "sagit" => "小米6",
        "sagit_global" => "国际版：小米6",
        "wayne" => "小米6X",
        "dipper" => "小米8",
        "dipper_global" => "国际版：小米8",
        "dipper_ru_global" => "俄罗斯版：小米8",
        "sirius" => "小米8SE",
        "lotus" => "小米Play",
        "lotus_global" => "国际版：小米Play",
        "beryllium_global" => "国际版：Poco F1",
        "platina" => "小米8青春版",
        "platina_global" => "国际版：小米8青春版",
        "platina_ru_global" => "俄罗斯版：小米8青春版",
        "ursa" => "小米8探索版",
        "equuleus" => "小米8屏幕指纹板",
        "equuleus_global" => "国际版：小米8屏幕指纹板",
        "cepheus" => "小米9",
        "cepheus_global" => "国际版：小米9",
        "cepheus_ru_global" => "俄罗斯版：小米9",
        "grus" => "小米9SE",
        "grus_global" => "国际版：小米9SE",

        //小米A系列
        //"tissot" => "小米A1",
        //"jasmine" => "小米A2",

        //小米Note系列
        "virgo" => "小米Note",
        "leo" => "小米Note Pro",
        "scorpio" => "小米Note2",
        "scorpio_global" => "国际版：小米Note2",
        "jason" => "小米Note3",

        //小米平板系列
        "mocha" => "小米平板1",
        "latte" => "小米平板2",
        "cappu" => "小米平板3",
        "clover" => "小米平板4",


        //小米MIX系列
        "lithium" => "小米MIX",
        "lithium_global" => "国际版：小米MIX",
        "chiron" => "小米MIX2",
        "chiron_global" => "国际版：小米MIX2",
        "polaris" => "小米MIX2S",
        "polaris_global" => "国际版：小米MIX2S",
        "perseus" => "小米MIX3",
        "perseus_global" => "国际版：小米MIX3",
        //"" => "",

        //小米MIX系列
        "hydrogen" => "小米Max",
        "hydrogen_global" => "国际版：小米Max",
        "helium" => "小米Max Pro",
        "helium_global" => "国际版：小米Max Pro",
        "oxygen" => "小米Max2",
        "oxygen_global" => "国际版：小米Max2",
        "nitrogen" => "小米Max3",
        "nitrogen_global" => "国际版：小米Max3",

        //小米CC系列
        "pyxis" => "小米CC9",
        "vela" => "小米CC9美图定制版",
        "laurus" => "小米CC9e",


        //红米数字系列
        "hm1" => "红米1",
        "armani" => "红米1S",
        "wt88047" => "红米2/2A",
        "ido" => "红米3",
        "land" => "红米3S/X",
        "land_global" => "国际版：红米3S",
        "prada" => "红米4",
        "prada_global" => "国际版：红米4",
        "rolex" => "红米4A/5A",
        "rolex_global" => "国际版：红米4A",
        "santoni" => "红米4X",
        "santoni_global" => "国际版：红米4X",
        "markew" => "红米4Pro",
        "riva" => "红米5A",
        "riva_global" => "国际版：红米5A",
        "vince" => "红米5/红米5 Plus",
        "rosy_global" => "国际版：红米5",
        "rosy_ru_global" => "俄罗斯版：红米5",
        "vince_global" => "国际版：红米5 Plus",
        "cereus" => "红米6/6A",
        "cereus_global" => "国际版：红米6",
        "cereus_ru_global" => "俄罗斯版：红米6",
        "sakura" => "红米6 Pro",
        "sakura_india_global" => "印度版：红米6 Pro",
        "cactus_global" => "国际版：红米6A",
        "cactus_ru_global" => "俄罗斯版：红米6A",
        "onclite" => "Redmi 7",
        "onclite_global" => "国际版：Redmi 7",
        "pine" => "Redmi 7A",
        //"" => "",

        //红米Note系列
        "dior" => "红米Note",
        "gucci" => "红米Note双卡版",
        "hermes" => "红米Note2",
        "hermes_global" => "国际版：红米Note2",
        "hennessy" => "红米Note3双网通",
        "kenzo" => "红米Note3全网通",
        "kenzo_global" => "国际版：红米Note3全网通",
        "kate_global" => "特供版：红米Note3",
        "nikel" => "红米Note4/4X(联发科)",
        "nikel_global" => "国际版：红米Note4/4X(联发科)",
        "mido" => "红米Note4(高通版)",
        "mido_global" => "国际版：红米Note4(高通版)",
        "whyred" => "红米Note5",
        "whyred_global" => "国际版：红米Note5",
        "whyred_ru_global" => "俄罗斯版：红米Note5",
        "ugg" => "红米Note5A高配",
        "ugg_global" => "国际版：红米Note5A高配",
        "ugglite" => "红米Note5A标配",
        "ugglite_global" => "国际版：红米Note5A标配",
        "tulip_global" => "国际版：红米Note 6 Pro",
        "lavender" => "Redmi Note 7",
        "lavender_global" => "国际版：Redmi Note 7",
        "lavender_ru_global" => "俄罗斯版：Redmi Note 7",
        "violet" => "Redmi Note 7 Pro",

        //红米Pro
        "omega" => "红米Pro",

        //红米K系列
        "davinci" => "Redmi K20",
        "raphael" => "Redmi K20 Pro",
        //"" => "",


        //红米S/Y系列
        "ysl" => "红米S1",
        "ysl_global" => "国际版：红米S2",
        "ysl_ru_global" => "俄罗斯版：红米S2",
        "onc" => "红米Y3",
        //"" => "",

    );
    $url = $url;
    $device = $device;
    $referer = "http://en.miui.com/a-234.html";
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($curl,CURLOPT_REFERER,$referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_HEADER, true);        //返回头信息
    curl_setopt($curl, CURLOPT_NOBODY, true);        //不返回内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  //返回数据不直接输出
    $result = curl_exec($curl);
    preg_match_all('/http.*?tgz/m',$result,$match);
    if($match[0] == NULL){
        echo "Error @".$device."=>".$deviceName[$device].$url."</br>";
    }else{
        echo $deviceName[$device].": ".$match[0][0]."</br>";
    }
}


foreach ($supportedCN as $device){
    getROM(weeklyCNURL($device),$device);
    getROM(monthlyCNURL($device),$device);
}

foreach ($supportedGB as $device){
    //getGBROM(weeklyGlobalURL($device),$device);
    getGBROM(monthlyGlobalURL($device),$device);
}