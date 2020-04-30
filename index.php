<!DOCTYPE html>

<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>


<body>
    
<?php
session_start();
include_once("db.php");
if(isset($_SESSION['user_id'])!="") {
	header("Location: home.php");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password). "'");
    
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['username'];
        if ($row['role'] == 'Admin'){
            header("Location: home.php");
        }else if ($row['role'] == 'Student'){
            header("Location: student/home.php");
        }
	} else {
		$error_message = "Incorrect Email or Password!!!";
	}
}
?>
    
<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="loginform">
    <h1 class="login-title">Login</h1>

    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" placeholder="Please Enter Email" required class="form-control" />
    </div>

    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" name="password" placeholder="Please Enter Password" required class="form-control" />
    </div>

    <input type="submit" value="Login" name="login" class="login-button"/>
    <p class="link"><a href="register.php">New Registration</a></p>
</form>

<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>

</body>
</html>
