<?php

if(!function_exists('file_get_contents')) {
	echo '这个主机目前不支持 file_get_contents 模块';
}
if(!function_exists('curl_init')) {
	echo '这个主机目前不支持 curl_init 模块';
}
if(!function_exists('allow_url_fopen')) {
	echo '这个主机目前不支持 allow_url_fopen 模块';
}

ini_set('display_errors', 0);//设置关闭错误提示
function px_show($msg){
$px_html=<<<EOF
<!DOCTYPE html><html>
<head>
<link rel="shortcut icon" href="http://malu.me/favicon.ico"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小马中转站 V2 by malu.me</title>
<link href="http://cdn1.malu.me/share/css/xm_px.css" rel="stylesheet">
</head>
<body>
<div class="header"><div class="container">
<script type="text/javascript" src="http://cdn1.malu.me/share/js/xm_px_v2.js"></script>
<div class="error">{$msg}</div>
</div></div>
</body>
</html>
EOF;
print $px_html;
}

// print($_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].''.$_SERVER['CONTENT_TYPE']);
// echo substr($_SERVER['REQUEST_URI'],1);
// echo 'http://'.substr($_SERVER['REQUEST_URI'],1);
/*if(filter_var(substr($_SERVER['REQUEST_URI'],1), FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = substr($_SERVER['REQUEST_URI'],1);
}elseif(filter_var('http://'.substr($_SERVER['REQUEST_URI'],1), FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = 'http://'.substr($_SERVER['REQUEST_URI'],1);
}elseif(filter_var('http://'.substr($_SERVER['REQUEST_URI'],1).'/', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = 'http://'.substr($_SERVER['REQUEST_URI'],1).'/';
}elseif(substr($_SERVER['REQUEST_URI'],1) != ''){
	$msg = "URL地址出错!".$_SERVER['REQUEST_URI'];
	px_show($msg);
	exit();
}*/
$url = $_SERVER['QUERY_STRING'];

if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = $url;
}elseif(filter_var('http://'.$url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = 'http://'.$url;
}elseif(filter_var('http://'.$url.'/', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
	$q_url = 'http://'.$url.'/';
}elseif($url != ''){
	$msg = "URL地址出错!".$url;
	px_show($msg);
	exit();
}


if (!isset($q_url)) {
	px_show($msg);
	exit();
}



$host_arr = parse_url($q_url);
// exit();
$mirror = $host_arr['host'];		// Change this value to the site you want to mirror.
// echo $mirror;
// exit();
$req = $_SERVER['REQUEST_METHOD'] . ' ' .  $host_arr['path'].$host_arr['query']. " HTTP/1.0\r\n";
$length = 0;
foreach ($_SERVER as $k => $v) {
	if (substr($k, 0, 5) == "HTTP_") {
		$k = str_replace('_', ' ', substr($k, 5));
		$k = str_replace(' ', '-', ucwords(strtolower($k)));
		if ($k == "Host")
			$v = $mirror;						# Alter "Host" header to mirrored server
		if ($k == "Accept-Encoding")
			$v = "identity;q=1.0, *;q=0";		# Alter "Accept-Encoding" header to accept unencoded content only
		if ($k == "Keep-Alive")
			continue;							# Drop "Keep-Alive" header
		if ($k == "Connection" && $v == "keep-alive")
			$v = "close";						# Alter value of "Connection" header from "keep-alive" to "close"
		$req .= $k . ": " . $v . "\r\n";
	}
}


$body = @file_get_contents('php://input');
$req .= "Content-Type: " . $_SERVER['CONTENT_TYPE'] . "\r\n";
$req .= "Content-Length: " . strlen($body) . "\r\n";
$req .= "\r\n";
$req .= $body;

#print $req;

$fp = fsockopen($mirror, 80, $errno, $errmsg, 30);
if (!$fp) {
	// print "HTTP/1.0 502 Failed to connect remote server\r\n";
	// print "Content-Type: text/html\r\n\r\n";
	$msg='链接失效!';
	px_show($msg);
	exit();
	// print $px_html;
	// print "<html><body>无法访问 $mirror :[$errno] $errstr</body></html>";
	// exit;
}

fwrite($fp, $req);

$headers_processed = 0;
$reponse = '';
while (!feof($fp)) {
	$r = fread($fp, 8192);
	if (!$headers_processed) {
		$response .= $r;
		$nlnl = strpos($response, "\r\n\r\n");
		$add = 4;
		if (!$nlnl) {
			$nlnl = strpos($response, "\n\n");
			$add = 2;
		}
		if (!$nlnl)
			continue;
		$headers = substr($response, 0, $nlnl);
		$cookies = 'Set-Cookie: ';
		if (preg_match_all('/^(.*?)(\r?\n|$)/ims', $headers, $matches))
			for ($i = 0; $i < count($matches[0]); ++$i) {
				$ct = $matches[1][$i];
#				if (substr($ct, 0, 12) == "Set-Cookie: ") {
#					$cookies .= substr($ct, 12) . ',';
#					header($cookies);
#				} else
					header($ct, false);
#				print '>>' . $ct . "\r\n";
			}
		print substr($response, $nlnl + $add);
		$headers_processed = 1;
	} else
		print $r;
}
fclose ($fp);
?>
