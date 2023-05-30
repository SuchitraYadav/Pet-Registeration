<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Reset styles */
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

/* Background color and font settings */
body {
    background-image: url('image/common.jpg');
    background-color: #ecf1f4;
    font-family: Arial, sans-serif;
  }
  
  
  /* Center the login box */
  form{
    width: 400px;
    margin: 100px auto 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #bca1a1;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  /* Header text styles */
   h1 {
    font-size: 24px;
    font-weight: bold;
    margin-top: 0;
    text-align: center;
  }
  
  /* Input box styles */
  label input[type="Username"], 
  label input[type="Password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    background-color: #94b5cf;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  /* Button styles */
  input {
    background-color: #817c81;
    color: #fff;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
  }
  
  /* Button hover effect */
  .login-box button:hover {
    background-color: #898889;
  }
  
  /* Link styles */
  .login-box a {
    color: #666;
    text-decoration: none;
  }
  
  .login-box a:hover {
    text-decoration
  }
  </style>

    <title>pet owner address</title>
  </head>
  

  <body>
    <h1>pet owner address</h1>
    <form action="" method="post">
    <label for="ownername">Owner Name:</label>
    <input type="text" id="owner-name" name="ownername"><br><br>
    
    <label for="owneaddress">Address:</label>
    <input type="text" id="owner-address" name="address"><br><br>
    
    <label for="ownercity">City:</label>
    <input type="text" id="owner-city" name="city"><br><br>
    
    <label for="ownerstate">State:</label>
    <input type="text" id="owner-state" name="state"><br><br>
    
    <label for="ownerzipcode">Zip Code:</label>
    <input type="text" id="owner-zipcode" name="zipcode"><br><br>
    
    <input type="submit" value="Submit">
  </form>

  <?php
        // put your code here
        $name = $address = $city = $state = $zipcode = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $name = $_POST['ownername'];
          $address = $_POST['address'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $zipcode = $_POST['zipcode'];
            
            $con = mysqli_connect("localhost","root","","loginn");                     
       
			$query = "INSERT INTO `petowner` (ownername, address, city, state, zipcode) VALUES ('$name', '$address', '$city', '$state', '$zipcode')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Registration Succesful");
       header("Location: category.php");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                         } 
        
        
        
        ?>
</body>
</html>
