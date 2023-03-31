<html>
<head>
        <title>Veterinarians</title>
        <link rel="icon" type=image\ico href="icon.png"></link>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #F7DC6F;
  }
  .topnav {
  overflow: hidden;
  background-color: rgb(73, 25, 21);
  height: 70px;
  border: 3px solid black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;

}

.backbutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    margin:auto;
    width: 75px;
    height: 44px;
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.backbutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}

</style>
<body>
<div class="topnav">
<a class="active" href="home.php"><img src="icon.png"></a>
            <a href="veterinarians.php">Veterinarians</a>
          </div>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_adoption_center";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$v_id=$_POST["t1"];

$Query2="select count(*) from veterinarians where v_id='$v_id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);
if($count[0]=true)
{ 
    
    $sql = "DELETE FROM veterinarians WHERE v_id='$v_id'";
    if ($conn->query($sql) == TRUE) {
        echo '<div>
    <h1 style="color: #9C1A1A;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;">Data removed successfully</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo '<div>
    <h1 style="color: #9C1A1A;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;"> Data not found</h1>
    </div>';
}
$conn->close();
?>
<form>
    <button type="submit" class="backbutton" formaction="veterinarians.php">Back</button>
</form>
<body>
<html>