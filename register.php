<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

<?php
include_once("db.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: home.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$uname_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO users(username, email, password, role) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "', '" . $role . "')")) {
			$success_message = "Successfully Registered! <a href='index.php'>Click here to Login</a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	}
}
?>
    
<div>
    <span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
    <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
</div>

<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
    <h1 class="login-title">Registration</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
        <span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
    </div>

    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
    </div>

    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" name="password" placeholder="Password" required class="form-control" />
        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
    </div>

    <div class="form-group">
        <label for="name">Confirm Password</label>
        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" class="form-control" required>
            <option value="Admin">Admin</option>
            <option value="Student">Student</option>
        </select>
    </div>

    <input type="submit" name="signup" value="Sign Up" class="login-button">
    <p class="link"><a href="index.php">Click to Login</a></p>
</form>
    
    
    
</body>
</html>
