
<?php 

	session_start();
	if (isset($_SESSION['aid'])) {
		header('location:admin/admindash.php');
	 }

   elseif (isset($_SESSION['id'])) {
    header('location:../darzipanel.php');
   }

   
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title> Admin Login </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:600i" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Corben:700|Delius+Unicase:700|Ewert|Frijole|Galada|Holtwood+One+SC|Modak|Ruthie|Shojumaru|Tangerine:700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Alike" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/css/footar.css">

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
      background-image: url(assets/images/8.jpg);
      overflow: hidden;
      text-align: center;">


            <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.php"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>
    
      <!-- NAV END -->


      <br><br><br><br><br><br><br><br><br>

<div class="container" style="padding-left: 20%; padding-right: 20%;">
 
 	<h1 style="font-family: 'Tangerine', cursive;  font-size: 70px;  color: #066c61;  text-shadow: 2px 2px 4px white;; background-color: #00a69c; border: 4px solid #066c61; border-radius: 40px; ">Admin Sign In</h1><br>
	<form method="post" action="loginadmin.php" enctype="multipart/form-data">

<input class="form-control input-lg" type="text" name="name" placeholder="Enter Name" required><br>
<input class="form-control input-lg" type="password" name="password" placeholder="Enter Password" required><br>
	<input class="form-control input-lg" type="submit" style=" background-color: #066c61; color: white;" name="login" value="Login As Admin" style="color: #066c61;">
<br><br><br><br><br><br><br><br><br><br><br><br>
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

if(isset($_POST['login']))
		{
      
				$username = $_POST['name'];
				$password = $_POST['password'];

				$query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
				$result = mysqli_query($con,$query);




				if(!$result) {

        

					?>

					<script>
						  alert('Username or Password Not Match!');
						  window.open('loginadmin.php','_self');
					</script>
				
					<?php
				}
        else {
          
          
					$data = mysqli_fetch_assoc($result);
          
					$id = $data['username'];
					
					$_SESSION['aid']=$id;
       

          $a = $_SESSION['aid'];
       
					 header('location:admin/admindash.php');
       

				}
		}

 ?>
