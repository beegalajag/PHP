<?php


echo _fibonocci(3);

	# code...


 function _fibonocci($n){

/*	$a=0; echo $a;
	$b=1;echo $b;
for($i=2; $i<$length-2;$i++)
{
	$c=$a+$b;
	echo $c;

	$a=$b;
	$b=$c;

}

*/
if($n == 0)
{
	return 0;
}
if($n == 1)
{
	return 1;
}
return _fibonocci($n-2) + _fibonocci($n-1);

}

?>