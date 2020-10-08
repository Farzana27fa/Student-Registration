<?php
  include 'config.php';
  include 'head.html' ;
?>
<?php
	$sth = mysqli_query($con, "select * from slot");
	$slots = array();
	while($r = mysqli_fetch_assoc($sth)) {
	    $slots[] = $r;
	}

?>


<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>Student Registration</title>

</head>
<body id="b">
<center>
<div id="d">

<center><form action="reg.php" method="POST">
<b><label>Name</label>
<input name="name" type="text" id="form" placeholder="Enter your name" required>
</input>
<br>
<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input>
<br>
<b><label>SID</label>
<input name="sid" type="text" id="form" placeholder="Enter your SID number" required>
</input>
<br>

 <label for="slot">Choose a slot</label>

<select name="slot" id="slot">
	<?php
		foreach ($slots as $slot) {
			if ($slot['count'] <= 8) {
				echo '<option value="'.$slot['slot_id'].'">'.$slot['time'].' <span> Student: '.$slot['count'].' </span></option>';
			}else{
				echo '<option disabled="disabled" value="'.$slot['slot_id'].'">'.$slot['time'].' <span> Student: '.$slot['count'].' </span></option>';
			}
			
		}
	?>
</select> 
<!button work>

<input name="signup" type="submit" id="button" value="Register">
</input>


</form></center>
</div>
</center>


<?php
//coding 

if(isset($_POST['signup'])){ //checking if there is any signup request
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sid = $_POST['sid'];
	$slot = $_POST['slot'];

	
	
	if($email){
		$query= "select * from student where email='$email'";
		$query_run= mysqli_query($con,$query);
		if($query_run){
			$num_rows = mysqli_num_rows($query_run);
			
			if($num_rows >0){
				
				echo "<script>
				alert('User ALready Registered ');
				window.location.href='reg.php';
				</script>
				";
				
				
			}else{
						
				$insertion= "insert into student (name,email,sid,slot_id)  values('$name','$email','$sid','$slot')";
				          
				$insertion_run = mysqli_query($con,$insertion);
						
						if($insertion_run ){
							$slot_count_update = "update slot set count = count+1 where slot_id = '$slot' ";
							mysqli_query($con,$slot_count_update);
							 
							
							echo "
				<script>
				alert('Registration Successful ');
				window.location.href='index.php';
				</script>
				";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='reg.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='reg.php';
		</script>
		";
			
		}
		
		
	}else{
		echo "
		<script>
		alert('Please insert a valid email');
		window.location.href='reg.php';
		</script>
		";
	}
	
	
}
else{
	
	
}


?>














</div>
</body>

<?php
include 'footer.html';
?>


</html>
