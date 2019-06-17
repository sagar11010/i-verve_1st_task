<?php

include_once 'connection.php';
if(isset($_POST['login'])){
    $u_id = $_POST['u_email'];
    $password =  $_POST['password'];
    $password_enc = md5($password);
    // $error = array();
    $check_email = "SELECT * FROM user WHERE email='".$u_id."' and password='".$password_enc."' ";
    $check_Phone ="SELECT * from user where phone='".$u_id."' and password = '".$password_enc."'";

    $result = mysqli_query($con,$check_email);
    $result2 = mysqli_query($con,$check_Phone);
    if(mysqli_num_rows($result)==1 OR mysqli_num_rows($result2)){
        session_start();
        $_SESSION['u_id'] = $u_id;
        header("location:welcome.php");
    }
    else{
        echo '<script>alert("Username Password Incorrect")</script>';
    }
}


?>
<div class="login_body">
<br>
    <div class="login_box">
    <div align="center" class="bg-danger text-light">
            
        </div>
        <div id="tag_login"> Login Here! </div>
        <form action="#" method="post">
            <table class="table table-hover">
                <tr>   
                    <th class="form_tag">
                        Email/Phone : 
                    </th>
                    <td>
                        <input type="text" required class="form-group" name="u_email">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Password : 
                    </th>
                    <td>
                        <input type="password" required class="form-group" name="password">
                    </td>
                <tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" name="login" value="login" class=" btn btn-outline-info">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                       <a href="signup.php">Create An Account.</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>