<html>
    <head>
        <title>Buy Products</title>
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
.buybutton {
    background-color: transparent;
    color:rgb(73, 25, 21);
    width: 75px;
    height: 44px;
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}
.buybutton:hover {
    background-color: rgb(73, 25, 21);
    color: white;
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
 <div class="custombutton">
<form>
<button class="button backbutton" type="submit" formaction="customerdb.php">Back</button>
</form>
</div>
  <?php
   
      $con = mysqli_connect("localhost","root","","pet_adoption_center");
      if(!$con)
      { 
      die("could not connect".mysql_error());
      }
      $var=mysqli_query($con,"select P.product_id,P.product_name,P.product_price,P.product_quantity from products P where P.product_id=P.product_id ");
      echo "<table border size=10>";
      echo "<tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
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
<form action="deleteproducts.php" method="post">
    <input  id="dbutton" type="text" name="t1" placeholder="Enter the id to buy" required>
    <input  class="buybutton" type="submit" value="Buy">
</form> 
</div>
</body>
</html>