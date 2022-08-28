<?php
if(isset($_POST["log"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $adminemail="admin@gmail.com";
    $adminpassword="admin123";
    if($email==$adminemail && $password==$adminpassword)
    {
        
        header('Location:student_information.php');
    }
    else{
        $error="error please try again";
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
            <h1>Admin Login</h1>
            <input type="email"  placeholder="Enter you Email" name="email"/>
            <input type="password" placeholder="Enter password" name="password"/>
            <?php echo isset( $error)? $error:"" ?>
            <input type="submit" value="Login" id="log" name="log"/>
     
       </div>
    </div>
   </form>
    
</body>
</html>