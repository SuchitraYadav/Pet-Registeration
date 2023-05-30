<!DOCTYPE html>
<html>
  <head>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    background-image: url('image/homeee.jpg');
    background-color: #ecf1f4;
    font-family: Arial, sans-serif;
  }

nav{
    width: 100%;
    height: 75px;
    line-height: 75px;
    padding: 0px 100px;
    position: fixed;
    background-image: linear-gradient(#033747,#012733);

}
nav .main p{
    font-size: 30px;
    font-weight: bold;
    float: left;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
}
nav ul{
    float: right;
}
nav li{
    display: inline-block;
    list-style: none;
}
nav li a{
    font-size: 18px;
    text-transform: uppercase;
    padding: 0px 30px;
    color: white;
    text-decoration: none;
}
nav li a:hover{
    color: #ff8c69;
    transition: all 0.4s ease 0s;
}
body {
    background-image: url('image\pett.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh; 
  }

 
  .content-items{
    color: #fff;
    padding: 20px;
    text-align: center;
  }
.content-items img{
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.spark{
  position: absolute;
  inset: 0;
  border-radius: 100px;
  rotate: 0deg;
  overflow: hidden;
  mask: linear-gradient(white, transparent 50%);
  animation: flip calc(var(--spark) * 2) infinite steps(2, end);
}
</style>
    <title>category</title>
    
    
  </head>
  

  <body>
  
    <nav> 
    
    <div class = "main">
      <p>Home</p>
    

    </div>
    
      <ul>
        <li><a href="walking.php">Walking</a></li>
        <li><a href="veterinary.php">Veterinary Consultation</a></li>
        <li><a href="food.php">Food</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="logout.php">log out</a></li>
        <?php include 'catphp.php'?>
        


      </ul>
    </nav>
    
     <div class="content-items">
      <img src="image/homeee.jpg" alt="descrption">
     </div>

  </body>
</html>
