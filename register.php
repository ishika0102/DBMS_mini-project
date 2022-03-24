<?php
include "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    
       
    $fname = $_POST["Fullname"];
    $username = $_POST["usrname"];
    $email = $_POST["email"]; 
    $password = $_POST["psw"]; 
    $cpassword = $_POST["psw-repeat"];
            
    
    $sql = "Select * from users where username='$username'";
    
    $result = mysqli_query($con, $sql);
    
    $num = mysqli_num_rows($result); 
    
    while (true)
    {
        $uid = rand(1,999);
        $sqluid = "Select * from users where user_id='$uid'";
        $res1 = mysqli_query($con,$sqluid);
        $num1 = mysqli_num_rows($res1);
        if ($num1 == 1)
        {
            continue;
        }
        else 
        {
            // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) 
    {
        if(($password == $cpassword) && $exists==false) 
        {
    
            
                
            
            $sql = "INSERT INTO users (name, phno, email_id, pass, address, username, user_ID) VALUES ('$fname','NULL','$email','$cpassword','NULL','$username','$uid')";
    
            $result = mysqli_query($con, $sql);
            
            if ($result) {
                $showAlert = true; 
            }
        } 
        else 
        { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   }

            break;
        }
    }
    
   } 
    
?>