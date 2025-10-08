<?php

function vote($a)
{

	if($a>18)
	{
	 echo "<font color=blue>person is eligible for vote age is=</font>".$a;
	 }
	 else
	 {
	  echo "<font color=red>not eligible for vote age is =</font>".$a;
	 }
 }
 vote(14);
 



?>