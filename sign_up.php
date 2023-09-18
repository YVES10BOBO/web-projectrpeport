<?php 
session_start();

$con = mysqli_connect('localhost', 'root', '', 'map-project');
if (!$con) {
    die('Connection Error: ' . mysqli_connect_error());
}

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];

 

   $sql = "insert into  sign_up(firstname,lastname,email,password,confirm_password) values('$firstname','$lastname','$email','$password','$confirm_password');";
     $results = mysqli_query($con, $sql);
     if($results){
        header("Location: yves.php");
          $_SESSION['message'] = "Sign Up Successfuly";
    } else{
   echo "Error! please try again later!";
    // Close connection
    mysqli_close($con);
   
   }
                      


    ?>
