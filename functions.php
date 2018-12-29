<?php 
	

	function showdetails()
		{
			include ('dbcon.php');
		
			$qry = "SELECT * FROM `darzis` ";

			$result = mysqli_query($con,$qry);

			if (mysqli_num_rows($result)>0) {
				
				while($data = mysqli_fetch_assoc($result)) {

				?>




					
            

					


<div class="row" style="width: 60%; margin: auto; margin-bottom: 15px; margin-top: 10px; background-color: #00a69c; border-radius: 40px; z-index: 1; padding:5px;">
  <div style="width: 100%;">

    	<div class="content" style="width: 100%; ">
    	<div style="float: left; padding-left: 25px; margin-top: -20px;"><img style="height: 230px; width: 300px;  padding-left: 3px; margin-top: -15px; margin-bottom: 9px;" src="a.jpg" class="img-thumbnail" style=""></div>
      
      	<div style=" margin-top:45px; padding-right: 30px; margin-bottom: -37px;">
       
    <h2 style="text-transform: uppercase; font-family: 'Almendra', serif"><?php echo $data['name']; ?></h2>
				   <hr style="float: right; width: 60%;">
				<h5 style="text-transform: uppercase; font-family: 'Alike', serif;" > Area : <?php echo $data['area']; ?></h5>
				<h5 style="text-transform: uppercase; font-family:'Alike', serif;" > Delivery in : <?php echo $data['date']. " Days"; ?></h5>
				<form action="profile.php" method="post">
					<input type="submit" class="btn-info" name="<?php echo $data['id']; ?>" value="Order">
				</form>
			</div>
    </div>


<br><br><br>


			

	</div>
	<br>
	<hr>
</div>




					<?php

						}


						}
					}

					?>


<?php 

	function profiledisplay() {

				include ('dbcon.php');
				foreach ($_POST as $key => $value) {
					$sid= $key;
				}

				

				$qry = "SELECT * FROM `darzis` WHERE `id`='$sid'";

				$result = mysqli_query($con,$qry);

				$data = mysqli_fetch_assoc($result);
				$name = $data['name'];
				$email = $data['email'];
				$experience=$data['experience'];
				$date=$data['date'];
				$gender=$data['gender'];
				$phone=$data['phone'];
				$area=$data['area'];
				?>

      


<div>
    <h1 style="color: white;
        font-size: 50px;
        font-family: 'Tangerine', cursive;
        font-size: 90px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61;
        margin-top: -15px;"> Darzi Profile</h1>  
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
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Experience : <?php echo $experience." Years"; ?> </h3>
  
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
  
  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 20px; ">Area : <?php echo $area ; ?> </h3>

  <h3 style="background-color: #066c61; opacity: 0.8; border-radius: 20px; padding-left: 25px; padding: 6px; font-size: 20px; ">Email : <?php echo $email; ?></h3>
  
</div>
</div>

<br>



 
  <br><br><br><br><br>
  </form>
  </div>

</div>


<br>
<div style="padding-bottom: 4%;">
  <a style="margin:auto; width: 10%; background-color: #dbdbdb; color: black;" href="customerdetails.php" class="btn btn-info .btn-group-justified" role="button">Order Form</a>
</div>

</div>



<?php
	}


 ?>





 <?php 

	function paneldisplay() {

				include ('dbcon.php');
				
		$id = $_SESSION['id'];

        $qry = "SELECT * FROM `darzis` WHERE `id`='$id' ";

        $result = mysqli_query($con,$qry);

        $data = mysqli_fetch_assoc($result);

        $name = $data['name'];
				$email = $data['email'];
				$experience=$data['experience'];
				$date=$data['date'];
				$gender=$data['gender'];
				$phone=$data['phone'];
				$area=$data['area'];


        ?>
			 <div >
  <h1 style=" font-size: 110px; color: white;
        font-size: 50px;
        font-family: 'Tangerine', cursive;
        font-size: 90px;  
        color: white;  
        text-shadow: 2px 2px 4px #066c61; ; text-align: center;  margin: auto; font-weight: bold;">My Profile</h1>
   
</div>
<br>

<div style="background-color: #00a69c ;opacity: 0.8; height: 400px; width: 100%; border-radius: 25px;" class="container">
  <div class="row">
    <div class="col-sm-4">
      <br><br>
      <h3 style="text-transform: uppercase; font-family: 'Russo One', sans-serif; font-weight: bold;"><?php  		echo $name; ?></h3>
      <br>
      <img style="margin-left: 35px; border-radius: 25px;" src="a.jpg" alt="..." class="img-thumbnail">

    </div>
    <div class="col-sm-4">
      <br><br>
      <h3 style=" font-family: 'Almendra', serif; font-weight: bold;">BASICS</h3>
      <address>
              <strong style="font-family: 'Oregano', cursive;" >Experience</strong><br>
              <?php echo $exp ." years"; ?>
            </address>

   <address>
              <strong style="font-family: 'Oregano', cursive;" >Delivers In</strong><br>
              <?php echo $date . " days"; ?>
            </address>

            <address>
              <strong style="font-family: 'Oregano', cursive;">Gender</strong><br>
               <?php echo $gender; ?>
            </address>




    </div>
    <div class="col-sm-4">
      <br><br>
      <h3 style="font-family: 'Almendra', serif; font-weight: bold; ">CONTACT</h3> 
      <address>
              <strong style="font-family: 'Oregano', cursive;">Phone</strong><br>
              <?php echo $phone; ?>
            </address>
<address>
              <strong style="font-family: 'Oregano', cursive;">Address</strong><br>
              <?php echo $adress; ?>
            </address>

            <address>
              <strong style="font-family: 'Oregano', cursive;">Email Address</strong><br>
              <a> <?php echo  $email; ?> </a>
            </address>

            </div>
  </div>

</div>
<br>

<a style="margin:auto;" href="logout.php" class="btn btn-info .btn-group-justified" role="button">Logout</a>

 
  <br><br><br><br><br><br><br><br>
  </form>
  </div>
</div>
				<?php
	}


 ?>