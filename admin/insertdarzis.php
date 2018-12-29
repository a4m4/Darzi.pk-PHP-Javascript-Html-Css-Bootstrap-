<?php 

  session_start();
  if (isset($_SESSION['aid'])) {
    echo "";
   }

   elseif (isset($_SESSION['id'])) {
    header('location:darzipanel.php');
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
        border-color: white;

      }

  </style>
</head>


<body> <div style= "
     background-size: cover;
background-repeat: repeat;
      background-image: url(../assets/images/12.jpg);
      overflow: hidden;
      text-align: center;">


            <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="../index.php"> <img style="height: 100px; width: 170px;" src="../assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>
    

 <br><br><br><br><br><br>
 		


       <a  style="font-family: 'Oregano', cursive; font-size: 15px; float: left; margin-left: 30px; margin-top: 3%;  " class="button glow-button" role="button"  href="admindash.php" > Back to Dashboard </a> &emsp;
              <a  style="font-family: 'Oregano', cursive; font-size: 15px; float: right; margin-top: 3%; margin-right: 30px;" class="button glow-button" role="button"  href="logout.php"> Log Out</a>
  <h1 style="font-family: 'Tangerine', cursive; font-size: 70px; color: #dbdbdb; border-radius: 40px; text-shadow: 2px 2px 4px white; background-color: #00a69c; border: 4px solid #066c61; text-align: center;">Insert Darzis</h1>

  <br>
<div style="margin-left: 6%; margin-right: 40%;">


<form method="post" action="insertdarzis.php" enctype="multipart/form-data">

<input class="form-control input-sm" type="text" name="name" placeholder="Enter Name" required><br>
<input class="form-control input-sm" type="password" name="password" placeholder="Enter Password" required><br>

<select class="form-control input-sm" name="gender" required>
        <option>Your Gender</option>
        <option value='Male' >Male</option>
     	<option value='Female'>Female</option>
    </select ><br>

<input class="form-control input-sm" type="email" name="email" placeholder="Enter Email address" required> <br>
<input class="form-control input-sm" type="Number" name="phone" placeholder="Enter Contact Number"  required><br>

<input class="form-control input-sm" type="text" name="area" placeholder="Enter Area"  required><br>
<textarea class="form-control input-sm" name="adress" placeholder="Enter your address" class="form-control" rows="4" cols="75"></textarea><br>

<select class="form-control input-sm" name="experience" class="form-control">
      	 	<option>Experience In Years</option>
      	 	<option  value='1'>1</option>
      	 	<option  value='2'>2</option>
      	 	<option  value='3'>3</option>
      	 	<option  value='4'>4</option>
     	 	<option  value='5'>5</option>
     	 	<option  value='6'>6</option>
     	 	<option  value='7'>7</option>
     	 	<option  value='8'>8</option>
     	 	<option  value='9'>9</option>
     	 	<option  value='10'>10</option>
     	 	<option  value='11'>11</option>
     	 	<option  value='12'>12</option>
     	 	<option  value='13'>13</option>
     	 	<option  value='14'>14</option>
     	 	<option  value='15'>15</option>
     	 </select><br>

<select class="form-control input-sm" name="date"  required><br>
					<option>I Will Deliver Within</option>
					<option value="5">5 days</option>
					<option value="10">10 days</option>
</select> <br>

	<input class='form-check-input' type="checkbox">  I agree to the terms  and conditions

<br><br> <input class="form-control input-sm" type="submit" name="submit" value="Submit">

	</form>
<br><br><br><br>

<br><br><br><br><br>


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



<?php 

include ('dbcon.php');

if(isset($_POST['submit']))
    {
        $username = $_POST['name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $area = $_POST['area'];
        $adress = $_POST['adress'];
        $exp = $_POST['experience'];
        $date = $_POST['date'];


      

        $qry = "INSERT INTO `darzis`(`name`,  `password` , `gender`, `email`, `phone`, `area`, `adress`, `experience`, `date`) VALUES ( '$username', '$password' ,'$gender', '$email', '$phone', '$area' , '$adress', '$exp', '$date' )";

        $result = mysqli_query($con,$qry);



        if($result = true) {

          ?>

        <script type="text/javascript"> alert("You Have Succcessfully Added New Darzi");</script>

        <?php 

                        }
        else{

          ?>

          <script type="text/javascript"> alert("Error! Something Missing...");
          window.open("insertdarzi.php","_SELF")
          </script>
        

          <?php

        }

    }
  

 ?>
