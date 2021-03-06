<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
header('Access-Control-Allow-Origin:http://ip.malu.me');
function makeIPClickableLinks($text) {
    $text = preg_replace('/(\d+)\.(\d+)\.(\d+)\.(\d+)/is','<a href="http://ip.malu.me/?ip=\1.\2.\3.\4" title="查看该IP归属地">\1.\2.\3.\4</a>', $text);
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
else $server="8.8.8.8";
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

/*echo "<form action=./ method=get>";
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

echo "<input class=bt_login type=submit value=\"查询DNS\"><br><br><div id=wrapper_zuonei>";*/


// ** HERE IS THE QUERY SECTION ** //

if (isset($_REQUEST['doquery']))
{
$query=new DNSQuery($server,$port,$timeout,$udp,$debug);
if ($binarydebug) $query->binarydebug=true;

if ($type=="SMARTA")
	{
	echo "Smart A Lookup for ".$question."\n\n";
	$hostname=$query->SmartALookup($question);
	echo "Result: ".$hostname."\n\n";
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

if ($extendanswer){
	echo "\nNameserver Records: ".$query->lastnameservers->count."\n";
	ShowSection($query->lastnameservers);
	
	echo "\nAdditional Records: ".$query->lastadditional->count."\n";
	ShowSection($query->lastadditional);
}

}
?>