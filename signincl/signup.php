<?php
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <!---signupform--->
    <form class="signup-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="form-sign-up">
      <legend id="signup-legend"> </br></br>
        <label for="">
          <input type="text" name="fullname" value="<?php echo $fullname;?>" placeholder="full name" required>
        </label><span class="error">* <?php echo $fullnameErr;?></span></br></br>
        <label for="">
          <input type="text" name="username" value="<?php echo $username;?>" placeholder="your username" required>
           <span class="error">* <?php echo $usernameErr;?></span>
        </label></br></br>
        <label for="">
          <input type="text" name="email" value="<?php echo $email;?>" placeholder="youremail@gmail.com" required>
           <span class="error">* <?php echo $emailErr;?></span>
        </label></br></br>
        <label for="">
          <input type="text" name="phone_number" value="<?php echo $phone_number;?>" placeholder="Phone Number" required>
           <span class="error">* <?php echo $phone_numberErr;?></span>
        </label></br></br>
        <label required>Gender
			      Male<input type="radio" name="gender" value="Male" size="25"> &nbsp &nbsp
			      Female<input type="radio" name="gender" value="Female" size="25"> &nbsp &nbsp
			      Others <input type="radio" name="gender" value="Others" size="25"> &nbsp &nbsp
            <span class="error">* <?php echo $genderErr;?></span>
         </label>   </br></br>
           <label for="">
             <input type="text" name="password" value="<?php echo $password;?>" placeholder="Enter Password"  required></br></br>
              <span class="error">* <?php echo $passwordErr;?></span>
             <input type="text" name="$confirmpassword" value="<?php echo $confirmpassword;?>" placeholder="Confirm Password" required>
             <span class="error">* <?php echo $confirmpasswordErr;?></span>
           </label> 
            </br></br>
           <label for="">
             <button type="submit" class="submit" name="submit" value="Submit" onclick="Submit"> SUBMIT </button>
           </label>


      </legend>

    </form>
    </center>
  </body>
</html>
