<?php
echo _factorial(3);
function _factorial($n)
{
	if($n==1)
		return 1;

	return ($n) * _factorial($n-1);
}

?>