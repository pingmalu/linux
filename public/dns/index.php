<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="http://webcdn.sinaapp.com/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线DNS查询_Malu.me</title> 
    <meta name="title" content="在线DNS无污染查询" /> 
    <meta name="keywords" content="DNS无污染查询,在线查询DNS,DNS在线查询" /> 
    <meta name="description" content="陋室博客的 在线DNS无污染查询 成立啦" />
    <meta name="author" content="malu" /> 
<link href="//iiii.sinaapp.com/dns/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="menuwrapper">
<div id="fl_left">
	<div id="logo">
		<a href="http://m.malu.me/dns/">在线DNS查询</a>
	</div><!--logo-->
<?php
function makeIPClickableLinks($text) {
    $text = preg_replace('{(\\d+).(\\d+).(\\d+).(\\d+)}','<a href="http://iiii.sinaapp.com/?ip=\1.\2.\3.\4" title="查看该IP归属地">\1.\2.\3.\4</a>', $text);
	return $text;
}

// DNS PHP API Example
/* -------------------------------------------------------------
This file is the PurplePixie PHP DNS Query Classes

The software is (C) Copyright 2008 PurplePixie Systems

This is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

The software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this software.  If not, see www.gnu.org/licenses

For more information see www.purplepixie.org/phpdns
-------------------------------------------------------------- */
require("dns.inc.php");


// ** IGNORE THIS - It's just the web form ** //
if (isset($_REQUEST['server'])) $server=$_REQUEST['server'];
else $server="8.8.4.4";
if (isset($_REQUEST['port'])) $port=$_REQUEST['port'];
else $port=53;
if (isset($_REQUEST['timeout'])) $timeout=$_REQUEST['timeout'];
else $timeout=60;
if (isset($_REQUEST['tcp'])) $udp=false;
else $udp=true;
if (isset($_REQUEST['debug'])) $debug=true;
else $debug=false;
if (isset($_REQUEST['binarydebug'])) $binarydebug=true;
else $binarydebug=false;
if (isset($_REQUEST['extendanswer'])) $extendanswer=true;
else $extendanswer=false;
if (isset($_REQUEST['type'])) $type=$_REQUEST['type'];
else $type="A";
if (isset($_REQUEST['question'])) $question=$_REQUEST['question'];
else $question="malu.me";

echo "<form action=./ method=get>";
echo "<input type=hidden name=doquery value=1>";
echo "Query <input class=field type=text name=question size=50 value=\"".$question."\"> ";
echo "<select class=field name=type>";
echo "<option value=".$type.">".$type."</option>";
echo "<option value=A>A</option>";
echo "<option value=MX>MX</option>";
echo "<option value=PTR>PTR</option>";
echo "<option value=SOA>SOA</option>";
echo "<option value=NS>NS</option>";
echo "<option value=ANY>ANY</option>";
echo "<option value=SMARTA>SmartA</option>";
echo "</select><br><br>";
echo "Nameserver <input id=dns class=field type=text name=server size=30 value=\"".$server."\"> ";
echo "port <input class=field type=text name=port size=4 value=\"".$port."\"><br><br>";

if (!$udp){
 $s=" checked";
 }elseif(!isset($_GET['server'])){
 $s=" checked";
 }else{
 $s="";
 }
echo "<input type=checkbox name=tcp value=1".$s."> use TCP, ";

if ($debug) $s=" checked";
else $s="";
echo "<input type=checkbox name=debug value=1".$s."> show debug, ";

if ($binarydebug) $s=" checked";
else $s="";
echo "<input type=checkbox name=binarydebug value=1".$s."> show binary,";

if ($extendanswer) $s=" checked";
else $s="";
echo "<input type=checkbox name=extendanswer value=1".$s."> show detail<br><br>";

echo "<input class=bt_login type=submit value=\"查询DNS\"><br><br><div id=wrapper_zuonei>";


// ** HERE IS THE QUERY SECTION ** //

