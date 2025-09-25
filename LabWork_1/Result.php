<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter Maths:<input type="number" name="math" ><br>
        Enter DS:<input type="number" name="DS" ><br>
        Enter OS:<input type="number" name="OS" ><br>
        Enter DBMS:<input type="number" name="DBMS" ><br>
        Enter C:<input type="number" name="C" ><br>
      <input type="submit" name="submit" ><br>
    </form>

    
</body>
</html>
<?php
$name="Kashyap Bharad";
$rollno=01;
$name="Kashyap Bharad";

if(isset($_POST["submit"]))
{
    
$math =$_POST["math"] ;
$ds = $_POST["DS"];
$os = $_POST["OS"];
$dbms = $_POST["DBMS"];
$c = $_POST["C"];
 
$total = $math + $ds + $os + $dbms + $c;
$average = $total / 5;

if ($average >= 90) {
    $grade = "A+";
} elseif ($average >= 80) {
    $grade = "A";
} elseif ($average >= 70) {
    $grade = "B";
} elseif ($average >= 60) {
    $grade = "C";
} else {
    $grade = "F";
}

//student print 
echo "📄 Previous Semester Result<br>";
echo "---------------------------<br><br>";
echo "Name     : Kashyap Bharad <br>";
echo "Roll No  : 4001<br>";
echo "Semester : 1<br><br>";

echo "Marks:<br>";
echo "Math              : $math<br>";
echo "Data Structures   : $ds<br>";
echo "Operating Systems : $os<br>";
echo "DBMS              : $dbms<br>";
echo "Computer Networks : $c<br><br>";

echo "Total   : $total / 500<br>";
echo "Average : $average<br>";
echo "Grade   : $grade<br>";
}
?>
<h1>Semester 1 Result</h1>
<table border=3>
    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
    <tr>
        <td></td>
    </tr>
        

</table>
