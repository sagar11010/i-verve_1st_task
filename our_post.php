<?php


include_once "session.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/our_post.css">
    <title>Your Posts</title>
</head>
<body>
<?php
            $user = $_SESSION['user'];
            $post_fetch = "SELECT * FROM post WHERE username='$user' ";
            $result = mysqli_query($con,$post_fetch);
            while($row = mysqli_fetch_assoc($result)){
                $username = $row['username'];
                $get_img = "SELECT * FROM user WHERE username='$username'";
                $runn = mysqli_query($con,$get_img);
                $user_image = mysqli_fetch_array($runn);
            ?>
            <div class="jumbotron">
                <div class="bg-primary post-head">
                    <div class="post_admin text-light"><img src="<?php echo $user_image['image'] ;?>" class="tag-pic" width="32px" height="32px" >&nbsp;<?php echo $row['username']; ?>&nbsp;<span style="float:right;"><?php echo $row['date']; ?></span><div>
                </div>
            </div>
            <div class="bg-light text-center post-content">
                <?php echo $row['content']; ?>
            </div>
            <div class="bg-light text-center post-content">
                <?php
                $image = $row['images'];
                $image = explode('/',$image);
                // print_r($image);
                $total_img = count($image);
                $width = 1000 / ($total_img-1);
                $height= 400;
                // echo $width;
                for($i=0;$i<$total_img-1;$i++){
                    ?>
                    <img src="<?php echo "image/".$image[$i]; ?>" width="<?php echo $width."px";?>" height="<?php echo $height."px";?>">

                   
                    <?php
                    ?>
                     <div><br>
                        <form action="#" method="get">
                            <button value="<?php echo $row['id']; ?>" name="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <?php
                }

                ?>

            </div>
            </div>
            
        </div>
        <?php } ?>
</body>
</html>



<?php

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM post WHERE id='$id'";
    if(mysqli_query($con,$delete)){
        header('location:welcome.php');
    }
}







?>
