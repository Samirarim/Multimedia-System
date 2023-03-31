<!doctype html>
<html>
  <head>
  <title>Pets</title>
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
            <a href="pets.php">Pets</a>
            <div class="topnav-right">
            <a href="logout.php">Logout</a>
            </div>
    </div>

  <form>
    <button class="backbutton" type="submit" formaction="pets.php" >Back</button>
</form>
<form method="post" action="modifypets.php" >  
<fieldset>
   <input type="text" name="pet_id" placeholder=" Enter pet_id" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="pet_category" placeholder="Enter pet_category" style="width:100%;height:30px;
   border: 2px solid  #9C190A ; border-radius:3px;background:transparent;" required>
   <br><br>
  
  <input type="text" name="pet_breed"  placeholder="Enter breed" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="number" step=any name="pet_height"  placeholder="Enter height" style="width:280px;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" min="15" required>
  <br><br>
 <input type="number" step=any name="pet_weight"  placeholder="Enter weight" style="width:300px;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" min="1" required>
  <br><br>
  <input type="text" name="pet_fur"  placeholder="Enter fur" style="width:300px;height:30px;
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
  $id = $_POST["pet_id"];
  $category = $_POST["pet_category"];
  $breed= $_POST["pet_breed"];
  $height = $_POST["pet_height"];
  $weight = $_POST["pet_weight"];
  $fur= $_POST["pet_fur"];

  $Query2="select count(*) from pets where pet_id='$id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);

  if($count[0]=true)
  {
    $sql = "UPDATE pets SET pet_category='$category',pet_breed='$breed',pet_height='$height',pet_weight='$weight',pet_fur='$fur' WHERE pet_id='$id'";
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
    <h1 style="color:#9C190A;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given pet_id not found</h1>
       </div>';
}


$conn->close();
}

?>