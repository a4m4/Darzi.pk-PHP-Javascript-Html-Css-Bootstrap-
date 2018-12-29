<?php 

	session_start();
	if (isset($_SESSION['aid'])) {
		 echo "";
	 }

   elseif (isset($_SESSION['id'])) {
    header('location:../darzipanel.php');
   }

   
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title> Help </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/footar.css">
  <link href="https://fonts.googleapis.com/css?family=Corben:700|Delius+Unicase:700|Ewert|Frijole|Galada|Holtwood+One+SC|Modak|Ruthie|Shojumaru|Tangerine:700" rel="stylesheet"> 

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
       .glow-button:hover {
          color: rgba(255, 255, 255, 1);
          box-shadow: 15px 15px 15px rgba(145, 92, 182, .4);
        } 
        .button {
        text-decoration: none;
        color: #dbdbdb;
        background: #00a69c;
        padding: 15px 40px;
        border-radius: 4px;
        font-weight: normal;
        text-transform: uppercase;
        transition: all 0.2s ease-in-out;

      }



         

  </style>
</head>


<body> <div style= "
      background-size: cover;
background-repeat: repeat;
      background-image: url(../assets/images/14.jpg);
      overflow: hidden;
      text-align: center;">


            <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="../index.php"> <img style="height: 100px; width: 170px;" src="../assets/images/logo.png"> </a></li>
        <li ><a href="../help.php"> Help </a></li>
        <li  ><a href="../about.php"> About </a></li>
      </ul>
    
      <!-- NAV END -->


      <br><br><br><br><br><br>

     

<div class="container" style="padding-left: 20%; padding-right: 20%;">
 
 	<h1 style="font-family: 'Tangerine', cursive; font-size: 70px; color: #dbdbdb; border-radius: 40px; text-shadow: 2px 2px 4px white; background-color: #00a69c; border: 4px solid #066c61;">Admin Dashboard</h1><br>
  
        <div >
            <a href="viewdarzis.php" style="color: white;"><button type="button" class="btn btn-info btn-lg" style="width: 70%; height: 70%; background-color: #00a69c;">View All Darzis</button></a>
            <br><br>
            <a href="insertdarzis.php" style="color: white;"> <button type="button"  class="btn btn-info btn-lg" style="width: 70%; height: 70%; background-color: #00a69c;">Insert Darzis</button></a>
            <br><br>
         
         
            <a href="deletedarzis.php" style="color: white;"><button type="button" class="btn btn-info btn-lg" style="width: 70%; height: 70%; background-color: #00a69c;">Delete Darzis</button></a>
            <br><br><br>

             <a  style="font-family: 'Oregano', cursive; font-size: 15px; " class="button glow-button" role="button"  href="admindash.php"> Back to Dashboard </a> &emsp;
              <a  style="font-family: 'Oregano', cursive; font-size: 15px; " class="button glow-button" role="button"  href="logout.php"> Log Out</a>

              <br><br><br>
        </div>


</div>
</div>



<!-- Footer  -->


<div style="background-color:#5b686b" class="footar">
  
<div class="container">
  

  <div class="row">
      

      <div class="col-sm">
        <br><br><br>
        <img style=" height: 55%; width: 74%;" src="../assets/images/logo.png">


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


      <div class="col-sm">
        
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
