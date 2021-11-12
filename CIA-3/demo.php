<?php


$conn = mysqli_connect("localhost:3306", "root", "","christ");
if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}

$sql = "SELECT * FROM stuinfo";

$retval=mysqli_query($conn, $sql);

 ?>
 <table width='200' border='1'>
 <tr><th>stu-id</th><th>stu-name </th><th>age</th><th>gender</th><th>course</th><th>address</th><th colspan='2'>For modification</th></tr>
 <?php

 while($row = mysqli_fetch_assoc($retval))
 {
echo  "<tr><td>$row[stu-id]</td> <td>$row[stu-name]</td><td>$row[age]</td><td>$row[gender]</td> <td>$row[course]</td><td>$row[address]</td> <td><a href='update1.php?id=$row[id]'>Edit</a></td><td><a href='delete.php?id=$row[id]'>Delete</a></td>  </tr>";

  }
 ?>
 </table>

 <h4><a href="reg.html">Back</a></h4>
 <?php
mysqli_close($conn);
?>
