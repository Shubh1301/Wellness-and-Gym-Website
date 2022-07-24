<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


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
    background-image: url('https://c0.wallpaperflare.com/preview/18/189/150/barbell-building-challenge-dark.jpg');
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
    <script src="login.js"></script>
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
<h3>Please Login Here:</h3>
<hr>

<form name="form2" action="#" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password (only numbers)">
  </div>
  <button type="submit" class="btn btn-primary" onclick="validateForm2()">Submit</button>
</form>
</div>
   
  </body>
</html>

