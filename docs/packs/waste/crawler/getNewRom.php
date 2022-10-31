<?php
    $url = "https://api-alpha.vip.miui.com/api/alpha/detail?planId=131&sid=vip";
    $referer = "https://web.vip.miui.com/page/info/mio/mio/testDetails?id=131";
    
    $userAgent = "Linux; U; Android 8.0.0; zh-cn; MI 6 Build/OPR1.170623.027) XiaoMi/MiuiBrowser/10.4.0-Beta app/vipaccount ";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
    $result = curl_exec($curl);
    var_dump($result);