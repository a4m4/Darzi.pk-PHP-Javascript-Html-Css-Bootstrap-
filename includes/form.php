
<?php

<h1>DARZI FORM</h1>
    <form>
     <div>
        <label for="firstname">Name : </label>
        <input type="text" id="first name" placeholder="Enter your name " required>
        &emsp;
        <label>Phone Number</label>
        <input type="tel" id="phone" name="phone"
           placeholder="xxxx-xxxxxxx" pattern=".{11,11}" required title="enter accurate phone Number"  
           required />
     </div>
     <br>
    <div>
        <label for="email"> Email Address : </label>
        <input type="email" placeholder="Enter valid email" required>
        &emsp;
        <label>Set Password : </label>
        <input type="password" placeholder="set your password" pattern=".{5,10}" required title="5 to 10 characters">

     </div>
    <br>
    <div>
    <label>Select Gender</label>    
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
     &emsp;
     &emsp;
     &emsp;
     <label>Year of Experience: </label><select name="date">
            <option>Experience</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
         
         </select>
     </div> 
      <div>
        <p>Address</p>
        <textarea name="paragraph" rows="4" cols="75">
        </textarea>
     </div>
     <br>
     

     <p>I agree to the terms and condtions.<input type="checkbox">
 </p>  
    
<button>Submit</button>
</form>
 ?>

