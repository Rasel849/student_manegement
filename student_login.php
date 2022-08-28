<?php
require "db_connect.php";
if(isset($_POST["login"])){
    $s_id=$_POST["s_id"];
   $name=$_POST["name"];


$q=mysqli_query($connect,"select * from student_in");
$flag=0;
while($r=mysqli_fetch_array($q))
{
    if($r['s_id']==$s_id && $r['student_name']==$name)
    {
    $flag=1;
    }
    
}

   
    if($flag==1)
    {
        $query=mysqli_query($connect,"insert into s_log(stud_id)
        values('$s_id') ");
        header('Location:student_Data.php');
    }
    else{
        $error1='<script>alert("try again")</script>';
        
    }
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="proj">
        <h2>Md. Rasel Islam Babu</h2>
        <h3>ID:201311047</h3>
        <h4>CSE326 Project</h4>
    </div>
    <form action="" method="post">
    <div class="main">
        <div class="contain">
            <h1>Student Login</h1>
            <input type="text"  placeholder="Enter you Name" name="name"/>
            <input type="text" placeholder="Enter ID" name="s_id"/>
            <input type="submit" value="Login" id="log" name="login"/>
     
       </div>
    </div>
   </form>
    
</body>
</html>