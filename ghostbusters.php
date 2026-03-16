<?php

header("Content-Type: audio/x-mpegurl");

$base="https://nl202.cdnsqu.com/s/FHVf4SlOXBHLsqYYSB6tqkR0FBQUFBQUFBQUFBUmxCTXdRZm9BdFlEd0RFTT0.luAqxZzFcvik69thMaDDJos5TjwDQ2FYcj9QDA/the.real.ghostbusters-1986/";

echo "#EXTM3U\n";

for($i=1;$i<=65;$i++){

$ep=str_pad($i,2,"0",STR_PAD_LEFT);

echo "#EXTINF:-1 tvg-name=\"The Real Ghostbusters S01E$ep\" group-title=\"Ghostbusters\",The Real Ghostbusters S01E$ep\n";

echo $base."s01e".$ep."_480.mp4\n";

}

?>