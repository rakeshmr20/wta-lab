<?php
//echo "Use Ubuntu to create Database. Read instructions to execute.";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selection sort</title>
	<style type="text/css">
		table, td, th {
			border: 1px solid black;
			width: 33%;
			text-align: center;
			border-collapse:collapse;
			background-color:lightblue;
		}
		table { margin: auto; }
	</style>
</head>
<body>
<?php
$a=[];
$conn = mysqli_connect("localhost", "root", "", "weblab");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr><th>USN</th><th>NAME</th></tr>";
if ($result->num_rows> 0)
{
	while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>". $row["usn"]."</td>";
		echo "<td>". $row["name"]."</td></tr>";

		array_push($a,$row["usn"]);
	}
}
else
echo "Table is Empty";
echo "</table>";
$n=count($a);
for ( $i = 0 ; $i< ($n - 1) ; $i++ )
{
	$pos= $i;
	for ( $j = $i + 1 ; $j < $n ; $j++ )
	{
		if ( $a[$pos] > $a[$j] )
		$pos= $j;
	}
	if ( $pos!= $i )
	{
		$temp=$a[$i];
		$a[$i] = $a[$pos];
		$a[$pos] = $temp;
	}
}
$c=[];
$result = $conn->query($sql);
if ($result->num_rows> 0)
{
	while($row = $result->fetch_assoc())
	{
		for($i=0;$i<$n;$i++)
		{
			if($row["usn"]== $a[$i])
			{
				$c[$i]=$row["name"];
			}
		}
	}
}
echo "<br>";
echo "<center> AFTER SORTING <center>";
echo "<table border='2'>";
echo "<tr><th>USN</th><th>NAME</th></tr>";
for($i=0;$i<$n;$i++)
{
echo "<tr>";
echo "<td>". $a[$i]."</td>";
echo "<td>". $c[$i]."</td></tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>