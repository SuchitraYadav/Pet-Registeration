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

    <title>Pet Details</title>
    
  </head>
  <body>
    
    <h1>Pet Details</h1>
    <form  action="" method="post" >
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      
      <label for="species">Species:</label>
      <select id="species" name="species">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
        <option value="fish">Fish</option>
      </select><br><br>
      
      <label for="age">Age:</label>
      <input type="number" id="age" name="age"><br><br>
      
      <label for="color">Color:</label>
      <input type="text" id="color" name="color"><br><br>
      
      <label for="weight">Weight (lbs):</label>
      <input type="number" id="weight" name="weight"><br><br>
      
      <label for="vaccinated">Vaccinated:</label>
      <input type="checkbox" id="vaccinated" name="vaccinated"><br><br>
      
      <input type="submit" value="Submit">
    </form>
    
    <?php
        // put your code here
        $username = $password = $age = $color = $weight = $vaccinated = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $username = $_POST['name'];
          $password = $_POST['species'];
          $age = $_POST['age'];
          $color = $_POST['color'];
          $weight = $_POST['weight'];
          $vaccinated = $_POST['vaccinated'];
            
            $con = mysqli_connect("localhost","root","","loginn");                     
       
			$query = "INSERT INTO `petdetai` (name, species, age, color, weight, vaccinated) VALUES ('$username', '$password', '$age', '$color', '$weight', '$vaccinated')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Registration Succesful");
       header("Location: owner.php");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                         } 
        
        
        
        ?>
    
  </body>
</html>
