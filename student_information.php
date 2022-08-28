<?php
require "db_connect.php";
if(isset($_POST["insert"])){
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
        $query=mysqli_query($connect,"insert into student_in(s_id,student_name,s_dpt,s_sec,s_cgpa)
        values('$s_id','$information',' $s_dpt','$s_sec','$s_cgpa') ");
    }
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
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
    <?php echo isset($error1)?$error1:""?>
    <form action="" method="post">
    <div class="nav">
        <div class="inf">
            <h3>Student Id</h3>
            <input type="text" placeholder="Enter Student Id" name="s_id"/>
        </div>
        

        <div class="inf">
            <h3>Student Name</h3>
            <input type="text" placeholder="Enter Department Name" name="name"/>
        </div>

        <div class="inf">
            <h3>Department Name</h3>
            <input type="text" placeholder="Enter Department Name" name="s_dept"/>
        </div>
        <div class="inf">
            <h3>Section name</h3>
            <input type="text" placeholder="Enter Section name" name="s_sec"/>
        </div>

        <div class="inf">
            <h3>CGPA</h3>
            <input type="text" placeholder="Enter CGPA" name="s_CGPA"/>
            
        </div>
        <div class="inf">
            <h3 id="x">submit</h3>
            <input type="submit" value="insert" id="insert" name="insert"/>
        </div>

    </div>
    <div class="search">
        <div class="A">
        <input type="text" placeholder=" Search student Id"/>
        </div>
        <div><input type="submit" value="search" id="sb"/></div>
    </div>
    </form>




    <div class="tab">
    <table>
        <tr>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Department Name</th>
            <th>Section Name</th>
            <th>CGPA</th>
            <th></th>
        </tr>
        <?php
                $query=mysqli_query($connect,"select * from student_in");
                while($row=mysqli_fetch_array($query))
                {
                    ?>
                <tr>
                    <td><?php echo $row['s_id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['s_dpt']; ?></td>
                    <td><?php echo $row['s_sec']; ?></td>
                    <td><?php echo $row['s_cgpa']; ?></td>
                    <td><a href="update.php?s_id=<?php echo $row["s_id"];?>">update</a>/<a href="delete.php?s_id=<?php echo $row["s_id"];?>">delete</a></td>
                </tr>
                <?php
                }
                ?>
    </table>
</div>
    
</body>
</html>