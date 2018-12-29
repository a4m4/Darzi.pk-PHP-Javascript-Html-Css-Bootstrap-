<!DOCTYPE html>
<html>
<head>
  <title> About </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Corben:700|Delius+Unicase:700|Ewert|Frijole|Galada|Holtwood+One+SC|Modak|Ruthie|Shojumaru|Tangerine:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alike" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/about.css">

  <style type="text/css">
    li a{
        font-family: 'Holtwood One SC', serif;
       text-shadow: 2px 2px 2px white;
        float: right;
        padding-right: 9%;
        padding-top: 2%;
        font-size: 38px;
        color: #066c61;
          text-decoration : none;
      }

       li a:hover {
        text-decoration : none;
        color: white;
        
      } 

      #slidee {

        height: 100%;
        width: 100%;
      }

      #mainslider img {

        position: absolute;
        z-index: -1;
        left: 0px;
        top: 0px;

      }

      h1{
        color: white;
        font-size: 50px;
        font-family: 'Tangerine', cursive;
        font-size: 90px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61;
      }

      #about p{
        color: white;
        font-size: 25px;
        background-color: #066c61;
        opacity: 0.7;
        border-radius: 20px;
        padding: 12px;
        text-align: justify;
        font-family: 'Alike', serif;
        opacity: 0.8;

      }

  </style>
</head>


<body> 


           
      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.php"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>


<!--mainslider-->



<div id="mainslider" style="margin-top: -18px; margin-left: -39px;">

<div class="w3-content w3-section" style="margin-top:0px;max-width:1350px;">
  
 
  <img class="mySlide" src="assets/images/s1.jpg" id="slidee" >
  <img class="mySlide" src="assets/images/s2.jpg" id="slidee" >
  <img class="mySlide" src="assets/images/s3.jpg" id="slidee" >
  
</div>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 3 seconds 
}
</script>

<!--mainsliderends-->


<div class="container" style="padding-top: 145px; text-align: center; width: 60%; padding-bottom: 4%; " id="about" >

<h1 style="font-size: 110px;">About Us</h1>
<p > Darzi ensures that whatever you wear stands out in the crowd by stitching your favorite dresses out of the best designs from our expert darzis in affordable prices. Stitch the best fir ensemble by our darzid for the customers to walk down the aisle with all the elegance and gleam. Darzi also help stitch the best fit outfits for your special occasions.</p>

</div>



<!-- Footer  -->


<div style="background-color:#5b686b; margin-top: 149px;" class="footar">
  
<div class="container">
  

  <div class="row">
      

      <div class="col-sm">
        <br><br><br>
        <img style=" height: 55%; width: 74%;" src="assets/images/logo.png">


      </div>


      <div class="col-sm">
        
        <br><br><br>
        <h2> Adress </h2>
        
        <p>          
            Software Engineering <br> Department <br>NED University <br>Karachi.
        </p>
      </div>



      <div class="col-sm">
        
        <br><br><br>
        <h2> Contacts </h2>
       
        <p>
          Email: darzipk@gmail.com 
          <br>Phone:  0900-223190 
          <br>Fax:  0334-4430223
        </p>

      </div>


      <div class="col-sm" >
        
        <br><br><br>
        <h2>Links</h2>
        
           <p>
            <a href="#">Facebook</a> <br>
            <a href="#">Linkedin</a> <br>
            <a href="#">Instagram</a> <br>
            <a href="#">Snapchat</a>
           </p>
        
      </div>

  </div>



</div>
<br><br><br><hr>
<p style="text-align: center;">© Copyright 2018 Darzi - All Rights Reserved</p>
<br>
</div>



</body>
</html>