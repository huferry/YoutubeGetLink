<?php

if (!isset($_GET['id']))
{
    return;
}

include('vendor/uto/youtubeurlsgetter/autoload.php');

use YoutubeUrlsGetter\Extractor;
use YoutubeUrlsGetter\VideoUrl;

$vid = $_GET['id'];
$ext = new Extractor(new VideoUrl($vid));
$streams = $ext->getVideoData()->getStreams();
foreach($streams as $s)
{
    if (preg_match('/video\/mp4/', $s->type))
    {
        echo "<a href='$s->url' download='test.mp4'>here</a>";
        break;
    }
}


//echo "<meta http-equiv='refresh' content='0; url=$url' />";