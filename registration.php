<?php
 
  $username="";
  $email="";
  $errors = array();
 
  
  if(isset($_POST['register'])){
    
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password_1= $_POST['password_1'];
    $password_2= $_POST['password_2'];
    
    if(empty($username)){
        array_push($errors,"Username is required");
    }
    if(empty($email)){
        array_push($errors,"Email is required");
    }
      
    if(empty($password_1)){
        array_push($errors,"Password is required");
    }
    if($password_1 != $password_2){
        array_push($errors,"The two passwords do not match");
    }

    if(count($errors)==0)
    {
        $password = md5('password_1');
        $sql = "INSERT INTO 'registrationform' ( 'username', 'email','password')
         VALUES ('$username', '$email', '$password')";
                   mysqli_query($con,$sql);
                 echo " You Have Successfully Registered";
                exit();
    }
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" a href="register.css">
</head>
<body>
    <div class="header">
    <h2>Register</h2>
    </div>
    <form method ="post" action="#">
    <?php include('errors.php')?>
    <div class="input">
     <label>Username</label>
     <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input">
     <label> Email </label>
     <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input">
     <label>Password</label>
     <input type="password" name="password_1">
    </div>
    <div class="input">
     <label>Confirm Password</label>
     <input type="password" name="password_2">
    </div>
    <div class="input">
    <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>Already a member?  <a href="Login.php">Sign in</a>
   </p>
</form>
</body>
</html>