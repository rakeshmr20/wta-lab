<?php	
$mat1=array(array(1,2),array(3,4),array(5,6));		
$mat2=array(array(2,4,8),array(1,3,5));
echo "<html><head><title>Matrix Multiplication</title></head><body>";
if(count($mat1[0])!=count($mat2)) {
  echo "<h1>Incompatible Matrices</h1>";
  exit(0);
}
$res=array();
echo "<h1>Matrix A:<br/>";
for($i = 0; $i < count($mat1); $i++)
{
  for ($j = 0; $j < count($mat1[0]); $j++)
    {
      echo $mat1[$i][$j] . " ";
    }
    echo "<br/>";
}
echo "</h1>";
echo "<h1>Matrix B:<br/>";
for($i = 0; $i < count($mat2); $i++)
{
  for ($j = 0; $j < count($mat2[0]); $j++)
    {
      echo $mat2[$i][$j] . " ";
    }
  echo "<br/>";
}
echo "</h1>";
for($i = 0; $i < count($mat1); $i++)
  for($j = 0; $j < count($mat2[0]); $j++)
  {
    $res[$i][$j]=0;
    for($k=0;$k<count($mat2);$k++)
      $res[$i][$j]=$res[$i][$j]+$mat1[$i][$k]*$mat2[$k][$j];
  }
echo "<h1>A x B:<br/>";
for($i = 0; $i < count($res); $i++)
{
  for ($j = 0; $j < count($res); $j++)
    {
      echo $res[$i][$j] . " ";
    }
    echo "<br/>";
}
echo "</h1>";
echo "</body></html>";
?>