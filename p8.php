<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		a{
			margin: 30px;
		}
	</style>
</head>
<body>
<?php
$ans = null;
if (isset($_POST['submit'])) {
	$ex = $_POST['exp'];
	$ans = eval('return '.$ex.";");
}
?>
<form name="calc" action="" method="POST" style="text-align:center; margin-top: 10%;">
	<input type="text" name="exp" id="exp" value="<?php if(!is_null($ans)) echo($ans);?>" placeholder="Enter expression here" oninput="titl();">
	<input type="submit" name="submit" value="=" id="eq">
</form>
<br><br><br>
<center><p><a href="p8b.php">8b</a><a href="p8c.php">8c</a><a href="p8d.php">8d</a></p></center>
<script type="text/javascript">
	function titl() {
		var x = document.getElementById('exp').value;
		document.getElementById('eq').title = "eval("+x+")";
	}
</script>
</body>
</html>