<?php 
include('db_connection.php');



if(isset($_POST['login'])) 
{

  extract($_POST);

  $query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($result,MYSQLI_ASSOC);

  //if($data['id']!='')
  if(!empty($data))
  {
      $_SESSION['Auth'] = $data;
      header("Location: dashboard.php");
      exit;
  }
  else
  {
      $_SESSION['error']="Login Failed..!! Username or Password Not Matched..!";
      header("Location: login.php");
      exit;
  }


}



if(isset($_POST['register'])) 
{
    header("Location: index.php");
    exit;
}



?>

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

    
    <?php if(isset($_SESSION['error'])){ echo "<strong style='color: red;'>".$_SESSION['error']."</strong>"; }?>

    <?php unset($_SESSION['error']);  ?>
    <div class="title">Login</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">

          

          <div class="input-box">
            <span class="details">Username</span>
            <input name="username" type="text" placeholder="Enter your username" required>
          </div>

          
          
          <div class="input-box">
            <span class="details">Password</span>
            <input name="password" id="password" type="password" placeholder="Enter your password" required>
          </div>


          
        </div>


        
        <div class="button">
          <input type="submit" value="Login" name="login">
        </div>

      </form>


      <form action="" method="post">
        <div class="button">
          <input type="submit" value="Register" name="register">
        </div>


      </form>
    </div>
  </div>

</body>
</html>