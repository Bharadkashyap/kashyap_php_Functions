<?php
$abstract = "This research explores the impact of climate change on agriculture and food security.";
$keywords = ["climate", "food", "security", "technology"];

function searchKeywords($text, $keywords) {
    $found = [];
    foreach ($keywords as $word) {
        if (stripos($text, $word) !== false) {
            $pos = stripos($text, $word);
            $start = max(0, $pos - 20);
            $length = strlen($word) + 40;
            $context = substr($text, $start, $length);
            $found[$word] = trim($context);
        }
    }
    return $found;
}

$results = searchKeywords($abstract, $keywords);

if (!empty($results)) {
    foreach ($results as $keyword => $context) {
        echo "Keyword '{$keyword}' found in context: ...{$context}...\n";
    }
} else {
    echo "No keywords found in the abstract.";
}
?>
