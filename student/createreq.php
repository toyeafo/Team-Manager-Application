<?php
session_start();
include("includes/header.php");
?>

<?php

include_once("db.php");

$error = false;
if (isset($_POST['stdSubmit'])) {
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);
//    $name = mysqli_real_escape_string($conn, $_POST['coursecode']);
    if (!preg_match("/^[a-zA-Z ]+$/", $subject)) {
        $error = true;
        $uname_error = "Names must contain only alphabets and spaces.";
    }
    
    if (!$error) {
        $query = "INSERT INTO requests(name, subject, reason) VALUES('" . $_SESSION['user_name'] . "', '" . $subject . "', '" . $reason . "')";
        if(mysqli_query($conn, $query)) {
            $success_message = "Successfully submitted request";
        } else {
            $error_message = "Error in submitting request";
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

        <form action="" method="post" class="">

            <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" placeholder="Subject" value="<?php if($error) echo $subject; ?>" name="subject" required>
            </div>

            <div class="form-group">
                <label for="reason">Reason</label>
                <textarea type="text" class="form-control" placeholder="Enter details of the request." name="reason" required></textarea>
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