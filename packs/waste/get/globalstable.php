<?php
header('Content-Type: text/html; charset=utf-8');
include("devices.php");

$deviceStringChina = array("sagit&b=F&r=cn&n=","wayne&b=F&r=cn&n=","dipper&b=F&r=cn&n=","equuleus&b=F&r=cn&n=","ursa&b=F&r=cn&n=","platina&b=F&r=cn&n=","sirius&b=F&r=cn&n=","cepheus&b=F&r=cn&n=","crux&b=F&r=cn&n=","grus&b=F&r=cn&n=","pyxis&b=F&r=cn&n=","davinci&b=F&r=cn&n=","raphael&b=F&r=cn&n=","umi&b=F&r=cn&n=","cmi&b=F&r=cn&n=","vangogh&b=F&r=cn&n=","nitrogen&b=F&r=cn&n=","jason&b=F&r=cn&n=","tucana&b=F&r=cn&n=","toco&b=F&r=cn&n=","chiron&b=F&r=cn&n=","polaris&b=F&r=cn&n=","perseus&b=F&r=cn&n=","andromeda&b=F&r=cn&n=","cereus&b=F&r=cn&n=","cactus&b=F&r=cn&n=","sakura&b=F&r=cn&n=","onclite&b=F&r=cn&n=","pine&b=F&r=cn&n=","olive&b=F&r=cn&n=","olivelite&b=F&r=cn&n=","olivewood&b=F&r=cn&n=","whyred&b=F&r=cn&n=","lavender&b=F&r=cn&n=","violet&b=F&r=cn&n=","ginkgo&b=F&r=cn&n=","begonia&b=F&r=cn&n=","merlin&b=F&r=cn&n=","curtana&b=F&r=cn&n=","joyeuse&b=F&r=cn&n=","excalibur&b=F&r=cn&n=","phoenix&b=F&r=cn&n=","picasso&b=F&r=cn&n=","lmi&b=F&r=cn&n=");
$deviceStringGlobal = array("sagit_global&b=F&r=global&n=","dipper_global&b=F&r=global&n=","dipper_ru_global&b=F&r=global&n=","equuleus_global&b=F&r=global&n=","equuleus_ru_global&b=F&r=ru&n=","platina_global&b=F&r=global&n=","platina_ru_global&b=F&r=global&n=","cepheus_global&b=F&r=global&n=","cepheus_eea_global&b=F&r=eea&n=","cepheus_ru_global&b=F&r=global&n=","grus_global&b=F&r=global&n=","grus_eea_global&b=F&r=eea&n=","grus_ru_global&b=F&r=global&n=","pyxis_global&b=F&r=global&n=","pyxis_eea_global&b=F&r=eea&n=","pyxis_ru_global&b=F&r=ru&n=","davinci_global&b=F&r=global&n=","davinci_eea_global&b=F&r=eea&n=","davinciin_in_global&b=F&r=in&n=","davinci_ru_global&b=F&r=global&n=","raphael_global&b=F&r=global&n=","raphael_eea_global&b=F&r=eea&n=","raphaelin_in_global&b=F&r=in&n=","raphael_ru_global&b=F&r=global&n=","umi_global&b=F&r=global&n=","umi_eea_global&b=F&r=eea&n=","umi_in_global&b=F&r=in&n=","umi_id_global&b=F&r=id&n=","umi_ru_global&b=F&r=ru&n=","cmi_global&b=F&r=global&n=","cmi_eea_global&b=F&r=eea&n=","cmi_in_global&b=F&r=in&n=","cmi_ru_global&b=F&r=ru&n=","vangogh_global&b=F&r=global&n=","vangogh_eea_global&b=F&r=eea&n=","vangogh_in_global&b=F&r=in&n=","vangogh_ru_global&b=F&r=ru&n=","hydrogen_global&b=F&r=global&n=","helium_global&b=F&r=global&n=","oxygen_global&b=F&r=global&n=","nitrogen_global&b=F&r=global&n=","nitrogen_ru_global&b=F&r=global&n=","jason_global&b=F&r=global&n=","tucana_global&b=F&r=global&n=","tucana_eea_global&b=F&r=eea&n=","tucana_in_global&b=F&r=in&n=","tucana_ru_global&b=F&r=ru&n=","toco_global&b=F&r=global&n=","toco_eea_global&b=F&r=eea&n=","tocoin_in_global&b=F&r=in&n=","toco_ru_global&b=F&r=ru&n=","chiron_global&b=F&r=global&n=","polaris_global&b=F&r=global&n=","polaris_ru_global&b=F&r=global&n=","perseus_global&b=F&r=global&n=","perseus_ru_global&b=F&r=global&n=","andromeda_global&b=F&r=global&n=","andromeda_eea_global&b=F&r=eea&n=","beryllium_global&b=F&r=global&n=","beryllium_ru_global&b=F&r=global&n=","lmi_eea_global&b=F&r=eea&n=","phoenixin_in_global&b=F&r=in&n=","cereus_global&b=F&r=global&n=","cereus_ru_global&b=F&r=global&n=","cactus_global&b=F&r=global&n=","sakura_global&b=F&r=global&n=","sakura_india_global&b=F&r=in&n=","onclite_global&b=F&r=global&n=","onclite_eea_global&b=F&r=eea&n","onclite_in_global&b=F&r=in&n=","onclite_ru_global&b=F&r=global&n=","pine_global&b=F&r=global&n=","pine_eea_global&b=F&r=eea&n=","pine_ru_global&b=F&r=global&n=","olive_global&b=F&r=global&n=","olive_eea_global&b=F&r=eea&n=","olive_in_global&b=F&r=in&n=","olive_id_global&b=F&r=global&n=","olive_ru_global&b=F&r=ru&n=","olivelite_global&b=F&r=global&n=","olivelite_eea_global&b=F&r=eea&n=","olivelite_in_global&b=F&r=in&n==","olivelite_id_global&b=F&r=global&n=","olivelite_ru_global&b=F&r=ru&n=","olivewood_global&b=F&r=global&n=","olivewood_eea_global&b=F&r=eea&n=","olivewood_in_global&b=F&r=in&n==","olivewood_id_global&b=F&r=global&n=","olivewood_ru_global&b=F&r=ru&n=","ysl_global&b=F&r=global&n=","ysl_global&b=F&r=in&n=","ysl_ru_global&b=F&r=global&n=","onc_in_global&b=F&r=in&n=","whyred_global&b=F&r=global&n=","whyred_ru_global&b=F&r=global&n=","tulip_global&b=F&r=global&n=","tulip_ru_global&b=F&r=ru&n=","lavender_global&b=F&r=global&n=","lavender_eea_global&b=F&r=eea&n=","lavender_in_global&b=F&r=in&n=","lavender_ru_global&b=F&r=global&n=","violet_in_global&b=F&r=in&n=","ginkgo_global&b=F&r=global&n=","ginkgo_in_global&b=F&r=in&n=","ginkgo_id_global&b=F&r=global&n=","willow_global&b=F&r=global&n=","willow_in_global&b=F&r=in&n=","willow_eea_global&b=F&r=eea&n=","willow_ru_global&b=F&r=global&n=","begonia_global&b=F&r=global&n=","begonia_eea_global&b=F&r=eea&n=","begoniain_in_global&b=F&r=in&n=","begonia_id_global&b=F&r=global&n=","begonia_ru_global&b=F&r=ru&n=","merlin_global&b=F&r=global&n=","merlin_eea_global&b=F&r=eea&n=","curtana_global&b=F&r=global&n=","curtana_eea_global&b=F&r=eea&n=","curtana_in_global&b=F&r=in&n=","curtana_ru_global&b=F&r=ru&n=","joyeuse_global&b=F&r=global&n=","joyeuse_eea_global&b=F&r=eea&n=","joyeuse_id_global&b=F&r=id&n=","joyeuse_ru_global&b=F&r=ru&n=","excalibur_global&b=F&r=global&n=",);

