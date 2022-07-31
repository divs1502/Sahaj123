<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>E-pass</title>
   </head>
   <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>



   <script>  
    function matchPassword() {  
      var pw1 = document.getElementById("password").value;  
      var pw2 = document.getElementById("Confirm_Password").value;  

      // alert(pw1);
      // alert(pw2);

      if(pw1 != pw2)  
      {   
        alert("Passwords did not match");  
      } 
    }  
    </script>  





<body>
  <div class="container">

    <?php if(isset($_SESSION['success'])){ echo $_SESSION['success'];
      header("Location: login.php");
      // exit;
    }?>
    <?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; }?>

    <?php unset($_SESSION['success']);  unset($_SESSION['error']); 
    ?>

    <div class="title">Registration</div>
    <div class="content">
      <form action="insert.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="name" type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input name="username" type="text" placeholder="Enter your username" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div> -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <!-- <input name="phone" type="text" placeholder="Enter your number" required> -->
            <input type="tel" id="phone" name="phone"  placeholder="Enter your phone number" size="10" minlength="10" maxlength="10" pattern="[0-9]+"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                   required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name="password" id="password" type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="Confirm_Password" id="Confirm_Password" onchange="matchPassword()" type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <!-- <input type="radio" name="gender" id="dot-3"> -->
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <!-- <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label> -->
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>