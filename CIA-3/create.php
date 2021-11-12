<?php



$conn = mysqli_connect("localhost:3306", "root", "","christ");

if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}

$sql = "CREATE TABLE stuinfo (
stu-id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
stu-name VARCHAR(30) NOT NULL,
age INT(3),
gender VARCHAR(10),
course VARCHAR(30) NOT NULL,
address VARCHAR(50) NOT NULL

)";

 echo $sql;
  mysqli_query($conn, $sql);

  mysqli_close($conn);


 ?>
