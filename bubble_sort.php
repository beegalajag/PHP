<?php
$numbers = array(1,4,5,3,2,7);
$digit = count($numbers);
for($i=0; $i < $digit; $i++)
{
	for($j=0; $j < $digit-1; $j++)
	{
		if($numbers[$j] > $numbers[$j+1])
		{
		$temp = $numbers[$j];
		$numbers[$j] = $numbers[$j+1];
		$numbers[$j+1] = $temp;
		}
	}
}
foreach ($numbers as  $value) {

	echo $value;

	}
?>