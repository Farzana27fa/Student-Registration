<?php
include 'config.php';
include 'head.html';
?>
<html>
<head>
    <title>Remove student</title>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body id="b">
<div id="b">
	
<form action="delete.php" method="POST">

    <label>Student name</label>
    <input type="text" name="name"><br>

    <input type="submit" name="submit" value="Remove">
</form>
</style>


<?php
error_reporting(0);
$name = $_POST['name'];

$sql = "DELETE FROM student
WHERE name = '$name'";

if ($_POST['submit']) {
    if (mysqli_query($con, $sql)) {
        echo "Student has been removed";

    } else {
        echo "Something went wrong";

    }

}
?>
</body>

<?php
include 'footer.html';
?>

</html>
