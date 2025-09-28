<?php
$env = getenv('APP_ENV'); // Example: 'production' or 'development'

if ($env == 'production') {
    echo "Using production settings.";
} else {
    echo "Using development settings.";
}
?>
