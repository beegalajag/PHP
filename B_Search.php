<?php
$numbers= array(1,3,4,6,7,8,9);
$digit = count($numbers);
$first = 0;
$last = $digit-1;
$middle = ($first+$last)/2;
$search = 2;
while($first <= $last)
{
    if( $search > $numbers[$middle])
    {
    	$first = $middle + 1;
    }
    else if($numbers[$middle] == $search){
    	echo "the number has found";
    	break;

    }
    else {
    	$last = $middle - 1;
    }
    $middle = ($first+$last)/2;

}

if($first > $last)
	echo "the number not found";
?>