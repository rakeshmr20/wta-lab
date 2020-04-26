<?php
function get_user_details() {
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = $_SERVER['HTTP_HOST'];
	//$device_name = preg_match($pat, $agent);
	return $usr = array('usr_agent' => $agent, 'usr_ip' => $ip, 'usr_host' => $host);
}
function write_log($data, $filename) {
	//$filename = "../logs/log.txt";
	$file = fopen($filename,'a+');
	$size = filesize($filename);

	fwrite($file, $data);

	#$filedata = fread($file, $size);

	#echo $filedata;

	fclose($file);
}
function ckGhost($n)
{
	$usr_det = get_user_details();
	$log = date("d/m/y h:i:s A ")." Uagent: ".$usr_det['usr_agent']." IP: ".$usr_det['usr_ip']." Req: ".$n."\r\n";
	write_log($log, "log.txt");
}
if (isset($_GET['w'])) {
	$pfile = $_GET['w'];
	$file = "ck/".$pfile.".txt";
	ckGhost('w'.$pfile);
	echo "<p style='color:red'>You dont have permission to access any content.</p>";
	sleep(3);
	header('Location: http://localhost/wta_manual/');
	//echo "<script type='text/javascript'>setTimeout(function() {close();}, 4000);</script>";
	//echo '<script type="text/javascript">$(document).ready(function(){setTimeout(function(){window.close();},4000);});</script>';
	/*
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 

	readfile ($file);
	exit();*/
}
if (isset($_GET['m'])) {
	$pfile = $_GET['m'];
	$file = "ck/ml".$pfile.".txt";
	ckGhost('m'.$pfile);
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 

	readfile ($file);
	exit();
}
function down($file)
{
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 

	readfile ($file);
	exit();
}
//echo "<p style='color:red'>You dont have permission to access any content.</p>";
?>