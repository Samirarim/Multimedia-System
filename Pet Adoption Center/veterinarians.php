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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse; outline: #5F170F solid 5px;
    background: rgb(73, 25, 21);
    margin:5px ;
    width:100%;
}
td, th {
    border: 2px solid rgb(73, 25, 21);
    text-align: left;
    padding: 8px;
    background:#FAC9C9
}
th{
  background-color: #F7A39A ;
}

.custombutton{
  margin:25px;
  
}input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px ;
    background:transparent;
    border: 2px solid red;
    color:rgb(73, 25, 21);
}
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.2s; 
    transition-duration: 0.2s;
    cursor: pointer;
}
.backbutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.backbutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}
.addbutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.addbutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}
.updatebutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.updatebutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}

.deletebutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    width: 75px;
    height: 44px;
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.deletebutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
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
 <div class="custombutton">
<form>
<button class="button backbutton" type="submit" formaction="home.php">Back</button>
<button class="button addbutton" type="submit" formaction="addveters.php">Add Veterinarians Information</button>
<button class="button updatebutton" type="submit"  formaction="updateveters.php">Update Veterinarians Information</button>
</form>
</div>
  <?php
   
      $con = mysqli_connect("localhost","root","","pet_adoption_center");
      if(!$con)
      { 
      die("could not connect".mysql_error());
      }
      $var=mysqli_query($con,"select V.v_id,V.v_name,V.v_clinic,V.v_contact from veterinarians V");
      echo "<table border size=10>";
      echo "<tr>
      <th>Veterinarian ID</th>
      <th>Name</th>
      <th>Clinic</th>
      <th>Contact</th>
      </tr>";
      if(mysqli_num_rows($var)>0){
          while($arr=mysqli_fetch_row($var))
          { echo "<tr>
          <td>$arr[0]</td>
          <td>$arr[1]</td>
          <td>$arr[2]</td>
          <td>$arr[3]</td>
          </tr>";}
          echo "</table>";
          mysqli_free_result($var);
      }
      mysqli_close($con);   
      ?>
<div class="lastblock" style="margin-top:25px;">
<form action="deleteveters.php" method="post">
    <input  id="dbutton" type="text" name="t1" placeholder="Enter the id to remove" required>
    <input  class="deletebutton" type="submit" value="Remove">
</form> 
</div>
</body>
</html>