<?php

$a= $_REQUEST['stu-id'];
$l= $_REQUEST['stu-name'];
$b= $_REQUEST['age'];
$c =$_REQUEST['gender'];
$d= $_REQUEST['course'];
$e= $_REQUEST['address'];


$conn = mysqli_connect("localhost:3306", "root", "","christ");

if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}

$sql = "INSERT INTO `stuinfo` (`stu-id`, `stu-name`, `age`, `gender`, `course`, `address`) VALUES ('$a','$l','$b','$c','$d','$e');";

echo $sql;
  mysqli_query($conn, $sql);
    ?>
	<!-- <script type="text/javascript">
				alert('Registration successful');
				window.location="login_reg.html";
		 </script>!>
	<?php

  mysqli_close($conn);

 ?>
