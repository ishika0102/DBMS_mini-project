<?php      
    include 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $uname = $_POST["email"];
        $pass = $_POST["psw"];

        $sql = "Select username,pass,email_id from users where (username = '$uname' or email_id = '$uname') and pass= '$pass'";
        $res = mysqli_query($con,$sql);
        $num = mysqli_num_rows($res);
        if ( $num == 1 )
        {
            $login = true;
            header('Location:http://localhost/pet%20adaption%20management/');
            
        }
        else 
        {
            if($uname == "")
            {
                echo '<script type="text/JavaScript"> 
            alert("Empty Email or Password.Please fill the feilds");
            window.location = "http://localhost/pet%20adaption%20management/";
            </script>';

            }
            else
            { 
             echo '<script type="text/JavaScript"> 
            alert("Wrong Email or Password");
            window.location = "http://localhost/pet%20adaption%20management/";
            </script>';
        }
 }
}

   ?>

  

