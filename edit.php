<?php
// include database connection file
include_once("include/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $img=$_POST['img'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET user='$user',password='$password',img='$img' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $user = $user_data['user'];
    $password = $user_data['password'];
    $img = $user_data['img'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="box">
        <h1>Edit Your Profile</h1>

    <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data>
                <table border="0">

                    
                    <tr> 
                       
                        <td>Name</td>
                        <td><input class="user" type="text" name="user" value=<?php echo $user;?>></td>
                 
                    </tr>

                <div>

                    <tr> 
                        <td>password</td>
                        <td><input class="password" type="text" name="password" value=<?php echo $password;?>></td>
                    </tr>
                </div>
                <div>

                    <tr> 
                        <td>image</td>
                        <td><input type="file" name="img" value=<?php echo $img;?>></td>
                    </tr>
                </div>
                <div>

                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input class="btn" type="submit" name="update" value="Update"></td>
                    </tr>
                </div>
                    </table>
                </form>
    </div>
</body>
</html>