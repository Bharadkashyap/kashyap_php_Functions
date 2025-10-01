<?php
/*5. Write a PHP programto print 5 to 10 using For and ForEach.*/
echo " using For Loop"."<br>";
for($i=5;$i<=10;$i++)
{
    echo "num is:",$i."<br>";
}

echo "using Foreach loop"."<br>";
$num=range(5,10);
foreach( $num as $i)
{
    echo "num is:",$i."<br>";
}
?>