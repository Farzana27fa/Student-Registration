<?php
include 'config.php';
include 'head.html';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
<div id="d">
    



	<?php

                $sql = "Select * from student";
                $result =  $con->query($sql);//to get all dta from food table

                if ($result->num_rows > 0) {//add.php te kono input dile add korbe
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '
                            
                            <div class="menu-content">
                                <h4>Student name:'.$row['name'].'<br>SID'.$row['sid'].'<br> Email: '.$row['email'].'<br> Slot: '.$row['slot_id'].'</h4>
                                
                                
                            </div>
                        ';
                    }
                } else {
                    echo "0 results";
                }
            $con->close();
            ?>

	
</div>

</center>
</body>
<?php

include 'footer.html';
?>
</html>