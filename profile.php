<?php

include_once 'connection.php';
include_once 'session.php';


?>
<?php
include_once "profile/profile_header.php";

// fetch_user details
$user = $_SESSION['user'];
$select_user = "SELECT * FROM user WHERE username='$user'";
$result_check_user = mysqli_query($con,$select_user);
$get_profile = mysqli_fetch_array($result_check_user);

?>

<div class="container">
    <div class="jumbotron top-banner">
        <div align="center">
            <img src="<?php echo $get_profile['image']; ?>" class="profile_pic" alt="">
        </div>
        <br>
        <div align="center" class="text-light">
            <h3><?php echo $get_profile['username']; ?></h3>
        </div>
    </div>
    <div class="jumbotron">
    <table class="table table-hover  text-center" align="center">
        <tr>
        <th>Name :</th>
        <td><?php echo $get_profile['name']; ?></td>
        </tr>
        <tr>
        <th>Email :</th>
        <td><?php echo $get_profile['email']; ?></td>
        </tr>
        <tr>
        <th>Date Of Birth :</th>
        <td><?php echo $get_profile['dob']; ?></td>
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
        <td><?php echo $get_profile['country']; ?></td>
        </tr>
    </table>
    </div>
    <div class="jumbotron" align="center">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <a href="welcome.php" class="btn btn-success">Back To Home</a>
        <a href="update.php" class="btn btn-warning text-light">Update Profile</a>
    </div>
</div>