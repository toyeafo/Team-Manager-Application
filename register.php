<!DOCTYPE html>

<html>
<head>
    <link href="./styles/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="register.php" method="post">
                            <h3 class="text-center text-info">REGISTER</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Department:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="REGISTER">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="index.php" class="text-info">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/bootstrap.min.js"></script>

</body>
</html>
