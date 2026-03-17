<?php

header("Content-Type: audio/x-mpegurl");

$base="https://nl202.cdnsqu.com/s/FHvFTGczR9m3OKEBukJvq2uUFBQUFBQUFBQUFBUmxDWGtRZm9BdFlEd0RFTT0.E5ofU_om0f0J6vYgNaCrj0h_RjBqB2hMr69HsQ/the.real.ghostbusters-1986/";

echo "#EXTM3U\n";

for($i=1;$i<=65;$i++){

$ep=str_pad($i,2,"0",STR_PAD_LEFT);

echo "#EXTINF:-1 tvg-name=\"The Real Ghostbusters S01E$ep\" group-title=\"Ghostbusters\",The Real Ghostbusters S01E$ep\n";

echo $base."s01e".$ep."_480.mp4\n";

}

$config=json_decode(file_get_contents("ghostbusters.json"),true);
$base=$config["cdn"];
