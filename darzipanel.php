<?php 

session_start();

					if(isset($_SESSION['id'])){
				
					}

					else {
        header('location:login.php');
					}

 ?>




 <!DOCTYPE html>
<html>
<head>
	<title> Help </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Corben:700|Delius+Unicase:700|Ewert|Frijole|Galada|Holtwood+One+SC|Modak|Ruthie|Shojumaru|Tangerine:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alike" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="css/footar.css">

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

  </style>
</head>


<body> <div style= "
     background-size: cover;
background-repeat: repeat;
      background-image: url(assets/images/s5.jpg);
      overflow: hidden;
      text-align: center;">


       <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.php"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>
    

 <br><br><br><br><br><br>
      



 <?php 


        include ('dbcon.php');
        

        $name=  $_SESSION['name'];
        $pass= $_SESSION['password'];

        $qry = "SELECT * FROM `darzis` WHERE `name`='$name' AND `password`='$pass' ";

        $result = mysqli_query($con,$qry);

        $data = mysqli_fetch_assoc($result);
      
        $name = $data['name'];
        $email = $data['email'];
        $exp=$data['experience'];
        $date=$data['date'];
        $gender=$data['gender'];
        $phone=$data['phone'];
        $area=$data['area'];
        $adress = $data['adress'];
        ?>
          
       

<div>
    <h1 style="color: white;
        font-size: 50px;
        font-family: 'Tangerine', cursive;
        font-size: 90px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61;
        margin-top: -15px;"> My Profile</h1>  
</div>

<div style="background-color: #00a69c ; opacity: 0.8; height: 400px; width: 100%; border-radius: 25px; color: white;" class="container">
  <div class="row">
    <div class="col-sm-4">
      <br><br>
      <h3 style="text-transform: uppercase;  font-family: 'Almendra', font-weight: bold; font-size: 25px; margin-top: 0px; margin-bottom: -15px;"><?php echo $name; ?></h3>
      <br>
      <img style="margin-left: 35px; border-radius: 25px;" src="a.jpg" alt="..." class="img-thumbnail">

    </div>
    <div class="col-sm-4">
      <br>

       <div  style="margin-left: 0px;  float: left;
        padding-top:0px;
        text-align: center;
        color: white;
        margin-left: 14%;
        ">
  <h1 style="text-align: center;  font-family: 'Tangerine', cursive; font-size: 50px;">Basics</h1>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Experience : <?php echo $exp." Years"; ?> </h3>
  
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Delivers In : <?php echo $date." Days"; ?> </h3>

  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Gender : <?php echo $gender; ?></h3>
  
</div>










    </div>
    <div class="col-sm-4">
      <br>

       <div  style="margin-left: 0px;  float: left;
        padding-top:0px;
        text-align: center;
        color: white;
        margin-left: 14%;
        ">
  <h1 style="text-align: center;  font-family: 'Tangerine', cursive; font-size: 50px;">Contact</h1>
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Phone : <?php echo $phone; ?> </h3>
  
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; font-size: 20px; ">Adress : <?php echo $adress ; ?> </h3>

  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 6px; font-size: 22px; ">Email : <?php echo $email; ?></h3>
  
</div>
</div>

<br>



 
  <br><br><br><br><br>
  </form>
  </div>

</div>


<br>
<div style="padding-bottom: 4%;">
  <a style="margin:auto; width: 10%; background-color: #dbdbdb; color: black;" href="logout.php" class="btn btn-info .btn-group-justified" role="button">Logout</a>
</div>

</div>
        <?php
  


 ?>

        


 		  <!-- Footer  -->

 <div style="background-color:#5b686b" class="footar">
  
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
