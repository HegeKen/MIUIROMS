<?php
header('Content-Type: text/html; charset=utf-8');

//当前受支持的小米机型代号；
$smnd = array("capricorn", "natrium", "tiffany", "meri", "sagit", "wayne", "dipper", "sirius", "platina", "ursa", "equuleus", "cepheus", "grus", "pyxis", "vela", "laurus", "lotus", "oxygen", "nitrogen", "scorpio", "jason", "cappu", "clover", "lithium", "chiron", "polaris", "perseus");
//当前受支持的红米机型代号；
$srmd = array("santoni", "rosy", "riva", "vince", "cereus", "cactus", "sakura", "onclite", "pine", "mido", "whyred", "ugglite", "ugg", "lavender", "violet", "raphael", "begonia");
function fastbootROM($device)
{
    $week_version = "9.8.29";
    $deviceName = array(
        //小米数字系列
        "mione_plus" => "小米手机1/小米手机1S", //2011.8.16  2012.8.23
        "mione" => "小米手机1青春版", //2012.5.15
        "aries" => "小米手机2/小米手机2S", //2012.8.16  2013.4.9
        "taurus" => "小米手机2A", //2013.4.9
        "pisces" => "小米手机3 移动版", //2013.9.6
        "cancro" => "小米手机3W(电信联通版)/小米手机4", //2014.7.22
        "cancro_lte_ct" => "小米手机4电信4G版", //2014.7.22
        "libra" => "小米手机4C", //2015.9.22
        "ferrari" => "小米手机4i", //2015.4.23
        "aqua" => "小米手机4S",
        "gemini" => "小米手机5", //2016.2.24
        "capricorn" => "小米手机5S",
        "natrium" => "小米手机5S Plus",
        "tiffany" => "小米手机5X",
        "meri" => "小米手机5C",
        "sagit" => "小米手机6",
        "wayne" => "小米手机6X",
        "dipper" => "小米手机8",
        "sirius" => "小米手机8SE",
        "platina" => "小米手机8青春版",
        "ursa" => "小米手机8探索版",
        "equuleus" => "小米手机8屏幕指纹板",
        "cepheus" => "小米手机9",
        "grus" => "小米手机9SE",

        //小米A系列
        //"tissot" => "小米A1",
        //"jasmine" => "小米A2",

        //小米Play
        "lotus" => "小米手机Play",

        //小米Note系列
        "virgo" => "小米Note",
        "virgo_lte_ct" => "小米Note 全网通版",
        "leo" => "小米Note 顶配版",
        "scorpio" => "小米Note2",
        "jason" => "小米Note3",

        //小米平板系列
        "mocha" => "小米平板1",
        "latte" => "小米平板2",
        "cappu" => "小米平板3",
        "clover" => "小米平板4",

        //小米MIX系列
        "lithium" => "小米MIX",
        "chiron" => "小米MIX2",
        "polaris" => "小米MIX2S",
        "perseus" => "小米MIX3",
        //"" => "",

        //小米MAX系列
        "hydrogen" => "小米Max",
        "helium" => "小米Max 高配版",
        "oxygen" => "小米Max2",
        "nitrogen" => "小米Max3",

        //小米CC系列
        "pyxis" => "小米CC9",
        "vela" => "小米CC9美图定制版",
        "laurus" => "小米CC9e",

        //红米数字系列
        "hm1" => "红米手机1",
        "wt98007" => "红米手机WCDMA版",
        "armani" => "红米手机1S WCDMA 3G版",
        "wt93807" => "红米手机1S TD 3G版",
        "wt96007" => "红米手机1S TD 4G版",
        "wt86047" => "红米手机2 移动版",
        "wt86047_pro" => "红米手机2 移动版增强版",
        "wt88047" => "红米手机2 联通/电信版",
        "wt88047_pro" => "红米手机2 联通/电信版 增强版",
        "lte26007" => "红米手机2A增强版",
        "ido_xhdpi" => "红米手机3",
        "land" => "红米手机3S/3X",
        "prada" => "红米手机4",
        "markw" => "红米手机4高配版",
        "rolex" => "红米手机4A",
        "santoni" => "红米手机4X",
        "rosy" => "红米手机5",
        "riva" => "红米手机5A",
        "vince" => "红米手机5 Plus",
        "cereus" => "红米手机6",
        "cactus" => "红米手机6A",
        "sakura" => "红米手机6 Pro",
        "onclite" => "Redmi 7",
        "pine" => "Redmi 7A",
        //"" => "",

        //红米Note系列
        "dior" => "红米Note 4G版",
        "lcsh92_wet_jb9" => "红米Note WCDMA版",
        "lcsh92_wet_xm_td" => "红米Note TD版",
        "gucci" => "红米Note双卡版",
        "hermes" => "红米Note2",
        "hennessy" => "红米Note3双网通",
        "kenzo" => "红米Note3全网通",
        "nikel" => "红米Note4/4X(联发科)",
        "mido" => "红米Note4(高通版)",
        "whyred" => "红米Note5",
        "ugg" => "红米Note5A高配",
        "ugglite" => "红米Note5A标配",
        "lavender" => "Redmi Note 7",
        "violet" => "Redmi Note 7 Pro",
        "ginkgo" => "Redmi Note 8",
        "begonia" => "Redmi Note 8 Pro",
        

        //红米Pro
        "omega" => "红米手机Pro",

        //红米K系列
        "davinci" => "Redmi K20",
        "raphael" => "Redmi K20 Pro",
        //"" => "",

        //红米S/Y系列
        "ysl" => "红米手机S2",
        "onc" => "红米手机Y3",
        //"" => "",

    );
    $device = $device;
    $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=" . $device . "&b=X&r=cn&n=";
    $referer = "http://www.miui.com/shuaji-393.html";
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
        //echo "Error @".$device."=>".$deviceName[$device].$url."</br>";
    } else {
        $versions = explode("/", $match[0][0]);
        if ($versions[3] == $week_version) {
            echo $deviceName[$device] . "&nbsp;" . $versions[3] . "卡刷包: " . "</br>";
            echo $deviceName[$device] . "&nbsp;" . $versions[3] . "线刷包: " . $match[0][0] . "</br>";
        }
        else{
            //echo $deviceName[$device]."&nbsp;/&nbsp;";
        }
    }
}



echo " </br>";
echo "<title>MIUI 第430周更新列表</title>";
echo "430周当前已更新：</br></br>";
echo "小米机型: </br>";
foreach ($smnd as $device) {
    fastbootROM($device);
}
echo "</br></br>";
echo "红米机型: </br>";
foreach ($srmd as $device) {
    fastbootROM($device);
}


