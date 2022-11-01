<?php
$file = fopen("update.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
$ln=1;
while(!feof($file))
{
    $line = fgets($file);
    //echo $line;
    //echo $ln.".\t";
    $ln++;
    preg_match_all('/(V1.*?XM)/m', $line, $match);
    if ($match[0] == null) {
        //echo "Error @".$device."=>".$deviceName[$device].$url."</br>";
    } else {
        //echo "<br>".$match[0][0];
echo "https://bigota.d.miui.com/".$match[0][0]."/".$line."<br>";
echo PHP_EOL;
    }
}
fclose($file);
?>