echo "国内版";
echo "<br>";
echo "<table><thead><tr><td>机型</td><td>版本</td><td>链接</td></tr></thead><tbody>";
    foreach ($deviceStringChina as $deviceStringChina) {
        $deviceStringChina = $deviceStringChina;
        $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=" . $deviceStringChina;
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
            $clink = $match[0][0];
            $cversion = explode("/",$clink)[3];
            //echo $deviceName[$deviceStringChina] . "&nbsp;线刷包: " . $match[0][0] . "</br>";
            echo "<tr><td>".$deviceName[$deviceStringChina] . "</td><td>".$cversion ."</td><td>" . $clink;
        }
    };
    echo "</tbody></table>";
    echo "<hr>";
    echo "国际版";
    echo "<br>";
    echo "<table><thead><tr><td>机型</td><td>版本</td><td>链接</td></tr></thead><tbody>";
        foreach ($deviceStringGlobal as $deviceStringGlobal) {
        $deviceStringGlobal = $deviceStringGlobal;
        $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=" . $deviceStringGlobal;
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
        preg_match_all('/http.*?tgz/m', $result, $match);
        if ($match[0] == null) {
            //echo "Error @".$device."=>".$deviceName[$device].$url."</br>";
        } else {
            $glink = $match[0][0];
            $gversion = explode("/",$glink)[3];
            //echo $deviceName[$deviceStringGlobal] . "&nbsp;线刷包: " . $match[0][0] . "</br>";
            echo "<tr><td>".$deviceName[$deviceStringGlobal] . "</td><td>".$gversion ."</td><td>" . $glink;
        }
    };
    echo "</tbody></table>";