<?php
//    session_start();
//     To destroy session
//    if(session_destroy()) {
//         Direct to Login Page
//        header("Location: index.php");
//    }
?>

<?php
ob_start();
session_start();
if(isset($_SESSION['user_id'])) {
	session_destroy();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>