<?php
$file = fopen("../comingsoon.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
while(!feof($file))
{
    $line = fgets($file);
    preg_match_all('/(V.*?XM)/m', $line, $match);
    if ($match[0] == null) {
        //echo "Error @".$device."=>".$deviceName[$device].$url."</br>";
    } else {
echo "https://bigota.d.miui.com/".$match[0][0]."/".$line."<br>";
echo PHP_EOL;
    }
}
fclose($file);
?>