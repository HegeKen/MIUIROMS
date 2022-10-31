<?php
header('Content-Type: text/html; charset=utf-8');
$smnd = array("capricorn", "natrium", "tiffany", "meri", "sagit", "wayne", "dipper", "sirius", "platina", "ursa", "equuleus", "cepheus", "grus", "pyxis", "vela", "laurus", "lotus", "oxygen", "nitrogen", "scorpio", "jason", "cappu", "clover", "lithium", "chiron", "polaris", "perseus", "santoni", "riva", "vince", "cereus", "cactus", "sakura", "onclite", "pine", "mido", "whyred", "ugg", "ugglite", "lavender", "violet", "davinci", "raphael");

$deviceInfo = array(
    //0：代号、1：型号、2：卡刷包代号、3：线刷包链接、4：卡刷包链接、5：开发版线刷包下载链接、6：开发版卡刷包下载链接、7：稳定版线刷包下载链接、8：稳定版卡刷包下载链接
    array("capricorn", "小米手机5S", "MI5S", "http://update.miui.com/updates/v1/fullromdownload.php?d=capricorn&b=X&r=cn&n=", "https://www.miui.com/download-319.html", "", "", "", ""),
    array("natrium", "小米手机5S Plus", "MI5SPlus", "http://update.miui.com/updates/v1/fullromdownload.php?d=natrium&b=X&r=cn&n=", "https://www.miui.com/download-320.html", "", "", "", ""),
    array("tiffany", "小米手机5X", "MI5X", "http://update.miui.com/updates/v1/fullromdownload.php?d=tiffany&b=X&r=cn&n=", "https://www.miui.com/download-332.html", "", "", "", ""),
    array("meri", "小米手机5C", "MI5C", "http://update.miui.com/updates/v1/fullromdownload.php?d=meri&b=X&r=cn&n=", "https://www.miui.com/download-327.html", "", "", "", ""),
    array("sagit", "小米手机6", "MI6", "http://update.miui.com/updates/v1/fullromdownload.php?d=sagit&b=X&r=cn&n=", "https://www.miui.com/download-330.html", "", "", "", ""),
    array("wayne", "小米手机6X", "MI6X", "http://update.miui.com/updates/v1/fullromdownload.php?d=wayne&b=X&r=cn&n=", "https://www.miui.com/download-343.html", "", "", "", ""),
    array("dipper", "小米手机8", "MI8", "http://update.miui.com/updates/v1/fullromdownload.php?d=dipper&b=X&r=cn&n=", "https://www.miui.com/download-345.html#494", "", "", "", ""),
    array("sirius", "小米手机8SE", "MI8SE", "http://update.miui.com/updates/v1/fullromdownload.php?d=sirius&b=X&r=cn&n=", "https://www.miui.com/download-346.html", "", "", "", ""),
    array("platina", "小米手机8青春版", "MI8Lite", "http://update.miui.com/updates/v1/fullromdownload.php?d=platina&b=X&r=cn&n=", "https://www.miui.com/download-353.html", "", "", "", ""),
    array("ursa", "小米手机8探索版", "MI8Explorer", "http://update.miui.com/updates/v1/fullromdownload.php?d=ursa&b=X&r=cn&n=", "https://www.miui.com/download-345.html#503", "", "", "", ""),
    array("equuleus", "小米手机8屏幕指纹板", "MI8UD", "http://update.miui.com/updates/v1/fullromdownload.php?d=equuleus&b=X&r=cn&n=", "https://www.miui.com/download-345.html#504", "", "", "", ""),
    array("cepheus", "小米手机9", "CEPHEUS", "http://update.miui.com/updates/v1/fullromdownload.php?d=cepheus&b=X&r=cn&n=", "https://www.miui.com/download-357.html", "", "", "", ""),
    array("grus", "小米手机9SE", "GRUS", "http://update.miui.com/updates/v1/fullromdownload.php?d=grus&b=X&r=cn&n=", "https://www.miui.com/download-358.html", "", "", "", ""),
    array("pyxis", "小米CC9", "", "http://update.miui.com/updates/v1/fullromdownload.php?d=pyxis&b=X&r=cn&n=", "", "", "", "", ""),
    array("vela", "小米CC9美图定制版", "", "http://update.miui.com/updates/v1/fullromdownload.php?d=vela&b=X&r=cn&n=", "", "", "", "", ""),
    array("laurus", "小米CC9e", "", "http://update.miui.com/updates/v1/fullromdownload.php?d=laurus&b=X&r=cn&n=", "", "", "", "", ""),
    array("lotus", "小米手机Play", "MIPLAY", "http://update.miui.com/updates/v1/fullromdownload.php?d=lotus&b=X&r=cn&n=", "https://www.miui.com/download-355.html", "", "", "", ""),
    array("oxygen", "小米Max2", "MIMAX2", "http://update.miui.com/updates/v1/fullromdownload.php?d=oxygen&b=X&r=cn&n=", "https://www.miui.com/download-331.html", "", "", "", ""),
    array("nitrogen", "小米Max3", "MIMAX3", "http://update.miui.com/updates/v1/fullromdownload.php?d=nitrogen&b=X&r=cn&n=", "https://www.miui.com/download-352.html", "", "", "", ""),
    array("scorpio", "小米Note2", "MINote2", "http://update.miui.com/updates/v1/fullromdownload.php?d=scorpio&b=X&r=cn&n=", "https://www.miui.com/download-321.html", "", "", "", ""),
    array("jason", "小米Note3", "MINote3", "http://update.miui.com/updates/v1/fullromdownload.php?d=jason&b=X&r=cn&n=", "https://www.miui.com/download-336.html", "", "", "", ""),
    array("cappu", "小米平板3", "MIPAD3", "http://update.miui.com/updates/v1/fullromdownload.php?d=cappu&b=X&r=cn&n=", "https://www.miui.com/download-329.html", "", "", "", ""),
    array("clover", "小米平板4", "MIPAD4", "http://update.miui.com/updates/v1/fullromdownload.php?d=clover&b=X&r=cn&n=", "https://www.miui.com/download-349.html", "", "", "", ""),
    array("lithium", "小米MIX", "MIMIX", "http://update.miui.com/updates/v1/fullromdownload.php?d=lithium&b=X&r=cn&n=", "https://www.miui.com/download-323.html", "", "", "", ""),
    array("chiron", "小米MIX2", "MIMIX2", "http://update.miui.com/updates/v1/fullromdownload.php?d=chiron&b=X&r=cn&n=", "https://www.miui.com/download-337.html", "", "", "", ""),
    array("polaris", "小米MIX2S", "MIMIX2S", "http://update.miui.com/updates/v1/fullromdownload.php?d=polaris&b=X&r=cn&n=", "https://www.miui.com/download-342.html", "", "", "", ""),
    array("perseus", "小米MIX3", "MIMIX3", "http://update.miui.com/updates/v1/fullromdownload.php?d=perseus&b=X&r=cn&n=", "https://www.miui.com/download-354.html", "", "", "", ""),
    array("santoni", "红米手机4X", "HM4X", "http://update.miui.com/updates/v1/fullromdownload.php?d=santoni&b=X&r=cn&n=", "https://www.miui.com/download-328.html", "", "", "", ""),
    array("rosy", "红米手机5", "HM5", "http://update.miui.com/updates/v1/fullromdownload.php?d=rosy&b=X&r=cn&n=", "https://www.miui.com/download-339.html", "", "", "", ""),
    array("riva", "红米手机5A", "HM5A", "http://update.miui.com/updates/v1/fullromdownload.php?d=riva&b=X&r=cn&n=", "https://www.miui.com/download-338.html", "", "", "", ""),
    array("vince", "红米手机5 Plus", "HM5Plus", "http://update.miui.com/updates/v1/fullromdownload.php?d=vince&b=X&r=cn&n=", "https://www.miui.com/download-340.html", "", "", "", ""),
    array("cereus", "红米手机6", "HM6", "http://update.miui.com/updates/v1/fullromdownload.php?d=cereus&b=X&r=cn&n=", "https://www.miui.com/download-348.html#498", "", "", "", ""),
    array("cactus", "红米手机6A", "HM6A", "http://update.miui.com/updates/v1/fullromdownload.php?d=cactus&b=X&r=cn&n=", "https://www.miui.com/download-348.html#497", "", "", "", ""),
    array("sakura", "红米手机6 Pro", "HM6Pro", "http://update.miui.com/updates/v1/fullromdownload.php?d=sakura&b=X&r=cn&n=", "https://www.miui.com/download-351.html", "", "", "", ""),
    array("onclite", "Redmi 7", "ONCLITE", "http://update.miui.com/updates/v1/fullromdownload.php?d=onclite&b=X&r=cn&n=", "https://www.miui.com/download-348.html#497", "", "", "", ""),
    array("pine", "Redmi 7A", "PINE", "http://update.miui.com/updates/v1/fullromdownload.php?d=pine&b=X&r=cn&n=", "https://www.miui.com/download-348.html#526", "", "", "", ""),
    array("mido", "红米Note4X高通版", "HMNote4X", "http://update.miui.com/updates/v1/fullromdownload.php?d=mido&b=X&r=cn&n=", "https://www.miui.com/download-326.html#470", "", "", "", ""),
    array("whyred", "红米Note5", "HMNote5", "http://update.miui.com/updates/v1/fullromdownload.php?d=whyred&b=X&r=cn&n=", "https://www.miui.com/download-341.html", "", "", "", ""),
    array("ugg", "红米Note5A高配", "HMNote5A", "http://update.miui.com/updates/v1/fullromdownload.php?d=ugg&b=X&r=cn&n=", "https://www.miui.com/download-335.html#484", "", "", "", ""),
    array("ugglite", "红米Note5A标配", "HMNote5ALITE", "http://update.miui.com/updates/v1/fullromdownload.php?d=ugglite&b=X&r=cn&n=", "https://www.miui.com/download-335.html#483", "", "", "", ""),
    array("lavender", "Redmi Note 7", "LAVENDER", "http://update.miui.com/updates/v1/fullromdownload.php?d=lavender&b=X&r=cn&n=", "https://www.miui.com/download-356.html#508", "", "", "", ""),
    array("violet", "Redmi Note 7 Pro", "VIOLET", "http://update.miui.com/updates/v1/fullromdownload.php?d=violet&b=X&r=cn&n=", "https://www.miui.com/download-356.html#521", "", "", "", ""),
    array("davinci", "Redmi K20", "DAVINCI", "http://update.miui.com/updates/v1/fullromdownload.php?d=davinci&b=X&r=cn&n=", "https://www.miui.com/download-360.html#525", "", "", "", ""),
    array("raphael", "Redmi K20 Pro", "RAPHAEL", "http://update.miui.com/updates/v1/fullromdownload.php?d=raphael&b=X&r=cn&n=", "https://www.miui.com/download-360.html#524", "", "", "", ""),
);

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
echo " </br>";
// var_dump($deviceInfo);



