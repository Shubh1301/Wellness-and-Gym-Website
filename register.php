
<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
  body {
    background-image: url('https://cdn.pixabay.com/photo/2018/05/28/13/14/dumbell-3435990__340.jpg');
    background-repeat: initial;
    background-attachment: fixed;
    background-size: cover;
    font-family: 'Roboto Slab', serif;
    color: aliceblue;
    height: 100vh;
    width: 100vw;
}
.navbar {
    background: local;
    border-radius: 30px;
    border-color: rgb(148, 6, 6);
}

.navbar ul {
    overflow: auto;
}

.navbar li {
    float: left;
    list-style: none;
    margin: 32px 20px;
    font-size: 25px;
    font-weight: bold;
}

.navbar li a {
    padding: 15px 15px;
    text-decoration: darkgreen;
    color: rgb(252, 201, 63);
}

.navbar li a:hover {
    color: cornsilk;
}

.search {
    float: right;
    color: white;
    padding: 12px 75px;
}

.navbar input {
    border: 2px solid rgb(196, 154, 245);
    border-radius: 14px;
    padding: 10px 17px;
    margin-top: 15px;
    width: 300px;
}
  </style>
    <script src="register.js"></script>
  </head>
  <body>
  <header>
        <nav class="navbar">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="joinus.html">Join us</a></li>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Search">
                </div>
            </ul>
        </nav>
    </header>


<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form  name="form" action="#" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password (upto 5 digits)">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Residential Address</label>
    <input type="text" class="form-control" id="inputAddress2" name="address" placeholder="Apartment, studio, or floor">
  </div>
  
  <button type="submit" class="btn btn-primary" onclick="validateForm()">Sign in</button>
</form>
</div>
   
  </body>
</html>
