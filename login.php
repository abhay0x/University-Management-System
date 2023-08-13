<?php 
$login=false;
$showerror=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $servername="localhost";
  $username="root";
  $password="";
  $database="minor";
  
  $conn=mysqli_connect($servername ,$username , $password , $database );

  $name=$_POST["Name"];
  $password=$_POST["password"];

$sql= "Select * from minor where Name ='$name' And password ='$password'; ";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num){

  
$login=true;
session_start();
$_SESSION['loggedin']=true;
$_SESSION['Name']=$_name;

header("location:admissionForm.html");

}
else{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Incorrect username or password </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


}


?>

















<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style2.css">

</head>
<body>

<div id="login-form-wrap">
  <h2>Login</h2>
  <form action="/Minorproject/login.php" method="post" id="login-form" >
    <p>
    <input type="text" id="username" name="Name" placeholder="Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="email" name="password"  placeholder="password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="/Minorproject/Ragister.php">Register</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->

  
</body>
</html>
