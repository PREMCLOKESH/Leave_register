<?php
error_reporting(0);
$nums = array(23,65,43,21,67,43);
$nums2 = array(45,23,21,20,18,18);
echo "sorted array 1 <br>";
sort($nums);
 $length = count($nums);
for($i = 0; $i < $length; $i++) 
{
 echo $nums[$i]; echo " ";
}
echo "<br>";
echo "sorted array 2 <br>";
sort($nums2);
$length = count($nums2);
for($i = 0; $i < $length; $i++) {
 echo $nums2[$i]; echo " ";
}
echo "<br>";
$result = array_intersect($nums, $nums2);
echo "Common elements <br>";
$length = count($result);
for($i = 0; $i < $length; $i++) {
 echo $result[$i]; echo " ";
}
echo "<br>";

echo "unique array 1 <br>";
$a=array_unique($nums);
$length = count($a);
for($i = 0; $i < $length; $i++)
 {
 echo $a[$i];
  echo " ";

}
echo "<br>";
echo "unique array 2 <br>";
$a=array_unique($nums2);
$length = count($a);
for($i = 0; $i < $length; $i++) {
 echo $a[$i]; echo " ";
}
echo "<br>";
?>