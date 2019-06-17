<?php
include_once 'header.php';
?>
<?php
include_once 'connection.php';
error_reporting(0);
if(isset($_POST['signup']))
{
    $name= mysqli_real_escape_string($con,$_POST['full_name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $password_con = mysqli_real_escape_string($con,$_POST['password_con']);
    $dob = mysqli_real_escape_string($con,$_POST['DOB']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $hobbie1 = $_POST['hobbie'];
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $Make_username = $name.rand(0,200);
    $username = str_replace(' ','@',$Make_username);
    $enc_pass = md5($password);
    $error = array();
    if($password !== $password_con){
        array_push($error,"password not match");
    }
    $hobbies = implode(',',$hobbie1);
    $check_user = "SELECT * from user where email='$email' or phone = '$phone' ";
    $result = mysqli_query($con,$check_user);
    
    if(mysqli_num_rows($result)){
        array_push($error,"email phone no already registered");
    }

 

    // echo $hobbies;
    // print_r($error);
    $pic_name= $_FILES['pic']['name'];
    $pic_tmp_name = $_FILES['pic']['tmp_name'];
    $destination = "image/".$pic_name;
    if(!move_uploaded_file($pic_tmp_name,$destination))
    {
        array_push($error,"picture not uploaded");
    }

    if(empty($error))
    {
        $insert = "INSERT INTO user(name,email,password,dob,hobbies,gender,phone,country,username,image) VALUES ('$name','$email','$enc_pass','$dob','$hobbies','$gender','$phone','$country','$username','$destination')";
        if(mysqli_query($con,$insert)){
            header("location:index.php");
        }
    }else{
      

      
        foreach($error as $errors)
        {
            // echo $errors;
            echo '<script>alert("'.$errors.'")</script>';
        }
    }
}

 ?>

<div class="login_body">
<br>
    <div class="signup_box">
    <div align="center" class="bg-danger text-light">
            <?php
       
            ?>
        </div>
   
        <div id="tag_login"> SignUp Here! </div>
        
       
        <form action="#" enctype="multipart/form-data" method="post">
            <table class="table table-hover">
                <tr>   
                    <th class="form_tag">
                        Full Name : 
                    </th>
                    <td>
                        <input type="text" required class="form-group" name="full_name">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Email : 
                    </th>
                    <td>
                        <input type="email" required class="form-group" name="email">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Password : 
                    </th>
                    <td>
                        <input type="password" required minlength="8" title="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" class="form-group" name="password">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Confirm Password : 
                    </th>
                    <td>
                        <input type="password" required minlength="8" title="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" class="form-group" name="password_con">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        DOB : 
                    </th>
                    <td>
                        <input type="date" required class="form-group" name="DOB">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Gender : 
                    </th>
                    <td>
                        <input type="radio" value="Male"  name="gender">Male&nbsp;<input type="radio" value="Female" name="gender">Female&nbsp;<input type="radio" value="Other"  name="gender">Other
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Hobbie : 
                    </th>
                    <td>
                        <input type="checkbox" value="Programing"  name="hobbie[]">Programing&nbsp;<input type="checkbox" value="Dancing" name="hobbie[]">Dancing&nbsp;<input type="checkbox" value="Art"  name="hobbie[]">Art
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Phone : 
                    </th>
                    <td>
                        <input type="number" required minlength="10"  class="form-group" name="phone">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Country : 
                    </th>
                    <td>
                        <select name="country" class="form-group">
                            <option value="India">India</option>
                            <option value="US">US</option>
                            <option value="Pakistan">pakistan</option>
                        </select>
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Profile Picture : 
                    </th>
                    <td>
                        <input type="file" required class="form-group" name="pic">
                    </td>
                <tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" value="SignUp" name="signup" class=" btn btn-outline-info">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                       <a href="index.php">Allready Have An Account</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>




<?php
include_once 'footer.php';

?>