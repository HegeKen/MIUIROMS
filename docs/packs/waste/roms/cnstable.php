<?php
include("devices.php");
echo "大陆稳定版";
echo "<br>";
echo "<table><thead><tr><td>机型</td><td>检测到版本</td><td>最新收录的版本</td><td>链接</td></tr></thead><tbody>";
    foreach ($cnDevices as $cnDevices) {
        $cnDevices = $cnDevices;
        $url = "http://update.miui.com/updates/v1/fullromdownload.php?d=" . $cnDevices;
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
            if($cversion == $cnCurrent[$cnDevices]){
                //echo "<tr><td>" .$deviceName[$cnDevices] . "</td><td>" . $cversion ."</td><td>" . $cnCurrent[$cnDevices] ."</td><td>未发现更新</td></tr>";
            }else{
                echo "<tr><td>" .$deviceName[$cnDevices] . "</td><td>" . $cversion ."</td><td>" . $cnCurrent[$cnDevices] ."</td><td>" . $clink ."</td></tr>";
            }
        }
    };
    echo "</tbody></table>";