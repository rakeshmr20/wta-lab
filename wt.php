<?php
include_once 'ck.php';
$usr_det = get_user_details();
$log = date("d/m/y h:i:s A ")." Uagent: ".$usr_det['usr_agent']." Uip: ".$usr_det['usr_ip']."\r\n";
write_log($log,"cklitelog.txt");
?>
<!DOCTYPE html>
<html>
<head>
	<title>WTA programs</title>
	<meta charset="utf-8">
	<meta name="description" content="WTA - Minimized Programs by CKashi">
	<meta name="keywords" content="HTML,PHP,JS,CSS,XML">
	<meta name="author" content="Rakesh M R">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
	    body {
	        font-size: 16pt;
	    }
	    span {
	        color: red;
	    }
	    P {
	        color: #888888;
	    }
	</style>
</head>
<body>
    <div align="center">
	<h3>WTA Lab</h3>
	<table border='2'>
	    <tr>
	        <th>Program No.</th>
	        <th>Link to txt file</th>
	        <th>Download link</th>
	    </tr>
	    <?php
	    for($i=1;$i<11;$i++){
	        $name = "ck/".$i.".txt";
	        $lnk = "<a href='".$name."' target='_blank'> Program Code ".$i."</a>";
	        $down = "<a href='".$name."' download='".$name."'> Download</a>";
	        echo "<tr><td>".$i."</td><td>".$lnk."</td><td>".$down."</td></tr>";
	    }
	    ?>
	</table>
	<p>...</p>
	<p style="font-size: 10pt">Please execute all the programs and verify output</p>
	<p><code>...Use code at your own risk... </code></p>
	</div>
</body>
</html>