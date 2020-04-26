<!DOCTYPE html>
<html>
<head>
	<title>ML programs</title>
	<meta charset="utf-8">
	<meta name="description" content="Machine Learning - Minimized Programs by CKashi">
	<meta name="keywords" content="Python">
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
	        color: green;
	    }
	</style>
</head>
<body>
    <div align="center">
	<h3>ML Lab</h3>
	<table border='2'>
	    <tr>
	        <th>Program No.</th>
	        <th>Link to txt file</th>
	        <th>Download link</th>
	    </tr>
	    <?php
	    for($i=1;$i<11;$i++){
	        if($i == 3)
	            continue;
	        $name = "ck/ml".$i.".txt";
	        $lnk = "<a href='".$name."' target='_blank'> Program Code ".$i."</a>";
	        $down = "<a href='".$name."' download='".$name."'> Download</a>";
	        echo "<tr><td>".$i."</td><td>".$lnk."</td><td>".$down."</td></tr>";
	    }
	    ?>
	</table>
	<p>...<br>Please read instructions to execute all the above programs - <a href="instructions.php">Instructions</a></p>
	<p>3rd Program is excluded from External Lab Exam</p>
	<span><b>1,2,4,5,6,7,8,9,10 Have been updated by Rakesh M R</b></span>
	<p>Updated programs are working fine... Enjoy</p>
	<p><code>* If you have better code please send the txt file to rakeshmr20@gmail.com </code></p>
	</div>
</body>
</html>