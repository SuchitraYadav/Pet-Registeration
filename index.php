<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Management System</title>
    </head>
    <style> * {
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
        
        <form  action="" method="post" >
            <div class="center">
            <h1>Registration</h1>
            <label>NAME</label></br><input type="text"   name="name"><br/> 
            <label>ID</label></br><input type="text"   name="id"><br/> 
            <label>CONTACT</label></br><input type="text"   name="contact"><br/> 
            <label>PASSWORD</label></br><input type="text"   name="password"><br/></br>
            <button type="submit"  name="submit" value="Register" >Update</button>
            <br>
        Click here to <a href="loginn.php" title="Login"> Login 
            
            </div>
        </form>
        
        
        <?php
        // put your code here
        $Name = $id = $Contact = $Password = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $Name = $_POST['name'];
            $Id = $_POST['id'];
            $Contact = $_POST['contact'];
            $Password = $_POST['password'];
            
            $con = mysqli_connect("localhost","root","","manage");                     
       
			$query = "INSERT INTO `register` (id, name, contact, password) VALUES ('$Id', '$Name', '$Contact', '$Password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Registration Succesful");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                         } 
        
        
        
        ?>
    </body>
</html>
