<?php
header("Content-Type: image/jpeg");
echo file_get_contents("smile.jpg");

$fp = fopen('log.txt', 'a+');

$str = date('Y/m/d H:i:s')." / ".$_SERVER['REMOTE_ADDR']." / ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n";
fwrite($fp,$str);
fclose($fp);

?>