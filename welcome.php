<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitKnight</title>
   <!-- bootstrap -->
   <link
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
   rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
   crossorigin="anonymous"
 />

    <!--bootstrap script-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@1,400;1,600&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="HomePage.css">
<link rel="icon" href="muscle.png" >

<script src="homepage.js"></script>
</head>
<body>

        <!--navigation bar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"
              ><img class="logo2" src="logo2.png" alt="logo"></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="srch">
                    <form class="d-flex">
                        <input class="form-control me-2 sch " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                      </form>
                </div>
                

              <ul class="navbar-nav ms-auto">
               
                <li class="nav-item pad">
                  <a class="nav-link" href="homepage.html">Home</a>
                </li>
                
                <li class="nav-item pad">
                    <a class="nav-link" href="joinus.html">Join Us</a>
                  </li>
                  <li class="nav-item pad">
                    <a class="nav-link" href="covid.html">Covid Precautions</a>
                  </li>
                  <li class="nav-item pad">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                  </li>
                  <li class="nav-item pad">
                    <a class="nav-link" href="logout.php">LogOut</a>
                  </li>
              </ul>
             
            </div>
          </nav>


          
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div
    id="carouselExampleSlidesOnly"
    class="carousel slide"
    data-ride="carousel"
    data-interval="2000"
  >
    <div class="carousel-inner">
      <div class="carousel-item active carimg">
        <img class="d-block w-100 carimg" src="gymmoti.jpg" alt="First slide" />
        
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carimg" src="hg.jpg" alt="First slide" />
        
      </div>
    </div>

    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    
      <!-- <script type="text/javascript" src="mobile.js"></script>
        <br>
        <a href = "#" onMouseOver = "document.p1.src = image2.src;"
        onMouseOut = "document.p1.src = image1.src;">
     <center>

      <img name="p1" src="gold.jpg" width="1480" height="600"/></a> </center>-->
    <div class="heading">
        <img class="logo1" src="logo.png" >
        
        
    </div>
    <div class="firstpara" id="fade" style="opacity: 0;">
        <h2 id="title"> What is Fitness?</h2>
        <img class="giphy" src="g1.webp" >
        <p id="first">
            Fitness be like: “Mera naam toh suna hi hoga, lockdown(2020) ke baad sabne muhje khoo diya !!”
            Some institution define Fitness as: “a set of attributes that people have or achieve that relates to the
            ability to perform physical activity.” But, it defines one of the essential components of fitness, i.e.
            Physical Fitness.
        </p>

    <div class="Fitness">To read more about Fitness<br>
    <a class="links" href="typeFitness.html">Tap this!</a><br></div>
    <div class="Protein" >
    IMPORTANCE OF PROTEIN <br>
           <a class="links" href="protein.html">Know about Protein!</a>
        </div>
    </div>
        <br>
        

    <img id="myImage" onmouseover="moveRight()" onmouseout="stop()"  src="ss1.png" width="800" height="450">
    <p id="enablebutton">Click to Enable a Top Button</p>
    <br>
    <div id="second">
        <p >
            <h2><u>Body Mass Index</u></h2>
            Some years ago, BMI is used to be a reliable technique to determine an individual’s fitness or more
            preciously to measure one’s health based on their size.
            Body Mass Index (BMI) is a person’s weight in kilograms divided by the square of height in meters. A high
            BMI can be an indicator of high body fatness. BMI can be used to screen for weight categories that may lead
            to health problems but it is not diagnostic of the body fatness or health of an individual.
            <strong>BMI= Weight (in kg) / Height*Height (in metres).</strong>
            <br>*If you have a muscular build then ignore BMI.
        <table style="width: 100%">

            <caption> <strong>BMI Table</strong></caption>
            <thead>
                <tr>
                    <th>
                        BMI
                    </th>
                    <th>
                        Nutritional Status
                    </th>
                </tr>
            </thead>
            <tr>
                <td>
                    Below 18.5
                </td>
                <td>
                    Underweight
                </td>
            </tr>
            <tr>
                <td>
                    18.5 - 24.9
                </td>
                <td>
                    Normal Weight
                </td>
            </tr>
            <tr>
                <td>
                    25.0 - 29.9
                </td>
                <td>
                    Pre-Obesity
                </td>
            </tr>
            <tr>
                <td>
                    30.0 - 34.9
                </td>
                <td>
                    Obesity Class I
                </td>
            </tr>
            <tr>
                <td>
                    35.0 - 39.9
                </td>
                <td>
                    Obesity Class II
                </td>
            </tr>
            <tr>
                <td>
                    Above 39.9
                </td>
                <td>
                    Obesity Class III
                </td>
            </tr>
        </table>
        <p>
            <a  class="links"
            href="bmi.html">
            <strong>View Full BMI Chart Here</strong>
        </a>
        </p>
        </p>
    </div>
    <footer>
        <div class="btn">
            Exclusive Training Package<br>
            <a class ="links" href="Form.html" target="_blank">Click Here!!!</a>
        </div>
    </footer>
  </body>
</html>
