<?php
include 'config.php';
include 'head.html';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Reagistration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="b">
    <center>
        <div id="d">
             <form action="add.php" method="POST">
             <label for="name">Name:</label><br>
             <input type="text" id="name" name="name"><br>
             <label for="email">Email:</label><br>
             <input type="text" id="email" name="email"><br>
             <label for="sid">SID:</label><br>
             <input type="text" id="sid" name="sid"><br>
             <label for="slot_id">Slot:</label><br>
             <input type="text" id="slot_id" name="slot_id"><br>
             <input type="submit" name="submit" value="Add">
</form> 
<!--<form action="add.php" method="POST">

    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Email</label>
    <input type="text" name="email"><br>

    <label>SID</label>
    <input type="text" name="sid"><br>

    <label>Slot</label>
    <input type="text" name="slot_id"><br>
    
    <input type="submit" name="submit" value="Add">
</form>-->

</center>
<?php
error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];
$sid = $_POST['sid'];
$slot_id = $_POST['slot_id'];

$sql = "INSERT into student (name,email,sid,slot_id) values ('$name','$email','$sid','$slot_id')";

if ($_POST['submit']) {
    if (mysqli_query($con, $sql)) {
        echo "Student added successfully";

    } else {
        echo "Something went wrong";

    }

}
?>
</div>
</body>

<?php

include 'footer.html';
?>
</html>