if (isset($_REQUEST['doquery']))
{
echo "<pre>";
$query=new DNSQuery($server,$port,$timeout,$udp,$debug);
if ($binarydebug) $query->binarydebug=true;

if ($type=="SMARTA")
	{
	echo "Smart A Lookup for ".$question."\n\n";
	$hostname=$query->SmartALookup($question);
	echo "Result: ".$hostname."\n\n";
	echo "</pre>";
	exit();
	}

echo "Querying: ".$question." -t ".$type." @".$server."\n";

$result=$query->Query($question,$type);

if ($query->error){
	echo "\nQuery Error: ".$query->lasterror."\n\n";
	// exit();
}else{
	echo "Returned ".$result->count." Answers\n\n";
}
function ShowSection($result)
{
global $extendanswer;
for ($i=0; $i<$result->count; $i++)
	{
	echo $i.". ";
    if ($result->results[$i]->string=="") {
		echo makeIPClickableLinks($result->results[$i]->typeid."(".$result->results[$i]->type.") => ".$result->results[$i]->data);
    }else{
        echo makeIPClickableLinks($result->results[$i]->string);
    }
	echo "\n";
	if ($extendanswer) 
		{
		echo " - record type = ".$result->results[$i]->typeid." (# ".$result->results[$i]->type.")\n";
		echo " - record data = ".$result->results[$i]->data."\n";
		echo " - record ttl = ".$result->results[$i]->ttl."\n";
		if (count($result->results[$i]->extras)>0) // additional data
			{
			foreach($result->results[$i]->extras as $key => $val)
				{
				echo " + ".$key." = ".$val."\n";
				}
			}
		}
	echo "\n";
	}
}
ShowSection($result);

if ($extendanswer)
	{
	echo "\nNameserver Records: ".$query->lastnameservers->count."\n";
	ShowSection($query->lastnameservers);
	
	echo "\nAdditional Records: ".$query->lastadditional->count."\n";
	ShowSection($query->lastadditional);
	}

echo "</pre>";
}
?>
</div> <!-- end of wrapper_zuonei -->
</div> <!-- fl_left end-->
<div id="fl_right">
  <h4>公共 DNS 服务器 IP 地址</h4>
    <div style="margin-top:20px">
      <table>
        <thead>
          <tr>
            <th>国外</th>
            <th colspan="2">DNS服务器 IP 地址</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Google DNS</td>
            <td class="on">8.8.8.8</td>
            <td class="on">8.8.4.4</td>
          </tr>
          <tr>
            <td>OpenDNS</td>
            <td class="on">208.67.222.222</td>
            <td class="on">208.67.220.220</td>
          </tr>
          <tr>
            <td>OpenDNS Family</td>
            <td class="on">208.67.222.123</td>
            <td class="on">208.67.220.123</td>
          </tr>
          <tr>
            <td>V2EX DNS</td>
            <td class="on">199.91.73.222</td>
            <td class="on">178.79.131.110</td>
          </tr>
          <tr>
            <td>Comodo Secure</td>
            <td class="on">8.26.56.26</td>
            <td class="on">8.20.247.20</td>
          </tr>
          <tr>
            <td>UltraDNS</td>
            <td class="on">156.154.70.1</td>
            <td class="on">156.154.71.1</td>
          </tr>
          <tr>
            <td>Norton CS</td>
            <td class="on">199.85.126.10</td>
            <td class="on">199.85.127.10</td>
          </tr>
          <tr><th>国内</th><th colspan="2">DNS服务器 IP 地址</th></tr>
          <tr>
            <td>阿里 AliDNS</td>
            <td class="on">223.5.5.5</td>
            <td class="on">223.6.6.6</td>
          </tr>
          <tr>
            <td>CNNIC SDNS</td>
            <td class="on">1.2.4.8</td>
            <td class="on">210.2.4.8</td>
          </tr>
          <tr>
            <td>114 DNS</td>
            <td class="on">114.114.114.114</td>
            <td class="on">114.114.115.115</td>
          </tr>
          <tr>
            <td>114 DNS安全版</td>
            <td class="on">114.114.114.119</td>
            <td class="on">114.114.115.119</td>
          </tr>
          <tr>
            <td>114 DNS家庭版</td>
            <td class="on">114.114.114.110</td>
            <td class="on">114.114.115.110</td>
          </tr>
          <tr>
            <td>one | Opener DNS</td>
            <td class="on">112.124.47.27</td>
            <td class="on">42.120.21.30</td>
          </tr>
          <tr>
            <td>百度公共DNS</td>
            <td class="on">180.76.76.76</td>
            <td class="on"></td>
          </tr>
        </tbody>
      </table>
      <p>↑ 试试点击DNS地址</p>
      <p>　</p>
      <p>注：由于服务器限制，UDP协议只能在<a href="http://m.malu.me/dns/?server=8.8.8.8" title="CloudControl版DNS查询工具">CloudControl版</a>进行查询</p>
    </div>
</div><!-- fl_right end-->
</div> <!-- end of menuwrapper -->
<script src="//webcdn.sinaapp.com/mon/js/jquery.min.js"></script>
<script src="//webcdn.sinaapp.com/js/jquery-ui.min.js"></script>
<script src="//webcdn.sinaapp.com/js/copyleft.js"></script>
<script src="//iiii.sinaapp.com/dns/dns.js"></script>
</body>
</html>
