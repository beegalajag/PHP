
<?php
$numbers = array(10,7,5,11,2,1,8,15);
$digit = count($numbers);
 $first =$numbers[0];
 $last = $numbers[$digit-1];
 $pivot = $first;
  echo quicksort($numbers,$first,$last);
/*
 function quicksort($numbers , $first, $last)
{
	if($first < $last)
	$mid = partition($numbers, $first, $last);
	quicksort($numbers, $first, $mid);
	quicksort($numbers, $mid+1, $last);
	echo $numbers;
	
} */
function quicksort($numbers, $first , $last)
{
	if($first < $last)
	{
     $i = $first;
     $j = $last;

    $pivot = $first;

    while($i<$j)
    {
    	while(($numbers[$i] < $numbers[$pivot]) && ($numbers[$i] != $numbers[$pivot]) )
    		$i++;
    	while(($numbers[$j] > $numbers[$pivot]) && ($numbers[$j] != $numbers[$pivot]) )
    		$j--;
    	if($i < $j)
    	{
    		$temp = $numbers[$i];
    		$numbers[$i] = $numbers[$j];
    		$numbers[$j] = $temp;

    	}
    }
    	 $temp=$numbers[$pivot];
         $numbers[$pivot] = $numbers[$j];
         $numbers[$j]=$temp;
         quicksort($numbers,$first,$j-1);
         quicksort($numbers,$j+1,$last);


    }
	 
}




?>