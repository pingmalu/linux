<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="zh-cn" />
</head>
<body>
<form action="" method="post">
<input id="title" name="m" type="text" size="23">
<input class="bt_bk" type="submit" name="submit" value="send">
</form>
<a href="http://proxychk.duapp.com/proxy_test/">百度云备用</a>
<a href="http://cdnweb.jd-app.com/proxy/">京东云备用</a>
<a href="http://monitor.gae.malu.me/test/">GAE备用</a>
<?php
if(isset($_POST[m]) && isset($_POST[submit]) ){
	$url = $_POST[m];
	echo file_get_contents($url);
}
?>
</body>
</html>