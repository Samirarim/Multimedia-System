<!doctype html>
<html>
  <head>
  <title>Products</title>
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
            <a href="products.php">Products</a>
            <div class="topnav-right">
            <a href="logout.php">Logout</a>
            </div>
    </div>

  <form>
    <button class="backbutton" type="submit" formaction="products.php" >Back</button>
</form>
<form method="post" action="addproducts.php" >  
<fieldset>
   <input type="text" name="product_id" placeholder=" Enter product_id" style="width:100%;height:30px;
   border: 2px solid  #9C190A; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="product_name" placeholder="Enter product_name" style="width:100%;height:30px;
   border: 2px solid  #9C190A ; border-radius:3px;background:transparent;" required>
   <br><br>
  <input type="number" step=any name="product_price"  placeholder="Enter Price" style="width:280px;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" min="20" required>
  <br><br>
 <input type="number" step=any name="product_quantity"  placeholder="Enter Quantity" style="width:300px;height:30px;
   border: 2px solid  #9C190A; border-radius:3px;background:transparent;" min="1" max='50' required>
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
  $id = $_POST["product_id"];
  $name = $_POST["product_name"];
  $price= $_POST["product_price"];
  $quantity = $_POST["product_quantity"];

$sql = "INSERT INTO products(product_id,product_name,product_price,product_quantity)
VALUES ('$id','$name','$price','$quantity')";
if ($conn->multi_query($sql) == TRUE) {
  echo'<div>
      <h1 style="color:#9C190A;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">New record of id='
      .$id.' inserted successfully</h1>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
