<?php

$numbers= array(1,3,4,6,7,8,9);
$digit = count($numbers);


$s_number = -1;
$flag=0;

	for($i=0; $i<$digit; $i++)
	{
		if($s_number == $numbers[$i])
        {
			echo "the number has found";
			$flag=1;
        }
       
	}
	if($flag == 0)
		echo "the number has not found";





?>