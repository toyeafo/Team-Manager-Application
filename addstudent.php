<?php
session_start();
include("includes/header.php");
?>

<?php

include_once("db.php");

$error = false;
if (isset($_POST['stdSubmit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullName']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $coursecode = mysqli_real_escape_string($conn, $_POST['coursecode']);
//    $group = mysqli_real_escape_string($conn, $_POST['group']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    if (!preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        $error = true;
        $uname_error = "Names must contain only alphabets and spaces.";
    }
    
    if (!$error) {
        $query = "INSERT INTO students(fullname, course, coursecode, role) VALUES('" . $fullname . "', '" . $course . "', '" . $coursecode . "', '" . $role . "')";
        if(mysqli_query($conn, $query)) {
            $success_message = "Successfully added Student";
        } else {
            $error_message = "Error in adding student";
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
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Name" value="<?php if($error) echo $name; ?>" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <select name="course" class="form-control" required>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Cybersecurity">Cybersecurity</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Data Science">Data Science</option>
                </select>
            </div>

            <div class="form-group">
                <label for="coursecode">Course Code</label>
                <select name="coursecode" class="form-control" required>
                    <option value="cmm001">CMM001</option>
                    <option value="cmm002">CMM002</option>
                    <option value="cmm003">CMM003</option>
                    <option value="cmm004">CMM004</option>
                    <option value="cmm005">CMM005</option>
                    <option value="cmm006">CMM006</option>
                </select>
            </div>

<!--
            <div class="form-group">
                <label for="group">Group</label>
                <select name="group" class="form-control">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
            </div>
-->

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="Student">Student</option>
                </select>
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