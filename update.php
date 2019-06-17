<?php
include_once 'connection.php';
include_once 'session.php';

$user = $_SESSION['user'];
$select_user = "SELECT * FROM user WHERE username='$user'";
$result_check_user = mysqli_query($con,$select_user);
$get_profile = mysqli_fetch_array($result_check_user);


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Update profile</title>
    <style>
    
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron top-banner">
            <div align="center">
                <img src="<?php echo $get_profile['image'];?>" onclick="image_update()" class="profile_pic" alt="">
                <div>
                <br>    
                    <form action="#" enctype="multipart/form-data" method="POST">
                        <input type="file" name="image" class='btn btn-dark' value="<?php echo $get_profile['image']; ?>">
                        <input type="submit" name="update_img" class="btn btn-info" value="Upload">
                    </form>
                </div>
                <br>
               <div class="jumbotron">
                    <form action="#" method="post">
                    <table class="table table-hover  text-center" align="center">
                        <tr>
                        <th>Name :</th>
                        <td><input type="text" name="name" value="<?php echo $get_profile['name']; ?>" class="btn btn-dark"></td>
                        </tr>
                        <tr>
                        <th>Email :</th>
                        <td><?php echo $get_profile['email']; ?></td>
                        </tr>
                        <tr>
                        <th>Date Of Birth :</th>
                        <td><input type="date" name="dob" value="<?php echo $get_profile['dob']; ?>" class="btn btn-dark"></td>
                        </tr>
                        <tr>
                        <th>Hobbies :</th>
                        <td><?php echo $get_profile['hobbies']; ?></td>
                        </tr>
                        <tr>
                        <th>Gender :</th>
                        <td><?php echo $get_profile['gender']; ?></td>
                        </tr>
                        <tr>
                        <th>Phone :</th>
                        <td><?php echo $get_profile['phone']; ?></td>
                        </tr>
                        <tr>
                        <th>Country :</th>
                        <td>
                        <select name="country" class="btn btn-dark" value="<?php $get_profile['country'] ?>">
                            <option value="India">India</option>
                            <option value="US">US</option>
                            <option value="Pakistan">Pakistan</option>
                        </select>
                        </td>
                        </tr>
                        <tr>
                        <td colspan="2"><input type="submit" name="update" class='btn btn-warning text-light' value="Update"></td>
                        </tr>
                    </table>
                    </form>
               </div>
            </div>
            <div align='center' class="jumbotron">
                <a href="welcome.php" class="btn btn-success">Home</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>


<?php

if(isset($_POST['update_img'])){
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $destination = "image/".$img_name;
    move_uploaded_file($tmp_name,$destination);
    $update  = "UPDATE user SET image='$destination' WHERE username='$user' ";
    $result_upload = mysqli_query($con,$update);
    header("location:update.php");
}


if(isset($_POST['update'])){
    $name = $_POST['name'];
    $dob= $_POST['dob'];
    $country = $_POST['country'];
    $update  = "UPDATE user SET name='$name',dob='$dob',country='$country' WHERE username='$user' ";
    $result_upload = mysqli_query($con,$update);
    header("location:update.php");

}

?>