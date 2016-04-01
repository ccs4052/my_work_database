<?php
if(isset($_POST['youtube_url'])) {
$url = $_POST['youtube_url'];
preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
$id = $matches[1]; // select video id on youtube
$width = 640;
$height = 360;
    echo '<object width="'.$width.'"  height="' . $height . '"><param name="movie" value="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="'.$width.'"  height="' . $height . '"></embed></object>';
}