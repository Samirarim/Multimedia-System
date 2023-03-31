<!doctype html>
<html>
    <head>
        <title>
            Pet Adoption Center
        </title>
        <link rel="icon" type=image\ico href="icon.png"></link>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;

    background-size: cover;
  font-family: Arial, Helvetica, sans-serif;
  /*background-color:rgba(43, 3, 3, 0.945);*/
  
}
.topnav {
  overflow: hidden;
  background-color:rgb(73, 25, 21);
  height: 70px;
  border: 2px solid black;
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
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 150px 50px;
    -webkit-transition-duration: 0.2s; 
    transition-duration: 0.2s;
    cursor: pointer;
}
.screen
{
    background-image:url('homepage.avif');
    background-size: cover;
    width:100%;
    height:600px;
}

.button1 {
    background-color: transparent;
    color:rgb(73, 25, 21);
    font-weight: bold;
    border: 3px solid rgb(73, 25, 21);
    border-radius: 5px;
}

.button1:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}

.button2 {
    background-color:  transparent;
    color:rgb(73, 25, 21);
    font-weight: bold;
    border-radius: 5px;
    border: 3px solid rgb(73, 25, 21);
}

.button2:hover {
    background-color:rgb(73, 25, 21);
    color: white;
}

.button3 {
    background-color:transparent; 
    color:rgb(73, 25, 21);
    font-weight: bold;
    border-radius: 5px;
    border: 3px solid rgb(73, 25, 21);
}

.button3:hover {
    background-color: rgb(73, 25, 21);
    color: white;
}


</style>
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="home.php"><img src="icon.png"></a>
            <a href="home.php">Pet Adoption Center</a>
            <div class="topnav-right">
              <a href="logout.php">Logout</a>
            </div>
          </div>
      

       
     <div class="screen">      
     <form>
          
            <button class="button button1"  type="submit" formaction="pets.php">Pets</button>
            <button class="button button2"  type="submit" formaction="products.php">Product</button>
            <button class="button button3"  type="submit" formaction="veterinarians.php">Veterinarian</button>
        
     </form> 
    </div>

    </body>
</html>