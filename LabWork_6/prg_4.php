<?php
function customPlugin() {
    echo "Custom plugin executed successfully!";
}

if (function_exists('customPlugin')) {
    customPlugin();
} else {
    echo "Plugin function not found.";
}
?>
