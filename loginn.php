<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
        <style>
* {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      
      /* Background color and font settings */
      body {
        background-image: url('image/login.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh; 
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
          background-color: #f2f2f2;
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
    <body>
        <form role="form" id="templatemo-preferences-form" name="login" action="" method="post">
            <div class="center">
                <h1>Login </h1>
             <label>NAME</label><br/>

             <input type="text" id="name" placeholder="enter name" name="name" required> <br/>
            <label>PASSWORD</label><br/>
           
            <input type="text" id="pwd" placeholder="enter password" name="password" required><br/>
            <br/>
            <button type="submit"  name="submit" value="Register" >Login</button>
             
            
            
            <br>
        Click here to <a href="index.php" title="Registration"> Register
            </div>
        </form>
        
        <?php
        // put your code here
        if(isset($_POST['submit'])){
        $name = $_POST['name'];	
       
        $password = $_POST['password'];
        
        
        $con = mysqli_connect("localhost","root","","manage");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " .mysqli_connect_error();
                    }
		
		
			$query = "SELECT * FROM register WHERE name='$name' and password='$password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                session_start();
                                $_SESSION['username'] = $name;
                                
                                header("Location: peeett.php");
                            }
                            else{
                                echo("Invalid credenatials");
                            }
                            
                        }                     
                        else{
                            echo("Invalid credenatials");
                        }
	      }
               
        
        
        
        
        
        ?>
    </body>
</html>