// for ($j = 0; $j < sizeof($deviceInfo); $j++) {
//     $week_version = "9.8.29";
//     $device = $j;
//     $url = $deviceInfo[$device][3];
//     $referer = "http://www.miui.com/shuaji-393.html";
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
//     preg_match_all('/http.*?tgz/m', $result, $match);
//     if ($match[0] == null) {
//     } else {
//         $versions = explode("/", $match[0][0]);
//         if ($versions[3] == $week_version) {
//             array_splice($deviceInfo[$device],5,0,$match[0][0]);
//         } else {
//         }
//     }
//     $url = $deviceInfo[$device][4];
//     $curl = curl_init();
//     $result = curl_exec($curl);
//     preg_match_all('/http.*?zip/m', $result, $match);

// }
// var_dump($deviceInfo);

$week_version = "9.8.29";

//$device = $j;
$device = 1;
$url = $deviceInfo[$device][3];
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
} else {
    $versions = explode("/", $match[0][0]);
    if ($versions[3] == $week_version) {
        array_splice($deviceInfo[$device],5,0,$match[0][0]);
    } else {
    }
}
$url = $deviceInfo[$device][4];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_REFERER, $referer);
curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
$result = curl_exec($curl);
preg_match_all('/http.*?zip/m', $result, $match);
//var_dump($match);
if ($match[0] == null) {
} else {
    $versions = explode("_", $match[0][0]);
    if ($versions[1] == $deviceInfo[$device][2] && str_split($versions[2], 1) !="V") {
        echo $match[0][0];
        array_splice($deviceInfo[$device],6,0,$match[0][0]);
    } else {
    }
}