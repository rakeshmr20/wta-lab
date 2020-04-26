<!DOCTYPE html>
<?php
$exp = time()+24*60*60;
$name = "uid";
$value = "ckashi";
setcookie($name,$value,$exp);
if (isset($_COOKIE['uid'])) {
	//echo($_COOKIE['uid']);
}
$s = serialize(array($name => $value));
//echo($s);
$a = unserialize($s);
//var_dump($a);
/**
 * class example
 */
class artist {
	
	function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

$nn = new artist('rakesh');
echo($nn->getName());
?>
<html>
<head>
	<title>Test</title>
	<style type="text/css">
		input[type="button"] {
			display: block;
		}
		tr,td,table {
			border: 2px solid green;
			border-top: black;
			border-bottom: pink;
		}
		input[type="range"]{
			width: 500px;
		}
		input {
			text-decoration: none;
			border: none;
		}
	</style>
	<script type="text/javascript">
		function disp() {
			//setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 5000);
			/*var n = document.getElementById('val').value;
			if (isNaN(n)) {
				
			} else {
				n += "";
				var rev = n.split("").reverse().join("");
				alert("Number : "+n+"\nReverse Order : "+rev);
			}*/
			document.getElementById('vvv').value = document.getElementById('r').value;
		}
		function ch() {
			document.getElementById('r').value = document.getElementById('vvv').value;
		}
		$(document).ready(function(){
			//setTimeout(function(){
				//window.close();
			//},4000);
			//setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 3000);
		});
	</script>
</head>
<body>
	<!--<center>
		<h2><abbr title="dbvjyshvhtvhjbhbv">dhfgjyg</abbr></h2>
		<input type="text" id="val" placeholder="Enter STRING or NUMBER" size="50">
		<input type="button" value="Validate" onclick="validate();">oninput="ch();"
	</center>-->
	<center>
		<input type="Number" name="vvv" min="0" max="100"  id="vvv" onchange="ch();">
	
		<form name="cal">
			<input type="range" name="r" min="0" max="100" step="1" onchange="disp();" id="r"><br>
			<input type="color" name="color" onchange="cal.cname.value=cal.color.value;"><br>
			<input type="text" name="cname"><br>
			<input type="reset" name="reset"><br>
		</form>

	</center>
	<!--<table border="2">
		<caption>Table example 1</caption>
		<thead>
			<tr>
				<th>sl no</th>
				<th>name</th>
				<th>eno</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="2">1</td>
				<td colspan="2">rakesh</td>
			</tr>
			<tr>
				
				<td>mrrakesh</td>
				<td>dshdgf</td>
			</tr>
		</tbody>
		<tfoot>
			<td colspan="3">Rakesh M R &copy; 2019</td>
		</tfoot>
	</table>-->
</body>
</html>