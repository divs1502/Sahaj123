<?php 
include('db_connection.php');

    

if (isset($_POST['submit'])) {
	// echo "button clicked";
	$name = $_POST['name'];
	$username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    //$Confirm_Password = $_POST['Confirm_Password'];
    $gender = $_POST['gender'];

	$query = "INSERT INTO customers(name, username, phone, password, gender ) VALUES ('$name', '$username', '$phone', '$password', '$gender' )";
    
    // echo $query; exit;
	
    if(mysqli_query($conn,$query))
    {
        $_SESSION['success']="Registered Successfully..!!";
        header("Location: index.php");
        exit;
    }
    else
    {
        $_SESSION['error']="User Not Registered Successfully..!!";
        header("Location: index.php");
        exit;
    }
}

// else {
//     echo "ALL FIELDS REQUIERD";
// }
    // mysqli_query($conn,$query);
?>
