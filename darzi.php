<!DOCTYPE html>
<html>
<head>
  <title> Help </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/about.css">

  <style type="text/css">
    li a{
        float: right;
        padding-right: 9%;
        padding-top: 2%;
        font-size: 38px;
        color: #066c61;
          text-decoration : none;
      }

       li a:hover {
        text-decoration : none;
      } 

  </style>
</head>


<body> <div style= " background-color: #066c61;">


            <!-- NAV -->

      <ul style="list-style-type: none; margin: 0; padding: 0;">
        <li style="display: inline; float: left; padding-left: 4%;"><a href="index.php"> <img style="height: 100px; width: 170px;" src="assets/images/logo.png"> </a></li>
        <li ><a href="help.php"> Help </a></li>
        <li  ><a href="about.php"> About </a></li>
      </ul>






<div class='darzi darzi-image'>

<div class='jumbotron'>
<div class='darziForm-content'>
 <div class='display-4 mb-4'>Want to become Darzi?</div>
	<form action="darzi.php " method="post">
     <div class='form-group'>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
</div>

<div class='form-group'>

        <input type="tel" id="phone" name="phone" class="form-control"
           placeholder="Phone Number" pattern=".{11,11}" required title="enter accurate phone Number"
           required />
     </div>

    <div class='form-group'>

        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
</div>
<div class='form-group'>

        <input type="password" name="password"  class="form-control" id="password" placeholder="Password" pattern=".{5,10}" required title="5 to 10 characters">

     </div>

    <div class='form-group'>
    <select name="genderBox" id="" class='form-control'>
        <option value='Male' selected>Male</option>
     	 	<option value='Female'>Female</option>
     	 	<option value='Other'>Other</option>
    </select >

 </div>
 <div class='form-group'>
      <select name="experience" class="form-control">
      	 	<option>Experience</option>
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
     	 </select>
     </div>
      <div class='form-group'>
        <textarea name="address" placeholder="Enter your address" class="form-control" rows="4" cols="75"></textarea>
     </div>
     <br>


   <div class='form-check mb-4'><input class='form-check-input' type="checkbox">  I agree to the terms and conditions</div>

<button type="submit" name="signUp" class='btn btn-primary'>Submit</button>
</form>
</div>
</div>


</div>

</div>

