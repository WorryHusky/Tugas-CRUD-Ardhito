
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];
        $img = $_FILES['image']['name'];

        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(user,password,img) VALUES('$user','$password','$img')");
        
        // Show message when user added
        echo "<p class='echo'>User added successfully.</p>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
     <link rel="stylesheet" href="../css/add.css">
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="box">
   
     <h1>Add User</h1>
     <div>Please Insert User</div>
     <form action="add.php"  method="post" name="form1"enctype="multipart/form-data">
         <div> <!-- User -->
            <input type="text" class="user" name="username" placeholder="Enter Username" id="user" autofocus required>
         </div>

         <div>  <!-- Password -->
            <input name="password" class="password" type="password" placeholder="Enter Password" id="password" required>
         </div>

        <div>
            <input type="file" name="image" accept="image/*"/>
        </div>
        

         <div> <!-- Submit -->
           <button class="btn" type="submit" name="submit">Add User</button>
             
             <br>
         </div>

         <div> <!-- Back -->
         <a class="back" href="../index.php">Go Back?</a>
         </div>
     </form>
    </div>
    
</body>
</html>