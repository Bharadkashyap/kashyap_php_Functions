<?php
$GLOBALS['count'] = 0;

function addOne() {
    $GLOBALS['count']++;
}

addOne();
addOne();
echo "Count is: " . $GLOBALS['count'];
?>
