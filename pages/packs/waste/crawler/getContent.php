<?php
$url = "http://www.miui.com/archiver/?tid-1331.html";
function curl_get_file_contents($url, $referer = 'http://www.miui.com/archiver/?tid-1331.html')
{
    static $curl_loops = 0; //避免死了循环必备
    static $curl_max_loops = 3;
    $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";

    $ch = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_REFERER, $referer);
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
    curl_setopt($curl, CURLOPT_NOBODY, true); //不返回内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
    $data = curl_exec($ch);
    $ret = $data;
    list($header, $data) = explode("\r\n\r\n", $data, 2);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $last_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);
    if ($http_code == 301 || $http_code == 302) {
        $matches = array();
        preg_match('/Location:(.*?)\n/', $header, $matches);
        $url = @parse_url(trim(array_pop($matches)));
        if (!$url) {
            return $data;
        }
        $new_url = $url['scheme'] . '://' . $url['host'] . $url['path'] . (isset($url['query']) ? '?' . $url['query'] : '');
        if ($curl_loops++ >= $curl_max_loops) {
            return false;
        } else {
            $new_url = stripslashes($new_url);
            return curl_get_file_contents($new_url);
        }
    } else {
        list($header, $data) = explode("\r\n\r\n", $ret, 2);
        return $data;
    }
}
function get_title_contents($html)
{
    // 解析 HTML 的 <head> 区段
    //    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    //    <meta content="text/html; charset=gb2312" http-equiv="Content-Type">
    preg_match("/<head.*>(.*)<\/head>/smUi", $html, $htmlHeaders);
    //var_dump($output);die();
    if (!count($htmlHeaders)) {
        $title = "无法解析数据中的 <head> 区段";
    }

// 取得 <head> 中 meta 设置的编码格式<meta charset="gb2312">
    if (preg_match('/<meta.*charset=(("){0,1}[a-zA-Z0-9-]*("){0,1})/', $htmlHeaders[1], $results)) {
        $charset = $results[1];
    } else {
        $charset = "None";
    }
    $charset = str_replace('"', '', $charset);

// 取得 <title> 中的文字
    if (preg_match("/<title>(.*)<\/title>/Ui", $htmlHeaders[1], $htmlTitles)) {
        if (!count($htmlTitles)) {
            $title = "无法解析 <title> 的内容";
            exit;
        }

        // 将  <title> 的文字编码格式转成 UTF-8
        if ($charset == "None") {
            $title = $htmlTitles[1];
        } else {
            $title = iconv($charset, "UTF-8", $htmlTitles[1]);
        }
    }
    return html_entity_decode($title);
}

// while ($i < 1561) {
//     $url = "http://www.miui.com/archiver/?tid-" . $i. ".html";
//     $referer = "http://www.miui.com/archiver/?tid-1331.html";
//     $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
//     echo $url;
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($curl, CURLOPT_REFERER, $referer);
//     curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
//     curl_setopt($curl, CURLOPT_HEADER, true); //返回头信息
//     curl_setopt($curl, CURLOPT_NOBODY, true); //不返回内容
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //返回数据不直接输出
//     $result = curl_exec($curl);
//     var_dump($result);
//     $i++;
//     //preg_match_all('/http.*?tgz/m', $result, $match);
// }
