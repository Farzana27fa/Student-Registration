<?php
  include 'config.php';
  include 'head.html' ;
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="header">
		
	</div>
	<div id="sidebar">
		
		<ul type="none">
			<li><a href="add.php" target="_blank">Add</a></li> <!--add.php will open in new page-->
			<li><a href="delete.php" target="_blank">Delete</a></li>
			<li><a href="view.php" target="_blank">Show table</a></li>
			
		</ul>
	</div>
	<div id="data ">
		
	</div>

	<?php

	error_reporting(0);
	include 'config.php';
	$sql= "SELECT * FROM student";
	$result = mysqli_query($con, $sql);


	?>
    <div style="float:right" >

        <button type="button">
            <a href="logout.php" >LOG-OUT</a>
        </button>

    </div>

</body>
<?php
include 'footer.html';


?>

</html>