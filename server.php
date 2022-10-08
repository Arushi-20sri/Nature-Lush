<?php 
 session_start();
$host="localhost";
$user="root";
$password="";
$db="login";

$myconn = mysqli_connect($host,$user,$password);
mysqli_select_db($myconn,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($myconn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header("Location: lab6.php");
        // echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
