<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobile())
{
	header("location:https://drive.google.com/uc?export=download&id=0B5K4aSmY_-p3RDFucTRzMUZyRFU");
}
else
header("location:home.html");
?>