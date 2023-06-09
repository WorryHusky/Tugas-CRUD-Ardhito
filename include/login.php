<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("config.php");

session_start();

// if (isset($_SESSION['user'])) {
//     header("Location: index.php");
   
// }

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Database connection code here
    
    $sql = "SELECT * FROM users WHERE user='$user' AND password='$password'";
    $result = mysqli_query($mysqli, $sql);
    
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['user'];
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>


<div class="box">
    <form method="post">
  <h1>Login User</h1>

     <input type="text" name="user" class="user" placeholder="Username" required />
  
    <input type="password" name="password" class="password" placeholder="Password" required />
  
    <button class="btn" type="submit" name="submit">Login</button> 
    <br>
    
    <a class="back" href="registration.php">Sign Up?</a>
   
        


</form>
  
</div> <!-- End Box -->
  
</body>
</html>







