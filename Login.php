<?php
   ob_start();
   session_start();
?>
<?php  
	$submitted =  isset($_POST['username']) &&  isset($_POST['password']);
	if($submitted) {
		setcookie('username', $_POST['username']);
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="register.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
<div class="navbar" style="background-color: black;font-size: 25px;">
        <br>
           
            <div class="n"  style=" margin-left: 13cm; font-family:Sofia,sans-serif; ">
               <a style="text-decoration: none;color: whitesmoke;" href="homepage.php">Home</a> &nbsp;&nbsp;&nbsp;&nbsp;
              <a style="text-decoration: none;color: whitesmoke;" href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="feature.php">Features</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="Login.php">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;color: whitesmoke;" href="contact.php">Contact</a> 
                </div>
                <br>
        </div>
<?php
            $msg = '';
            
            if (isset($_POST['register']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if (($_POST['username'] == 'NatureLush' && 
                  $_POST['password'] == 'naturelush') || ($_POST['username'] == 'parlour' && 
                  $_POST['password'] == '12345') ) 
                  {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'bt20cse161';
                  
                  echo 'You have entered valid use name and correct password';

                  header('Location: our_services.php'); 
                  

               }
               
               else {
                  $msg = 'Wrong username or password'; 
               }
            }


         ?>
        

        <?php if ($submitted): ?>
	          <p>Hello <b><?php echo $_POST['username']; ?></b></p>
	         <?php else: ?>
	     
	        <?php endif; ?>
      <div class="header">
        <h2>LOGIN</h2><br>
        </div>
	
		<form method="POST"  action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <div class="input">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter the User Name"/><br>	
       </div><br>
       <div class="input">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Your password"/><br>
       </div><br>
       <div class="input">
    <button type="submit" name="register" class="btn">Login</button>
    </div><br>
    <p>Not yet a member?  <a href="registration.php">Sign up</a>
   </p>
		</form>
	
</body>
</html>