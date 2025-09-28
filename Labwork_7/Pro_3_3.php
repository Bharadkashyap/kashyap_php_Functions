<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_FILES['myfile']['name'];
    echo "Your uploaded file is : " . $filename;
}
?>
<form method="POST" enctype="multipart/form-data">
    Choose file: <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form>
