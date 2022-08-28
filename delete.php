<?php
require "db_connect.php";
$s_id=$_GET['s_id'];
$query=mysqli_query($connect,"delete from student_in where s_id='$s_id' ");
header('Location:student_information.php');

?>