<?php
// error_reporting(0);
include_once "session.php";
$destination = '';
if(isset($_POST['upload'])){
    $content = $_POST['content'];
    $date =  date('d/M/Y');
    if($_FILES['file']['name']>1){
    for($i=0;$i<count($_FILES['file']['name']);$i++){
        $file_array = array(
            'name'      => $_FILES['file']['name'][$i],
            'type'      => $_FILES['file']['type'][$i],
            'tmp_name'  => $_FILES['file']['tmp_name'][$i],
            'error'     => $_FILES['file']['error'][$i],
            'size'      => $_FILES['file']['size'][$i]
            );
        $destination .= $file_array['name']."/";
        //echo $destination;
        move_uploaded_file($file_array['tmp_name'],"image/".$file_array['name']);
        $username = $_SESSION['user'];
}
    
    }
    $insert_blog = "INSERT INTO post(content,username,date,images) VALUES ('$content','$username','$date','$destination')";
    if(mysqli_query($con,$insert_blog)){
        header('location:welcome.php');
    }


    
    // echo "<pre>"; print_r($_FILES['file']['name'][0]);
}
















?>