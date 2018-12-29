
<?php 

	session_start();

 
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
      background-image: url(assets/images/6.jpg);
      overflow: hidden;
      text-align: center;">


            <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.php"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>
    
      <!-- NAV END -->


      <br><br><br><br><br><br>

<div class="container" style="padding-left: 20%; padding-right: 20%;">
  
 	<h1 style="color: white;
        font-size: 50px;
        font-family: 'Tangerine', cursive;
        font-size: 90px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61;">Customer Details</h1><br>
	<form method="post" action="customerdetails.php" enctype="multipart/form-data">

<input class="form-control input-lg" type="text" name="name" placeholder="Enter Name" required><br>

<input class="form-control input-sm" type="email" name="email" placeholder="Enter Email address" required> <br>
<input class="form-control input-sm" type="Number" name="phone" placeholder="Enter Contact Number"  required><br>
<textarea class="form-control input-sm" name="adress" placeholder="Enter your address" class="form-control" rows="4" cols="75"></textarea><br>
  <h3 style="
        font-family: 'Tangerine', cursive;
        font-size: 40px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61; background-color: #066c61; opacity: 0.7; border-radius: 6px;">  You Have To Provide Sample For Size</h3>
	<input class="form-control input-lg" type="submit" name="confirmorder" value="Confirm Order">
<br><br><br><br><br><br><br><br><br><br><br>
	</form>


</div>
</div>



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

<?php 

include ('dbcon.php');

if(isset($_POST['confirmorder']))
    {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        


      

        $qry = "INSERT INTO `customers`(`name`,  `email`, `phone`,  `adress`) VALUES ( '$name' , '$email', '$phone',  '$adress' )";

        $result = mysqli_query($con,$qry);



        if($result = true) {

          

          ?>

        <script type="text/javascript"> alert("Succcess");

          window.open('index.php','_self');
          </script>
     

        <?php 



    }
  }

 ?>
