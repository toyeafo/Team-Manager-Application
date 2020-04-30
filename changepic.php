<?php
session_start();
include("includes/header.php");
?>

<?php

include_once("db.php");

$error = false;
if (isset($_POST['stdSubmit'])) {
    $image = $_FILES['profile_pic']['name'];
    $imagetmp = $_FILES['profile_pic']['tmp_name'];
    $folder = 'images/';
    move_uploaded_file($imagetmp, $folder.$image);
    
    if (!$error) {
        $query = "UPDATE users SET image = ('" . $image . "') WHERE username = ('" . $_SESSION['user_name'] . "')";
        if(mysqli_query($conn, $query)) {
            $success_message = "Successfully uploaded image";
        } else {
            $error_message = "Error in uploading image";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<div class="wrapper d-flex align-items-stretch">

    <?php
    include("includes/navbar.php");
    ?>  

    <div id="content" class="p-4 p-md-5">

        <?php
        include("includes/content.php");
        ?>

        <div>
            <span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
        </div>

        <form action="" method="post" class="" enctype="multipart/form-data">

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="profile_pic">
                <label for="profile_pic" class="custom-file-label">Upload</label>
            </div>

            <div class="form-group">
                <input type="submit" class="login-button" name="stdSubmit">
            </div>

        </form>

    </div>

</div>

<?php
include("includes/footer.php");
?>