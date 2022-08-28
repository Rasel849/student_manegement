<?php
require "db_connect.php";
$id=$_GET['s_id'];
$query=mysqli_query($connect,"select * from student_in where s_id='$id' ");
$row=mysqli_fetch_array($query);

$old_s_id=$row["s_id"];
$old_information=$row["student_name"];
 $old_s_dpt=$row["s_dpt"];
 $old_s_sec=$row["s_sec"];
 $old_s_cgpa=$row["s_cgpa"];

 if(isset($_POST["update"])){
   $s_id=$_POST["s_id"];
   $information=$_POST["name"];
    $s_dpt=$_POST["s_dept"];
    $s_sec=$_POST["s_sec"];
    $s_cgpa=$_POST["s_CGPA"];

$q=mysqli_query($connect,"select * from student_in");
$flag=0;
while($r=mysqli_fetch_array($q))
{
    if($r['s_id']==$s_id)
    {
    $flag=1;
    }
    
}

    if($s_id==""||$information==""||$s_dpt==""||$s_sec==""||$s_cgpa=="")
    {
        $error="please complete form!!!!!!";
    }
    else if($flag==1)
    {
        $error1='<script>alert("Already inserted")</script>';
    }
    else{
        $query=mysqli_query($connect,"update student_in set s_id='$s_id',student_name='$information',s_dpt='$s_dpt',s_sec='$s_sec',s_cgpa='$s_cgpa' where s_id='$id' ");
        header('Location:student_information.php');
    }
  

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
</head>
<body>
    <div class="proj">
        <h2>Md. Rasel Islam Babu</h2>
        <h3>ID:201311047</h3>
        <h4>CSE326 Project</h4>
    </div>

<div class="up">
    <h1>UPDATE</h1>
</div>
<form action="" method="post">
<div class="nav">
    <div class="inf">
        <h3>Student Id</h3>
        <input type="text" placeholder="Enter Student Id" name="s_id" value="<?php echo $old_s_id; ?>"/>
    </div>

    <div class="inf">
        <h3>Student Name</h3>
        <input type="text" placeholder="Enter Student Name" name="name" value="<?php echo $old_information; ?>"/>
    </div>

    <div class="inf">
        <h3>Department Name</h3>
        <input type="text" placeholder="Enter Department Name" name="s_dept" value="<?php echo $old_s_dpt; ?>"/>
    </div>
    <div class="inf">
        <h3>Section name</h3>
        <input type="text" placeholder="Enter Section name" name="s_sec" value="<?php echo $old_s_sec; ?>"/>
    </div>

    <div class="inf">
        <h3>CGPA</h3>
        <input type="text" placeholder="Enter CGPA"name="s_CGPA" value="<?php echo  $old_s_cgpa; ?>"/>
    </div>
    <div class="inf">
        <h3 id="x">submit</h3>
        <input type="submit" value="Update" id="insert" name="update"/>
    </div>

</div>
</form>
    
</body>
</html>