<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'partial/dbconnect.php';

  $_name=$_POST["Name"];
  $_email=$_POST["email"];

  $_phone=$_POST["phone"];
  $_city=$_POST["city"];

  $existsql="SELECT * FROM `user` WHERE username ='$_name'";
  $result=mysqli_query($conn, $existsql);
  $numexistrows=mysqli_num_rows($result);
  if($numexistrows>0){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Username already exists</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  
else{

 
  
  $sql=INSERT INTO `minor` ( `Name`, `email`, `phone`, `City`) VALUES ('sanskar', 'abhiabhishek@gmail.com', '935414930', 'bulandshahr');
  $result=mysqli_query($conn, $sql);
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account created successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  }
  else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> error.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}
}

?>







































<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  
    <link rel="stylesheet" href="/style.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>


   
   
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="/Minorproject/Ragister.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label >Full Name</label>
                            <input type="text" name="Name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" name="email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" name="phone" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Student City</label>
                            <input type="text" placeholder="Enter Student City" required name="city">
                        </div>
                    </div>
                </div>

                
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    
    <script src="script.js"></script>
</body>
</html>