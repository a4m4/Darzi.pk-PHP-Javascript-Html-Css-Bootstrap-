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
        c #066c61;
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

   

      h3{
        text-align: left;
        padding: 6px;
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
  
 
  <img class="mySlide" src="assets/images/s4.jpg" id="slidee" >
  <img class="mySlide" src="assets/images/s5.jpg" id="slidee" >
  <img class="mySlide" src="assets/images/s6.jpg" id="slidee" >
  
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



<h1 style=" color: white;
        
        font-family: 'Tangerine', cursive;
        font-size: 120px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61;
        text-align: center;
        padding-top: 110px;"> Help</h1>
   
 
<div  style="margin-left: 0px;  float: left;
        padding-top:0px;
        text-align: center;
        color: white;
        margin-left: 14%;
        ">
  <h1 style="text-align: center;  font-family: 'Tangerine', cursive; font-size: 50px;">Customer Help</h1>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 1 : Click on Place an Order </h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 2 : Now, you can see all Darzis</h3>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 3 : Click on Order </h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 4 : Now, you can fill the Order form</h3>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 5 : Click On Proceed Order</h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 6 : You'll get you Order in due date.</h3>
</div>


<div style="float: right;
        padding-top: 0px;
        text-align: center;
        color: white;
        margin-right: 14%;">
  <h1 style="text-align: center;  font-family: 'Tangerine', cursive; font-size: 50px;">Darzi Help</h1>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px;  padding-left: 25px;">Step 1 : Click on Become A Darzi</h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 2 : Fill the form.</h3>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 3 : Then you Login</h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 4 : You can see your profile and orders</h3>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 5 : Logout then</h3>
  <h3  style="background-color: #00a69c; opacity: 0.8; border-radius: 20px; padding-left: 25px; ">Step 6 : aik dekhlo koi</h3>
</div>








</body>
</html>