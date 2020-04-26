<?php
$count =0;
$file = fopen("count.txt", 'a+');
$count = fread($file, 10);
fclose($file);
$count++;
echo "<center><h2>Number of Visitors: ".$count."</h2></center>";
$file = fopen("count.txt", 'w');
fwrite($file, $count);
fclose($file);
?>