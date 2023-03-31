<?php
session_start();
if($_POST["t1"]=="admin"&&$_POST["t2"]=="123")
{
     $_SESSION['user']="admin";
    $con = mysqli_connect("localhost","root","","pet_adoption_center");
    if(!$con)
    { 
    die("could not connect database".mysql_error());
    }
    
    else
    {
        echo"<script>location.href='home.php'</script>";
    }
    
}
elseif($_POST["t1"]=="customer"&&$_POST["t2"]=="123")
{
    $_SESSION['user']="customer";
    $con = mysqli_connect("localhost","root","","pet_adoption_center");
    if(!$con)
    { 
    die("could not connect database".mysql_error());
    }
    
    else
    {
        echo"<script>location.href='customerdb.php'</script>";
    }
    
}
else
{
     echo"<script>alert('invaild username or password')</script>";
     echo"<script>location.href='adminlogin.php'</script>";
}
?>
