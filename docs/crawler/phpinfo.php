<?php
// echo phpinfo();
echo "wayback_machine_downloader http://en.miui.com/download.html --all-timestamps --concurrency 5 & wayback_machine_downloader http://www.miui.com/download.html  --all-timestamps --concurrency 5";
echo "\n";
for($i=1;$i<=400;$i++){
    echo "wayback_machine_downloader http://en.miui.com/download-".$i.".html --all-timestamps --concurrency 5 & wayback_machine_downloader http://www.miui.com/download-".$i.".html  --all-timestamps --concurrency 5";
    echo "\n";
};