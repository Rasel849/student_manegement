<?php
require "db_connect.php";

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
    <div class="home">
        <a href="index.php">
</a>
    </div>
    <div class="up">
        <h1>STUDENT DATA</h1>
    </div>
    <div class="tab">
    <table>
        <tr>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Department Name</th>
            <th>Section Name</th>
            <th>CGPA</th>
        </tr>
        <?php
                $q=mysqli_query($connect,"select * from s_log");
                $flag=0;
                while($r=mysqli_fetch_array($q))
                {
                   
                    $flag=$r['stud_id'];
                   
                }
                $query=mysqli_query($connect,"select * from student_in where s_id=$flag");
                while($row=mysqli_fetch_array($query))
                {
                    ?>
                <tr>
                    <td><?php echo $row['s_id']; ?></td>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['s_dpt']; ?></td>
                    <td><?php echo $row['s_sec']; ?></td>
                    <td><?php echo $row['s_cgpa']; ?></td>
                </tr>
                <?php
                }
                ?>
    </table>
</div>
    
</body>
</html>