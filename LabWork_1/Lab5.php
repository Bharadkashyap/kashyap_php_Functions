<form method="post">
  Enter your comment:<br>
  <textarea name="comment" rows="4" cols="50"></textarea><br><br>
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //  Get and clean the comment
    $rawComment = $_POST['comment'];
    $cleanedComment = trim($rawComment);
    $safeComment = htmlspecialchars($cleanedComment);
    $lowerComment = strtolower($cleanedComment);

    //  Define banned words
    $bannedWords = ['spam', 'hack', 'scam', 'virus'];

    //  Check for banned words
    $flagged = false;
    foreach ($bannedWords as $word) {
        if (strpos($lowerComment, $word) !== false) {
            $flagged = true;
            break;
        }
    }

    //  Display result
    echo "<h3>Sanitized Comment:</h3>";
    echo "<p>$safeComment</p>";

    if ($flagged) {
        echo "<p style='color:red;'> Warning: This comment contains banned words.</p>";
    } else {
        echo "<p style='color:green;'> Comment is clean.</p>";
    }
}
?>
