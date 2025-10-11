<?php

$flower=array(
			"rose"=>array("color"=>"red","price"=>5,"qty"=>10),
			"orchid"=>array("color"=>"white","price"=>15,"qty"=>7),
			"sunflower"=>array("color"=>"yellow","price"=>10,"qty"=>6)
		);
foreach($flower as $k=>$v)
{
	echo $k."  ";
	
	foreach($v as $a=>$b)
	{
			echo $a." is ".$b."  ";
	}
	echo "<br>";
}
?>

		
			