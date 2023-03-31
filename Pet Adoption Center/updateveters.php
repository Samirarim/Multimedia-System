<!doctype html>
<html>
  <head>
  <title>Veterinarians</title>
  <link rel="icon" type=image\ico href="icon.png"></link>
    <style>
      body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#F7DC6F;
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
.topnav-right {
  float: right;
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

.submitbutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    margin:auto;
    width: 100%;
    height: 45px;
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.submitbutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
    align:center;
}

fieldset { 
	background: #FAF1C9;
	padding: 10px;
    margin:auto;
    max-width:593px;
	box-shadow: 1px 1px 25px rgb(73, 25, 21);
	border-radius: 10px;
	border: 6px solid rgb(73, 25, 21);


}
</style>
</head>
<body>
  <div class="topnav">
            <a class="active" href="home.php"><img src="icon.png"></a>
            <a href="veterinarians.php">Veterinarians</a>
            <div class="topnav-right">
            <a href="logout.php">Logout</a>
            </div>
    </div>

  <form>
    <button class="backbutton" type="submit" formaction="veterinarians.php" >Back</button>
</form>
<form method="post" action="updateveters.php" >  
<fieldset>
   <input type="text" name="v_id" placeholder=" Enter veterinarians_id" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="v_name" placeholder="Enter Name" style="width:100%;height:30px;
   border: 2px solid  #9C190A ; border-radius:3px;background:transparent;" required>
   <br><br>
  <input type="text"  name="v_clinic"  placeholder="Enter Clinic" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" required>
  <br><br>
 <input type="text"  name="v_contact"  placeholder="Enter Contact" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="submit" name="submit" value="save" class="submitbutton">&ensp; 
  </fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
// define variables and set to empty values
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
        $id = $_POST["v_id"];
        $name = $_POST["v_name"];
        $clinic= $_POST["v_clinic"];
        $contact = $_POST["v_contact"];

  $Query2="select count(*) from veterinarians where v_id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);

  if($count[0]=true)
  {
    $sql = "UPDATE veterinarians SET v_name='$name',v_clinic='$clinic',v_contact='$contact' WHERE v_id='$id'";
    if ($conn->multi_query($sql) == TRUE) {
      echo'<div>
      <h1 style="color:#9C190A;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">'
      .$id. ' updated successfully</h1>
         </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo '<div>
    <h1 style="color:#9C190A;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given v_id not found</h1>
       </div>';
  }


$conn->close();
}

?>