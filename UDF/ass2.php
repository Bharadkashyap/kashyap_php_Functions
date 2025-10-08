<?php



function area($l,$w)
{
	$a=$l*$w;
	return $a;
}
$l=10;
$w=109;
echo "A rectangle of lenth $l and width $w has an area of ".area($l,$w);

?>