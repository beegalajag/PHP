<?php
$numbers = array(1,3,6,9,4,7);
$digit = count($numbers);
for($i=1; $i< $digit; $i++)
{
	$temp = $numbers[$i];
	$j = $i-1;
	while(($temp < $numbers[$j]) && ($j>=0))
	{
		$numbers[$j+1] = $numbers[$j];
		$j=$j-1;
	}
	$numbers[$j+1]=$temp;
}
foreach ($numbers as  $value) {

	echo $value;

	}

?>
