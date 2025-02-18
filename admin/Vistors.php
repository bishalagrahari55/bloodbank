<?php 
error_reporting(0);
$ua = $_SERVER["HTTP_USER_AGENT"];
$page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";  
$referrer = $_SERVER['HTTP_REFERER']; 
$user_os = "";
//Os
//windows
if(preg_match('/Windows 98/',$ua)) $user_os  = 'Windows 98';
elseif(preg_match('/Windows NT 5.0/',$ua)) $user_os = 'Windows 2000 ';
elseif(preg_match('/Windows NT 5.1/',$ua)) $user_os = 'Windows Xp';
elseif(preg_match('/Windows NT 6.0/',$ua)) $user_os = 'Windows Vista';
elseif(preg_match('/Windows NT 6.1/',$ua)) $user_os = 'Windows 7';
elseif(preg_match('/Windows NT 6.2/',$ua)) $user_os = 'Windows 8';
elseif(preg_match('/Windows NT 10.0/',$ua)) $user_os = 'Windows 10';
$user_browser = "";
//Browser
if(preg_match('/MSIE/',$ua)) $user_browser  = 'Internet explorer';
elseif(preg_match('/Trident/',$ua)) $user_browser = 'Internet explorer';
elseif(preg_match('/Firefox/',$ua)) $user_browser = 'Mozilla Firefox';
elseif(preg_match('/Chrome/',$ua)) $user_browser  = 'Google Chrome';
elseif(preg_match('/Opera Mini/',$ua)) $user_browser = 'Opera Mini';
elseif(preg_match('/Opera/',$ua)) $user_browser = 'Opera';
elseif(preg_match('/Safari/',$ua)) $user_browser = 'Safari';
//Client Ip
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$user_ip        =   get_client_ip_env();
if ($referrer = " ");
$referrer = 'none';
$client_details =   "
<strong>Time:</strong>" .date('m-d-Y H:i:s') ."<br />
<strong>Operating System:</strong>" .$user_os."<br />
<strong>Browser: </strong>".$user_browser."<br />
<strong>System Ip:</strong>" .$user_ip."<br />
<strong>Referrer: </strong>".$referrer."<br /> 
<strong>Current Page: </strong>".$page." ";

//print_r($client_details);
$link = date('m-d-Y H:i:s') . " - $user_os" . " - $user_browser" . " - $user_ip" . " - $referrer" . " - $page";
file_put_contents('visitors.log', $link . PHP_EOL, FILE_APPEND);
?>